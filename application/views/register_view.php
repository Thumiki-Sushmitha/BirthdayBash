<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>User Register</title>
</head>
<body>
<div class="jumbotron">
    <h1 align="center">New User Registration</h1>
    <p align="center">Enter Your Details:</p>
  </div>
<div class="container-fluid">
<div class="col-sm-4"></div>
                <div class="jumbotron col-sm-6">
                    <h3>Register</h3>
                    <form action="<?php echo base_url();?>home/verifyregister" method="post">
          
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" data-validation="required" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="emailid" data-validation="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" data-validation="required">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="conpassword" class="form-control" placeholder="confrm password" data-validation="confirmation">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
             <div class="row">
              <div class="col-xs-12">
                <button type="submit" name="register" class="btn btn-primary btn-block btn-flat btn-color">Register</button>
              </div>
            </div>
        </form>
                </div>

</div>
</body>