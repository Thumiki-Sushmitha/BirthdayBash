<h1>This is photos view</h1><table>
<?php foreach ($photo as $p): ?>
	<tr><img src="<?php echo base_url();?>assets/images/<?php echo $p->image_add;?>.jpg" alt="no image" style="max-width: 300px;max-height: 200px;"/></tr>
	 </table>
<?php endforeach ?>