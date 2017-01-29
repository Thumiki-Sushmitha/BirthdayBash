
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data = array(
                'username'  =>$session_data['username'],
                'home_active' => 'true'
               );
     $this->load->view('header', $data);
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
     $data = array(
      'cakes_active'=>'true'
      );
     $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('cakes_view',$data);
     $this->load->view('footer');
  }

  function gifts()
  {
     $data = array(
      'gifts_active'=>'true'
      );
     $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('gifts_view');
     $this->load->view('footer');
  }

  function photos()
  {
     $data = array(
      'photos_active'=>'true'
      );
     $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('photos_view');
     $this->load->view('footer');
  }

  function suggestions()
  {
     $data = array(
      'suggestions_active'=>'true'
      );
     $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('suggestions_view');
     $this->load->view('footer');
  }

  function about()
  {
     $data = array(
      'about_active'=>'true'
      );
     $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('about_view');
     $this->load->view('footer');
  }

  function getcakeshops()
  {
  $this->load->model('user','',TRUE);
   $this->load->library('form_validation');
   $this->form_validation->set_rules('location', 'location', 'trim|required|xss_clean');
   if($this->form_validation->run() == TRUE)
   {
      $location = $this->input->post('location');
      $shops = $this->user->getshops($location);
      if ($shops == TRUE) {
          $data = array(
      'cakes_active'=>'true',
      'shops'=>$shops
      );
      $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('cakesdisplay_view',$data);
     $this->load->view('footer');
      }
   }
   else
   {
     redirect('home/cakes', 'refresh');
   }
 
 } 

 function getgifts($category)
 {
      $this->load->model('user','',TRUE);
      $giftss = $this->user->getgiftsfromdatabase($category);
      if ($giftss == TRUE) {
          $data = array(
      'gifts_active'=>'true',
      'gifts'=>$giftss
      );
      $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('giftsdisplay_view',$data);
     $this->load->view('footer');          
      }
  }

  function giftdetails($image_id)
  {
    $this->load->model('user','',TRUE);
    $data = array(
      'gifts_active'=>'true',
        'details' => $this->user->getgiftdetails($image_id)
      );
    $this->load->view('header');
     $this->load->view('sidenav',$data);
     $this->load->view('giftdetails_view',$data);
     $this->load->view('footer');
  }

}