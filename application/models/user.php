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

public function add_user($username,$password,$emailid)
 {
  $data=array(
    'username'=>$username,
    'password'=>md5($password),
    'emailid'=>$emailid
  );
  $this->db->insert('users',$data);
 }

 public function getshops($location)
 {
    $this -> db -> select('shopname,contact_no');
   $this -> db -> from('cake');
   $this -> db -> where('location', $location);
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


 public function getgiftsfromdatabase($category)
 {
    $this -> db -> select('brand,cost,image_add,image_id');
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
    $this -> db -> select('brand,cost,category,image_add');
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

}
?>
