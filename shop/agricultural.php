<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
<title>instaland - Shop </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="./assets/img/instaland2.png">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("../include/headerseller.php");?>
        <!--	Header end  -->
        
    

        <div class="full-row">
            <div class="container">
<div class="row" ><!-- row Starts -->
<div class="col-lg-8">
<div class="row">


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

$get_products = "select * from property WHERE type='agricultural'";

$run_products = mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pid = $row_products['pid'];

$title = $row_products['title'];

$price = $row_products['price'];

$pimage1 = $row_products['pimage1'];

echo "

<div class='col-md-4 col-sm-6 center-responsive' >

<div class='property' >

<a href='details.php?pid=$pid' >

<img src='admin_area/admin_images/property/$pimage1' class='img-responsive' >

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
