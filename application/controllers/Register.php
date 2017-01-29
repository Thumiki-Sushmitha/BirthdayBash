
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('register_view');
 }

 function verifyregister()
 {
  $this->load->model('user','',TRUE);
  $this->load->library('form_validation');
  $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('emailid', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('conpassword', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == TRUE)
  {
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $emailid=$this->input->post('emailid');
   $this->user->add_user($username,$password,$emailid);
   redirect('login', 'refresh');
  }
  else
  {
   redirect('register', 'refresh');
  }
 }
 
}
 
?>