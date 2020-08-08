<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="col-sm-10">
<h1 style="color: blue;background-color: #EEE;padding: 2%; text-align: center;" class="col-sm-offset-2 col-sm-6">
	<b>Hello, <?php echo $username?>!</b>
</h1>
</div>
<div class="container col-sm-4  width = 100%" >
<br><br>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url()?>assets/images/myntrashop.jpg" width="80%" />
      </div>

      <div class="item">
      	<img src="<?php echo base_url()?>assets/images/online-shopping.gif" width="60%" />
      </div>
    
      <div class="item">
        <img src="<?php echo base_url()?>assets/images/spoilt-for-choice.jpg" width="60%" />
      </div>

      <div class="item">
         <img src="<?php echo base_url()?>assets/images/img1.jpg" width="60%" />
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>