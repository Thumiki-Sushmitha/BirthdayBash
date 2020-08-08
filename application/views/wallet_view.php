<div class="container col-sm-8  width = 100%">
<?php foreach ($bal as $b): ?>
<h1>Your Account Balance is Rs.<?php echo $b->balance;?>/-</h1>
 <?php endforeach?>
 <img src="<?php echo base_url()?>assets/images/wallet.jpg">
 </div>