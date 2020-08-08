<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $_SESSION['username'] = $session_data['username'];
     $id = $this->user->getid($_SESSION['username']);
     foreach ($id as $ids) {
          $_SESSION['id'] =  $ids->id; 
     }
     $bal = $this->user->walletlogo($_SESSION['id']);
      foreach ($bal as $b) {
          $_SESSION['balance'] =  $b->balance; 
     }
     $_SESSION['cart'] = $this->user->cartlogo($_SESSION['id']);
     $data = array(
                'username'  => $session_data['username'],
                'home_active' => 'true'
               );

     $this->load->view('header');
     $this->load->view('sidenav', $data);
     $this->load->view('home_view', $data);
     $this->load->view('footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
  function logout()
  {
    echo "<script>alert('Are you sure you would like to logout');</script>";
    $newdata = array(
                'user_name'  =>'',
                'user_email' => '',
                'logged_in' => FALSE,
               );
     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();
     redirect('login','refresh');
  }

  function cakes()
  {
     if($this->session->userdata('logged_in'))
     {
     $session_data = $this->session->userdata('logged_in');
     $username= $session_data['username'];
     $loc = $this ->user->getlocationsfromdatabase();
     $data = array(
      'cakes_active'=>'true',
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username'),
      'cakes_active'=>'true',
      'loc'=>$loc
      );
     $this->load->view('header');
     $this->load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('cakes_view',$data);
     $data1 = array(
      'cakes_active'=>'true',
      'loc'=>$loc
      );
     $this->load->view('cakeslocation_view',$data1);
     $this->load->view('footer');
     
  }
  else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
    //echo "Go to Home page and login to yur account";
   }
}

  function gifts()
  {
    if($this->session->userdata('logged_in')){
     $data = array(
      'gifts_active'=>'true',
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
     $this->load->view('header');
     $this->load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('gifts_view');
     $this->load->view('footer');
  }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   // echo "Go to Home page and login to yur account";
   }
}
  function suggestions()
  {
    if($this->session->userdata('logged_in')){
     $data = array(
      'suggestions_active'=>'true',
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
     $this->load->view('header');
     $this-> load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('suggestions_view',$data);
     $this->load->view('footer');
  }
  else{
     echo "<script>alert('Go to Home page and login to your account');</script>";
    redirect('login', 'refresh');
   }
}
function setsuggestions()
 {
    $this->load->model('user','',TRUE);
    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phoneno=$this->input->post('phoneno');
    $suggest=$this->input->post('suggest');
    $this->user->getsuggestions($name,$email,$phoneno,$suggest);
   echo "<script>alert('thank you for giving your valuable suggestions');</script>";

   //redirect('home', 'refresh');
 }
 function sendmessage(){
    $this->load->model('user','',TRUE);
    $rec = $this->input->post('name');
    $rec_id1 = $this->user->getid($rec);
    foreach($rec_id1 as $r){
      $rec_id = $r->id;
    }
    echo $rec; echo $rec_id;
    $message = $this->input->post('message');
    $this->user->send($rec_id,$message);

    echo "<script>alert('your message is successfully sent!');</script>";
    redirect('home', 'refresh');
 }
 public function verifyregister()
 {
    $this->load->model('user','',TRUE);
    $name=$this->input->post('username');
    $email=$this->input->post('emailid');
    $password=$this->input->post('password');
    $conpassword=$this->input->post('conpassword');
    if($password == $conpassword){
      $this->user->register($name,$email,$password);
      echo "<script>alert('thank you for registering into our website ');</script>";
    }
    else{
      echo "<script>alert('Passwords didn't match');</script>";
      redirect('Login','refresh');
    }

 }
 function setmessage(){
    $this->load->model('user','',TRUE);
    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phoneno=$this->input->post('message');
    $suggest=$this->input->post('suggest');
    $this->user->getsuggestions($name,$email,$message);
   echo "<script>alert('thank you for using our website to send message');</script>";

 }
  function about()
  {
    if($this->session->userdata('logged_in')){
     $data = array(
      'about_active'=>'true',
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
     $this->load->view('header');
     $this-> load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('about_view');
     $this->load->view('footer');
  }
  else{
    echo "<script>alert('Go to Home page and login to your account');</script>";
    redirect('login', 'refresh');
   }
}
 function cart(){
  if($this->session->userdata('logged_in')){
    $this->load->model('user','',TRUE);
    $session_data = $this->session->userdata('logged_in');
    $user_name = $session_data['username'];
    $user_id = $this->user->getid($user_name);
    foreach ($user_id as $m) {
     $data = array(
      'cart_active'=>'true',
      'details'=>$this->user->getcartitems($m->id),
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
    }
     
     $this->load->view('header');
     $this-> load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('cart_view',$data);
     $this->load->view('footer');
   }
   else{
    echo "<script>alert('Go to Home page and login to your account');</script>";
    redirect('login', 'refresh');
   }
 }
  function getcakeshops()
  { 
    if($this->session->userdata('logged_in')){
     $data = array(
      'cakes_active'=>'true'
      );
  $this->load->model('user','',TRUE);
   $this->load->library('form_validation');
   $this->form_validation->set_rules('location', 'location', 'trim|required|xss_clean');
   if($this->form_validation->run() == TRUE)
   {
      $location = $this->input->post('location');
      $shops = $this->user->getshops($location);
      $loc = $this ->user->getlocationsfromdatabase();
      if ($shops == TRUE && $loc == TRUE) {
          $data = array(
      'cakes_active'=>'true',
      'shops'=>$shops,
      'loc'=>$loc,
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
      $this->load->view('header');
     $this-> load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('cakesdisplay_view',$data);
     $this->load->view('cakeslocation_view',$data);
     $this->load->view('footer');
      }
      else
         redirect('home/cakes', 'refresh');
   }
   else
   {
     redirect('home/cakes', 'refresh');
   }
 
 } 
else
{
  echo "<script>alert('Go to Home page and login to your account');</script>";
    redirect('login', 'refresh');
}
}
 function getgifts($category)
 {
      if($this->session->userdata('logged_in')){
      $this->load->model('user','',TRUE);
      $giftss = $this->user->getgiftsfromdatabase($category);
      if ($giftss == TRUE) {
          $data = array(
      'gifts_active'=>'true',
      'gifts'=>$giftss,
      'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
      $this->load->view('header');
      $this-> load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('giftsdisplay_view',$data);
     $this->load->view('footer');          
      }
    }
      else{
        echo "<script>alert('Go to Home page and login to your account');</script>";
        redirect('login', 'refresh');
      }
  }
  function giftdetails($image_id)
  {
    if($this->session->userdata('logged_in')){
    $this->load->model('user','',TRUE);
    $data = array(
      'gifts_active'=>'true',
        'details' => $this->user->getgiftdetails($image_id),
        'ncart' => $this->user->cartlogo('username'),
      'nwallet' => $this->user->walletlogo('username')
      );
    $this->load->view('header');
    $this->load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('giftdetails_view',$data);
     $this->load->view('footer');
  }
else{
        echo "<script>alert('Go to Home page and login to your account');</script>";
        redirect('login', 'refresh');
      }

}

  function add_cart($cart_image)
  {
    $this->load->model('user','',TRUE);
    $session_data = $this->session->userdata('logged_in');
    $user_name = $session_data['username'];
    $user_id = $this->user->getid($user_name);
    foreach ($user_id as $m) {
     $this->user->addcart($m->id,$cart_image);
    }
    $data = array(
      'cart_active'=>'true',
        'details' => $this->user->getgiftdetails($cart_image)
      );
     $this->load->view('header');
     $this->load-> view('cart_logo');
     $this->load->view('sidenav',$data);
     $this->load->view('cart_view',$data);
     $this->load->view('footer');
  }
  function removeFromCart($id){
  $_SESSION['cart']-=1;
  $this->db->query('DELETE FROM cart WHERE cart_image='.$id);
  $this->load->model('user','',TRUE);
  $session_data = $this->session->userdata('logged_in');
  $user_name = $session_data['username'];
  $data = array(
      'home_active'=>'true',
        'details' => $this->user->getgiftdetails($id),
        'bal' => $this->user->getwalletbalance($id)
      );
    echo "<script>alert('successfully removed from your cart');</script>";
        redirect('home', 'refresh');
}
function ProceedCheckout($id){
  //$this->user->removeFromCart($id);
  //window.alert("Money is paid successfully from your wallet");
  echo $id;
  $cost =$this->user->getcost($id);
  $user_name = $_SESSION['username'];
  foreach ($cost as $c) {
  //$query = $this->db->query('UPDATE wallet set balance=balance-'.$c->cost);*/
  $data= array(
    'home_active' =>'true',
    'username'=> $user_name,
    //'details'=>$this->user->getcartitems($m->id),
    'cost'=>$c->cost
    );
    if($c->cost < $_SESSION['balance']){
      $_SESSION['balance']-=$c->cost;
      $this->user->deduct($c->cost,$id);
      echo "<script>alert('successfully
      deducted the amount from your account');</script>";
    }
    else{
      echo "<script>alert('Insufficient balance in your account, cannot proceed to checkout');</script>";
    }
  }  
     redirect('home','refresh');
   
}
function wallet(){
  $this->load->model('user','',TRUE);
  $session_data = $this->session->userdata('logged_in');
  $user_name = $session_data['username'];
  $id=$this->user->getid($user_name);
  foreach ($id as $m) {
  $data = array(
      'wallet_active'=>'true',
        'bal' => $this->user->getwalletbalance($m->id)
      );
}
     $this->load->view('header');
     $this-> load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('wallet_view',$data);
     $this->load->view('footer');
}
function messages(){
   $this->load->model('user','',TRUE);
  $session_data = $this->session->userdata('logged_in');
  $user_name = $session_data['username'];
  $id=$this->user->getid($user_name);
  foreach ($id as $m) {
   $data = array(
        'home_active'=>'true',
        'bal' => $this->user->getwalletbalance($m->id),
        'message'=> $this->user->getmessage($m->id)
      );
  }
  $this->load->view('header');
  $this-> load-> view('cart_logo',$data);
  $this->load->view('sidenav',$data);
  $this->load->view('messages_view',$data);
  $this->load->view('footer');
}
function compose(){
  $this->load->model('user','',TRUE);
  $session_data = $this->session->userdata('logged_in');
  $user_name = $session_data['username'];
  $id=$this->user->getid($user_name);
  foreach ($id as $m) {
   $data = array(
        'home_active'=>'true',
        'bal' => $this->user->getwalletbalance($m->id),
        'message'=> $this->user->getmessage($m->id)
      );
  }
  $this->load->view('header');
  $this->load-> view('cart_logo',$data);
  $this->load->view('sidenav',$data);
  $this->load->view('compose_view',$data);
  $this->load->view('footer');
}
}