<?php foreach ($details as $detail): ?>
	<h1>Brand : <?php echo $detail->brand ?></h1>
	<h1>Cost : <?php echo $detail->cost ?></h1>
	<h1>Category : <?php echo $detail->category ?></h1>
	<h1>Image :
	<img src="<?php echo base_url();?>assets/images/<?php echo $detail->image_add;?>.jpg" alt="no image" />
	
		<button  type="submit"  id="cart1" onclick = "fun()" name= "cart" class="btn btn-primary btn-lg">Add to Cart</button>
		<script>
    	function fun(){
    		document.write("Hello");
        window.alert("Successfully added to cart");
        location.href = "<?php echo base_url();?>home/add_cart/<?php echo $detail->image_id; ?>";
        
    }
</script>
<?php endforeach ?>
