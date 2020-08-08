<br>
<div class="col-sm-4 col-md-2 hidden-print sidebar" role="navigation"><b>
    <ul class="list-group">
      <li class="list-group-item <?php if (isset($home_active)) echo ' active '; ?>"  >
        <a style="color:black;" href="<?php echo base_url(); ?>home">
        Home</a>
      </li>
      <li class="list-group-item <?php if (isset($cakes_active)) echo ' active '; ?>">
        <a style="color:black;" href="<?php echo base_url(); ?>home/cakes">Cakes</a>
      </li>
      <li class="list-group-item <?php if (isset($gifts_active)) echo ' active '; ?>">
        <a style="color:black;" href="<?php echo base_url(); ?>home/gifts">Gifts</a>
      </li>
      <li class="list-group-item <?php if (isset($suggestions_active)) echo ' active '; ?>">
        <a style="color:black;" href="<?php echo base_url(); ?>home/suggestions">Suggestions</a>
      </li>
      <li class="list-group-item <?php if (isset($about_active)) echo ' active '; ?>">
        <a style="color:black;" href="<?php echo base_url(); ?>home/about">About Us</a>
        </li>
      <li class="list-group-item <?php if (isset($wallet_active)) echo ' active '; ?>">
        <a style="color:black;" href="<?php echo base_url(); ?>home/wallet">Wallet</a>
      </li>
      </li>
      <li class="list-group-item <?php if (isset($cart_active)) echo ' active '; ?>">
        <a style="color:black;" href="<?php echo base_url(); ?>home/cart">Cart</a>
      </li>
      <li class="list-group-item">
        <a style="color:black;" href="<?php echo base_url(); ?>home/logout">Log Out</a>
      </li>
</ul></b>
</div>