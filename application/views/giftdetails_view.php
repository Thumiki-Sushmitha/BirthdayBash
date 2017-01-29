<?php foreach ($details as $detail): ?>
	<h1>Brand is: <?php echo $detail->brand ?></h1>
	<h1>Cost is: <?php echo $detail->cost ?></h1>
	<h1>Category is: <?php echo $detail->category ?></h1>
	<h1>Image is:
	<img src="<?php echo base_url();?>assets/images/<?php echo $detail->image_add;?>.jpg" alt="no image" />
<?php endforeach ?>