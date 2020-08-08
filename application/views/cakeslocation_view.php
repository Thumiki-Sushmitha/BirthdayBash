<div>
<h1 style="color: blue;background-color: #EEE;padding-left: 5%;" class="col-sm-offset-2 col-sm-4">
	<b>Available locations</b>
</h1>
</div>
<div class="container col-sm-8 ">
<br><br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Shop Name</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($loc as $m): ?>
      <tr>
        <td><?php echo $m->location; ?></td>
      <?php endforeach ?>
         </tbody>
  </table>
  </div>