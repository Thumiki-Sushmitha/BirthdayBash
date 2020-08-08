<br>
<button  type="submit"  id="cart" onclick="cartfun()" name= "cart" class="btn btn-primary btn-lg" style="background-color: navy;">cart(<?php echo $_SESSION['cart'];?>)</button>
<button  type="submit"  id="wallet" onclick="walfun()" name= "cart" class="btn btn-primary btn-lg" style="background-color: navy;">Wallet(<?php echo $_SESSION['balance'];?>)</button>
<button  type="submit"  id="cart" onclick="messagefun()" name= "cart" class="btn btn-primary btn-lg" style="background-color: navy;">Messages</button>
<div id = "userdetails" style="
 			margin-right: 0;
 			font-weight: bold;
 			direction: rtl;
 			" >
	Hello, <a href=""><?php echo $_SESSION['username'];?></a>
</div>
<script type="text/javascript">
	function cartfun(){
		 location.href = "<?php echo base_url();?>home/cart";
			}
	function walfun(){
		 location.href = "<?php echo base_url();?>home/wallet";
			}
	function messagefun(){
		 location.href = "<?php echo base_url();?>home/messages";
			}		
</script>
