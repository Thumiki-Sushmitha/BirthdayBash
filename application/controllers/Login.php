
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('header');
   $this->load->view('login_view');
   $this->load->view('footer');
 }

 function verifylogin()
 {
 	$this->load->model('user','',TRUE);
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   if($this->form_validation->run() == TRUE)
   {
    echo "<script>alert('Login successful');</script>";
   	redirect('home', 'refresh');
     //Field validation failed.  User redirected to login page
     
   }
   else
   {
     echo "<script>alert('Invalid Username or password');</script>";
      //Go to private area
     redirect('login', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
 	$this->load->model('user','',TRUE);
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
 
?>