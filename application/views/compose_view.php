<div class="container col-sm-8  width = 100%" >
<h1>Compose view</h1>
<form class="form-horizontal" 
	  action= "<?php echo base_url();?>home/sendmessage"  
	  method="post">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-5">
			<input type="text" required class="form-control" id="name" name="name" placeholder="username" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-5">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-5">
			<textarea class="form-control" rows="4" name="message"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-5 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-5 col-sm-offset-2">
			<! Will be used to display an alert to the user>
		</div>
	</div>
</form>
</div>