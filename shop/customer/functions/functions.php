<?php

$con = mysqli_connect("localhost","root","","shop");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////

// items function Starts ///

function items(){

global $con;

$ip_add = getRealUserIp();

$get_items = "select * from cart where ip_add='$ip_add'";

$run_items = mysqli_query($con,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}


// items function Ends ///

// total_price function Starts //

function total_price(){

global $con;

$ip_add = getRealUserIp();

$total = 0;

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($record=mysqli_fetch_array($run_cart)){

$pid = $record['pid'];
$get_price = "select * from property where pid='$pid'";

$run_price = mysqli_query($con,$get_price);

while($row_price=mysqli_fetch_array($run_price)){


$sub_total = $row_price['price']*1;

$total += $sub_total;



}





}

echo "BDT" . $total;


}



// total_price function Ends //


function getPro(){

global $con;

$get_products = "select * from property order by 1 DESC LIMIT 0,8";

$run_products = mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pid = $row_property['pid'];

$title = $row_property['title'];

$price = $row_property['price'];

$pimage1 = $row_property['pimage1'];

echo "

<div class='col-md-4 col-sm-6 single' >

<div class='product' >

<a href='details.php?pid=$pid' >

<img src='admin_area/product_images/$pimage1' class='img-responsive' >

</a>

<div class='text' >

<h3><a href='details.php?pid=$pid' >$title</a></h3>

<p class='price' >BDT $price</p>

<p class='buttons' >

<a href='details.php?pid=$pid' class='btn btn-default' >View details</a>

<a href='details.php?pid=$pid' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>


</div>

</div>

";




}


}


?>