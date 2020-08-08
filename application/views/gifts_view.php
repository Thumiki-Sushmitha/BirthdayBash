<style type="text/css">
	.dropbtn {
    background-color: navy;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: 2px white;
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
    color: blue;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    background-color: blue;
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





<div class="col-sm-8"><br><br><br>
	<table class="table">
	<tr>
		<td>
			<button  class="btn btn-success" id="clothing" background-color : navy>Clothing</button>
<script type="text/javascript">
    document.getElementById("clothing").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/clothing";
    };
</script>
		</td>
		<td>
			<button  class="btn btn-success" id="chappals">Chappals</button>
<script type="text/javascript">
    document.getElementById("chappals").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/chappals";
    };
</script>
		</td>
		<td>
			<button  class="btn btn-success" id="boyshoe">Boy Shoes</button>
<script type="text/javascript">
    document.getElementById("boyshoe").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/boyshoe";
    };
</script>
		</td>
	</tr>
	<tr>
		<td>
			<button  class="btn btn-success" id="kidjeans">Kid Jeans</button>
<script type="text/javascript">
    document.getElementById("kidjeans").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/kidjeans";
    };
</script>
		</td>
		<td>
			<button  class="btn btn-success" id="kidshirt">Kid Shirts</button>
<script type="text/javascript">
    document.getElementById("kidshirt").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/kidshirt";
    };
</script>
		</td>
		<td>
			<button  class="btn btn-success" id="girltpos">Girls' Tops</button>
<script type="text/javascript">
    document.getElementById("girltpos").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/girltpos";
    };
</script>
		</td>
	</tr>
	<tr>
		<td>
		<button  class="btn btn-success" id="ladytops">Ladies' Tops</button>
		<script type="text/javascript">
    	document.getElementById("ladytops").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/ladytops";
    };
</script>
		</td>	
		<td>
		<button  class="btn btn-success" id="womendress">Womens' Dresses</button>
		<script type="text/javascript">
    	document.getElementById("womendres").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/womendress";
    };
</script>
		</td>	
		<td>
		<button  class="btn btn-success" id="mensuit">Mens' Suits</button>
		<script type="text/javascript">
    	document.getElementById("mensuit").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/mensuit";
    };
</script>
		</td>			
	</tr>
	<tr>
		<td>
		<button  class="btn btn-success" id="watches">Watches</button>
		<script type="text/javascript">
    	document.getElementById("watches").onclick = function () {
        location.href = "<?php echo base_url(); ?>home/getgifts/watches";
    };
</script>
		</td>	
	</tr>
</table>
</div>


