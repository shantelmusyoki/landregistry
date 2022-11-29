
<div id="footer"><!-- footer Starts -->
<div class="container"><!-- container Starts -->

<div class="row" ><!-- row Starts -->

<div class="col-md-3 col-sm-6" ><!-- col-md-3 col-sm-6 Starts -->

<h4>Pages</h4>

<ul><!-- ul Starts -->

<li><a href="cart.php">Shopping Cart</a></li>

<li><a href="contact.php">Contact Us</a></li>

<li><a href="shop.php">Shop</a></li>

<li>

<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >My Account</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>

</li>


</ul><!-- ul Ends -->

<hr>

<h4>User Section</h4>

<ul><!-- ul Starts -->

<li>

<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >Login</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>

</li>

<li><a href="customer_register.php">Register</a></li>

</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg hidden-sm" >

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4> Top Products Categories </h4>

<ul><!-- ul Starts -->

<?php

$get_p_cats = "select * from product_categories";

$run_p_cats = mysqli_query($con,$get_p_cats);

while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

echo "<li> <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a> </li>";

}

?>

</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->


<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4>Engage with us</h4>

<p><!-- p Starts -->
<strong>The Kings Pyramid</strong>
<br>Nairobi,
<br>Kenya
<br>
<strong>Proudly Kenyan</strong>

</p><!-- p Ends -->

<a href="contact.php">Contact us</a>

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->





<hr>

<h4> Stay in touch </h4>

<p class="social"><!-- social Starts --->

<a href="https://www.facebook.com/The-Kings-Pyramid-102538105156710/"><i class="fa fa-facebook"></i></a>
<a href="https://www.facebook.com/The-Kings-Pyramid-102538105156710/"><i class="fa fa-twitter"></i></a>
<a href="https://instagram.com/thekingspyramid?igshid=1q9ib25gxkd39"><i class="fa fa-instagram"></i></a>
<a href="https://www.youtube.com/channel/UCH5rLFG6gH5Mr7EigbwzUsA"><i class="fa fa-youtube"></i></a>

</p><!-- social Ends --->

</div><!-- col-md-3 col-sm-6 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->
</div><!-- footer Ends -->

<div id="copyright"><!-- copyright Starts -->

<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!-- col-md-6 Starts -->

  <p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> The Kings Pyramid. The Kings Pyramid Logo, the game names, and related marks are trademarks of The Kings Pyramid. All rights reserved!</p>
</div><!-- col-md-6 Ends -->




</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- copyright Ends -->







