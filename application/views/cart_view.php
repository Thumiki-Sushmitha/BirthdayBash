
<?php foreach ($details as $detail): ?>
	<h1>Brand : <?php echo $detail->brand ?></h1>
	<h1>Cost : <?php echo $detail->cost ?></h1>
	<h1>Category : <?php echo $detail->category ?></h1>
	<h1>Image :
	<img src="<?php echo base_url();?>assets/images/<?php echo $detail->image_add;?>.jpg" alt="no image" />
	<button  type="submit"  id="cart1" onclick = "remove()" name= "cart" class="btn btn-primary btn-lg">Remove from Cart</button>
	<button  type="submit"  id="cart1" onclick = "proceed()" name= "cart" class="btn btn-primary btn-lg">Proceed to checkout</button>
	<script type="text/javascript">
		function remove(){
			window.alert("Successfully removed from cart");
			location.href= "<?php echo base_url();?>home/removeFromCart/<?php echo $detail->image_id; ?>";
	}
	function proceed(){
			location.href= "<?php echo base_url();?>home/ProceedCheckout/<?php echo $detail->image_id; ?>";
	}
	</script>
<?php endforeach ?>
