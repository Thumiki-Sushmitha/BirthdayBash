<style type="text/css">
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<div>
<h1 style="color: blue;background-color: #EEE;padding-left: 5%;" class="col-sm-offset-2 col-sm-4 col-sm-4">
  <b>Shop Here</b>
</h1><br>
<div class="col-sm-8">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid" style="font-size: 2em;">
    <ul class="nav navbar-nav col-sm-12">
      <li class="dropdown col-sm-offset-1">
      <button class="dropbtn">Mens Shopping</button>
      <div class="dropdown-content" style="width: 600%;margin-left: -50%;">
        <a href="<?php echo base_url(); ?>home/getgifts/boyshoe">Mens Shoes</a>
        <a href="<?php echo base_url(); ?>home/getgifts/mensuit">Men Suits</a>
      </div>
  </li>
  <li class="dropdown col-sm-offset-1">
      <button class="dropbtn">Womens Shopping</button>
      <div class="dropdown-content " style="width: 500%;margin-left: -150%;">
        <a href="<?php echo base_url(); ?>home/getgifts/girltops">Tops for Girls</a>
        <a href="<?php echo base_url(); ?>home/getgifts/ladytops">Ladies Tops</a>
        <a href="<?php echo base_url(); ?>home/getgifts/womendress">Womens Dresses</a>
      </div>
  </li>
  <li class="dropdown col-sm-offset-1">
      <button class="dropbtn">Kids Shopping</button>
      <div class="dropdown-content" style="width: 600%; margin-left:-350%;">
        <a href="<?php echo base_url(); ?>home/getgifts/clothing">Kids Clothing</a>
        <a href="<?php echo base_url(); ?>home/getgifts/kidjeans">Kids Jeans</a>
        <a href="<?php echo base_url(); ?>home/getgifts/kidshirt">Kids Shirts</a>
      </div>
  </li>
  <li class="dropdown col-sm-offset-1">
      <button class="dropbtn">Others</button>
      <div class="dropdown-content" style="width: 1000%;margin-left: -850%;">
        <a href="<?php echo base_url(); ?>home/getgifts/chappals">Chappals</a>
        <a href="<?php echo base_url(); ?>home/getgifts/watches">Watches</a>
      </div>
  </li>
    </ul>
  </div>
</nav>
</div>
</div>

<div class="container col-sm-10 ">
<br><br>
  <?php foreach($gifts as $m): ?>
    <a href="<?php echo base_url(); ?>home/giftdetails/<?php echo $m->image_id; ?>">
  <div class="col-sm-3" style="border: 3px solid blue;background-color: #3978ff;margin-bottom: 50px;">
    <img src="<?php echo base_url(); echo "assets/images/"; echo $m->image_add; echo ".jpg";?>" align="no image" width="90%" />
    <div class="col-sm-2" style="color:white;font-size: 1.5em;">
      <br><b>
      Brand:&nbsp;<?php echo $m->brand; ?>
      <br>
      Cost:&nbsp;Rs.<?php echo $m->cost; ?>
    </b>
    </div>
  </div></a>
  <div class="col-sm-1"></div>
  <?php endforeach ?>
</div>