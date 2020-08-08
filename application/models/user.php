<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function register($name,$email,$password)
 {
   $data=array(
      'username'=>$name,
      'emailid'=>$email,
      'password'=>md5($password)
      );
  $this->db->insert('users',$data);
  $ids = $this->user->getid($name);
     foreach ($ids as $i) {
          $id =  $i->id; 
     }  
  $data = array(
                'user_id' => $id,
                  'balance' => 1000);
  $this->db->insert('wallet',$data);
   echo "<script>alert('successfully registered!!');</script>";
  redirect('home','refresh');
 }
 function getsuggestions($name,$email,$phoneno,$suggest)
 {
  $data=array(
    'name'=>$name,
    'email'=>$email,
    'phoneno' =>$phoneno,
    'suggest' =>$suggest
  );
  //echo $data['phoneno'];
  $this->db->insert('suggestions',$data);
}
function addcart($user_id,$cart_image){
  $data = array(
    'user_id'=> $user_id,
    'cart_image'=> $cart_image
    );
  $this->db->insert('cart',$data);
  $_SESSION['cart']++;
}
public function getid($username)
{
  $this-> db-> select('id');
  $this-> db -> from('users');
  $this-> db -> where('username',$username);
  $query = $this -> db -> get();
  if($query -> num_rows() > 0)
   {
     //echo "<script>alert('shops found!!');</script>";
     return $query->result();
   }
   else
   {
     echo "<script>alert('invalid user');</script>";
     return false;
   }
}
public function getcartitems($id)
{
  $query=$this->db->query('SELECT *
                           FROM image 
                           WHERE image_id IN
                            (SELECT cart_image FROM cart WHERE user_id='.$id.')');
  if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     echo "<script>alert('no items in your cart');</script>";
     redirect('home','refresh');
     return false;
   }

}
public function cartlogo($id)
{
  $query= $this-> db->query('SELECT * FROM cart WHERE user_id ='.$_SESSION['id']);
     return count($query->result());

}public function walletlogo($id)
{
  $query= $this-> db->query('SELECT balance 
                              FROM wallet 
                              WHERE user_id ='.$_SESSION['id']);
    return $query->result();
}

 public function getshops($location)
 {
    $this -> db -> select('shopname,contact_no');
   $this -> db -> from('cake');
   $this -> db -> where('location', $location);
   $query = $this -> db -> get();

   if($query -> num_rows() > 0)
   {
     echo "<script>alert('shops found!!');</script>";
     return $query->result();
   }
   else
   {
     echo "<script>alert('No shops in given locations found');</script>";
     return false;
   }
 }
public function getphotos(){
  $this -> db -> select('image_add');
   $this -> db -> from('image');
   $this -> db -> where('category','ph');
   $query = $this -> db -> get();
   if($query -> num_rows() > 0)
   {
     echo "<script>alert('pictutes found!!');</script>";
     return $query->result();
   }
   else
   {
     echo "<script>alert('No pictures found');</script>";
     return false;
   }
}
public function getlocationsfromdatabase(){
  $query = $this -> db -> query('SELECT DISTINCT location 
                                  FROM cake');
  if($query -> num_rows() > 0) 
      return $query->result();
   else{
     echo "<script>alert('No shops found');</script>";
     return false;
   }
 }
 public function getgiftsfromdatabase($category)
 {
    $this -> db -> select('*');
   $this -> db -> from('image');
   $this -> db -> where('category', $category);
   $query = $this -> db -> get();

   if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function getgiftdetails($image_id)
 {
    $this -> db -> select('*');
   $this -> db -> from('image');
   $this -> db -> where('image_id', $image_id);
   $query = $this -> db -> get();

   if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
public function getuserid($username){
   $query=$this->db->query('SELECT distinct id FROM users
                            WHERE username = '.$username);
  if($query -> num_rows() >0)
   {
     return $query->result();
   }
 }
 public function getwalletbalance($id){
  $query=$this->db->query('SELECT balance 
                            FROM wallet 
                            WHERE user_id='.$id);
   if($query -> num_rows() > 0)
     return $query->result();
   else
     return false;
 }
 public function getcost($id){
   $query=$this->db->query('SELECT cost 
                            FROM image
                            WHERE image_id='.$id);
   if($query -> num_rows() > 0)
     return $query->result();
   else
     return false;
 }
 public function deduct($cost,$id){
  $query = $this->db->query('UPDATE wallet
                              SET balance = balance -'.$cost.'
                              WHERE user_id = '.$_SESSION['id']);
  $this->user->removeFromCart($id);
 }
 public function removeFromCart($id){
  $query = $this->db->query('DELETE FROM cart WHERE cart_image='.$id);
  $this->load->model('user','',TRUE);
  $session_data = $this->session->userdata('logged_in');
  $user_name = $session_data['username'];
  $data = array(
      'cart_active'=>'true',
        'details' => $this->user->getgiftdetails($id),
        'bal' => $this->user->getwalletbalance($id),
        'ncart' => $this->user->cartlogo('username')
      );
     $this->load->view('header');
     $this->load-> view('cart_logo',$data);
     $this->load->view('sidenav',$data);
     $this->load->view('cart_view',$data);
     $this->load->view('footer');
}
public function getmessage($id){
  $query= $this->db->query('SELECT * FROM message WHERE rec_id='.$id);
  if($query -> num_rows() > 0)
     return $query->result();
   else{
    echo "<script>alert('No messages found');</script>";
    redirect('home','refresh');
     //return false;
   }
}
public function send($id,$message){
  $data = array(
        'sender_name' => $_SESSION['username'],
        'rec_id'      => $id,
        'message'     => $message
         );
  $this->db->insert('message',$data);
}
}
?>
