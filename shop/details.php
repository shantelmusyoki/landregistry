<?php

session_start();

include("includes/db.php");                       

include("functions/functions.php");                

?>

<?php

if(isset($_GET['pid'])){


    

$pid = $_GET['pid'];

$get_property = "SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ";

$run_property = mysqli_query($con,$get_property);

$row_property = mysqli_fetch_array($run_property);

$p_cat_id = $row_property['p_cat_id'];

$title = $row_property['title'];

$price = $row_property['price'];

$pcontent = $row_property['pcontent'];

$pimage1 = $row_property['pimage1'];

$pimage2 = $row_property['pimage2'];

$pimage3 = $row_property['pimage3'];

$pimage4 = $row_property['pimage4'];

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

}


?>

<!DOCTYPE html>
<html>

<head>
<title>The instaland - Property </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="../index.php" ><!--- navbar navbar-brand home Starts -->

<img class="nav-logo" src="admin_area/admin_images/ilogo2.png" height=50 alt=""></a>


</a><!--- navbar navbar-brand home Ends -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

<span class="sr-only" >Toggle Navigation </span>

<i class="fa fa-align-justify"></i>

</button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

<span class="sr-only" >Toggle Search</span>

<i class="fa fa-search" ></i>

</button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

<li>
<a href="../index.php"> Home </a>
</li>

<li class="active" >
<a href="shop.php"> Shop </a>
</li>


<li>
<a href="cart.php"> Shopping Cart </a>
</li>

<li>
<a href="contact.php"> Contact Us </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

<i class="fa fa-shopping-cart"></i>

<span> <?php items(); ?> items in cart </span>

</a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

<div class="input-group"><!-- input-group Starts -->

<input class="form-control" type="text" placeholder="Search" name="user_query" required>

<span class="input-group-btn"><!-- input-group-btn Starts -->

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li>
<a href="../index.php">Home</a>
</li>

<li><a href="shop.php">Shop</a></li>

<li>

<a href="shop.php?p_cat=<?php  echo @$p_cat_id; ?>"> <?php echo $p_cat_title; ?> </a>

</li>

<li> <?php echo $title; ?> </li>

</ul><!-- breadcrumb Ends -->


</div><!--- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->


<div class="col-md-9"><!-- col-md-9 Starts -->

<div class="row" id="productMain"><!-- row Starts -->

<div class="col-sm-6"><!-- col-sm-6 Starts -->

<div id="mainImage"><!-- mainImage Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<div class="item active">
<center>

<img src="admin_area/admin_images/property/<?php echo $pimage1; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/admin_images/property/<?php echo $pimage2; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/admin_images/property/<?php echo $pimage3; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/admin_images/property/<?php echo $pimage3; ?>" class="img-responsive">
</center>
</div>

</div><!-- carousel-inner Ends -->

<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div>

</div><!-- mainImage Ends -->

</div><!-- col-sm-6 Ends -->


<div class="col-sm-6" ><!-- col-sm-6 Starts -->

<div class="box" ><!-- box Starts -->

<h1 class="text-center" > <?php echo @$title; ?> </h1>

<?php add_cart(); ?>

<form action="details.php?add_cart=<?php echo $pid; ?>" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-5 control-label" >Property Quantity </label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="qty" class="form-control" >

<option disabled>Select quantity</option>
<option>1</option>
</select>

</div><!-- col-md-7 Ends -->

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-5 control-label" >Property Size</label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="size" class="form-control" >

<option disabled>Select a Size</option>
<option>N/A</option>
<option>N/A</option>
<option>N/A</option>


</select>

</div><!-- col-md-7 Ends -->


</div><!-- form-group Ends -->

<p class="price"> KES <?php echo $price; ?> M </p>

<p class="text-center buttons" ><!-- text-center buttons Starts -->

<button class="btn btn-primary" type="submit" >

<i class="fa fa-shopping-cart" ></i> Add to Cart

</button>

</p><!-- text-center buttons Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- box Ends -->

</div><!-- col-sm-6 Ends -->


</div><!-- row Ends -->

<div class="box" id="details"><!-- box Starts -->

<p><!-- p Starts -->

<h4>property details</h4>

<p>
<?php echo $pcontent; ?>
</p>

<h4> Type </h4>

<ul>

<li>Agricultural</li>
<li>Residential</li>
<li>Recreational</li>
<li>Commercial</li>
<li>institutional</li>
<li>industrial</li>


</ul>

</p><!-- p Ends -->

<hr>

</div><!-- box Ends -->

<div id="row same-height-row"><!-- row same-height-row Starts -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<div class="box same-height headline"><!-- box same-height headline Starts -->

<h3 class="text-center"> You also like these Products </h3>

</div><!-- box same-height headline Ends -->

</div><!-- col-md-3 col-sm-6 Ends -->

<?php

$get_property = "select * from property order by rand() LIMIT 0,3";

$run_property = mysqli_query($con,$get_property); 

while($row_property = mysqli_fetch_array($run_property)) {

$pid = $row_property['pid'];

$title = $row_property['title'];

$price = $row_property['price'];

$pimage1 = $row_property['pimage1'];

echo "

<div class='center-responsive col-md-3 col-sm-6' >

<div class='product same-height' >

<a href='details.php?pid=$pid' >

<img src='admin_area/admin_images/property/$pimage1' class='img-responsive' >  

</a>

<div class='text' >

<h3> <a href='details.php?pid=$pid' >$title</a> </h3>

<p class='price' >KES $price M</p>


</div>


</div>

</div>


";


}


?>


</div><!-- row same-height-row Ends -->

</div><!-- col-md-9 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>