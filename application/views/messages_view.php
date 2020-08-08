<?php foreach ($message as $mes):?> 
	<h1>Recieved Messages:</h1>
	<div>
	  <b>From : <?php echo $mes->sender_name; ?></b>
	  <div><?php echo $mes->message; ?></div><br>
	  <small><?php echo $mes->rec_time;?></small>
	</div>
	<button  type="submit"  id="cart" onclick="sendmessage()" name= "send" class="btn btn-primary btn-small" style="background-color: blue;">reply</button>
	<script type="text/javascript">
	function sendmessage(){
		 location.href = "<?php echo base_url();?>home/compose";
			}
	function reply(){
		 location.href = "<?php echo base_url();?>home/compose";
			}
    </script>
<?php endforeach ?>
<br>
<button  type="submit"  id="cart" onclick="sendmessage()" name= "send" class="btn btn-primary btn-lg" style="background-color: blue;">Compose</button>

