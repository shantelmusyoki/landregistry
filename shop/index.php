<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
<title>Instaland Store </title>

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
<!--- navbar navbar-brand home Ends -->

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

<li class="active">
<a href="../buyerindex.php"> Home </a>
</li>

<li>
<a href="shop.php"> Shop </a>
</li>

<li>


<li>
<a href="cart.php"> Shopping Cart </a>
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


<div id="advantages"><!-- advantages Starts -->
<div class="container"><!-- container Starts -->

<div class="same-height-row"><!-- same-height-row Starts -->

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height"><!-- box same-height Starts -->

<div class="icon">

<i class="fa fa-heart" ></i>

</div>

<h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>

<p>
We are known to provide best possible service ever
</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height" ><!-- box same-height Starts -->

<div class="icon" >

<i class="fa fa-tags" ></i>

</div>

<h3><a href="#" > BEST PRICES </a></h3>

<p>

You can check on all others sites about the prices and than compare with us.


</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height" ><!-- box same-height Starts -->

<div class="icon" >

<i class="fa fa-thumbs-up" ></i>

</div>

<h3><a href="#" > 100% SATISFACTION GUARANTEED </a></h3>

<p>

Free returns on everything for 3 months.



</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->


</div><!-- same-height-row Ends -->

</div><!-- container Ends -->
</div><!-- advantages Ends -->

<div id="hot"><!-- hot Starts -->

<div class="box"><!-- box Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<h2>Latest this week</h2>

<div class="col-md-9" ><!-- col-md-9 Starts --->

<div class="row" ><!-- row Starts -->

<?php

if(!isset($_GET['p_cat'])) {

if(!isset($_GET['cat'])){


$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}

$start_from = ($page-1) * $per_page ;

$get_products = "select * from property order by 2 DESC LIMIT $start_from,$per_page";

$run_products = mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pid = $row_products['pid'];

$title = $row_products['title'];

$price = $row_products['price'];

$pimage = $row_products['pimage'];

echo "

<div class='col-md-4 col-sm-6 center-responsive' >

<div class='property' >

<a href='details.php?pid=$pid' >

<img src='../admin/property/$pimage' class='img-responsive' >

</a>

<div class='text' >

<h3><a href='details.php?pid=$pid' >$title</a></h3>

<p class='price' >KES $price Million</p>

<p class='buttons' >

<a href='details.php?pid=$pid' class='btn btn-default' >View details</a>

<a href='details.php?pid=$pid' class='btn btn-primary'>

<i class='fa fa-shopping-cart' ></i> Add To Cart

</a>



</p>


</div>

</div>

</div>

";

}

?>

</div><!-- row Ends -->

<center><!-- center Starts -->

<ul class="pagination" ><!-- pagination Starts -->


<?php

$query = "select * from property";

$result = mysqli_query($con,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "
<li><a href='shop.php?page=1' >".'First Page'."</a></li>

";

for ($i=1; $i<=$total_pages; $i++){

echo "

<li><a href='shop.php?page=".$i."' >".$i."</a></li>

";


};

echo "

<li><a href='shop.php?page=$total_pages' >".'Last Page'."</a></li>

";




}
}

?>



</ul><!-- pagination Ends -->

</center><!-- center Ends -->

<?php

getpcatpro();

getcatpro();

?>

</div><!-- col-md-9 Ends --->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

</div><!-- box Ends -->

</div><!-- hot Ends -->


