
<div>
<h1 style="color: blue;background-color: #EEE;padding-left: 5%;" class="col-sm-offset-2 col-sm-4">
	<b>About The Project</b>
</h1>
</div>
<div class="container col-sm-8 ">
<br><br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Shop Name</th>
        <th>Contact Number</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($shops as $m): ?>
      <tr>
        <td><?php echo $m->shopname; ?></td>
        <td><?php echo $m->contact_no; ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  </div>