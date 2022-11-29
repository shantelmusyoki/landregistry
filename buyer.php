<?php
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['login']))
{
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];
    

    if(!empty($email) && !empty($pass) )
    {
        $sql = "SELECT * FROM user where uemail='$email' AND utype= 'Buyers' ";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        if($row)
        {
            $_SESSION['uid']=$row['uid'];
            $_SESSION['uemail']=$email;
            header("location:buyerabout.php");
        }
        else
        {
            $error = "<p class='alert alert-warning'>Login Not Successful</p> ";
        }
    }
    else{
        $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
<!--meta tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/favicon.ico">
 <!-- Fonts --->
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

       <!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<!--title-->
<title>Instaland - Land system</title>
</head>
<body>
    <div id="page-wrapper">
        <div class="row">
            
<!-- Banner-->
<div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Login</b></h2>
</div>
<div class="col-md-6">
    <nav aria-label="breadcrumb" class="float-left float-md-right">
        <ol class="breadcrumb bg-transparent m-0 p-0">
            <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
      </nav>
    </div>
   </div>
 </div>
</div>
<!-- Banner-->

<div class="page-wrappers login-body full-row bg-gray">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle"> Access to our dashboard</p>
                        <?php echo $error; ?><?php echo $msg; ?>
<!--form-->
<form method="post">
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Your email">
</div>
<div class="form-group">
    <input type="password" name="pass" class="form-control" placeholder="Your password">
</div>
<button class="btn btn-primary" name="login" value="Login" type="submit">Login</button>
</form>
<div class="login-or">
    <span class="or-line"></span>
    <span class="span-or">or</span>
</div>
<!--Social Login -->
<div class="social-login">
    <span>Login with</span>
    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
    <a href="#" class="google"><i class="fab fa-google"></i></a>
    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
    <a href="#" class="google"><i class="fab fa-instagram"></i></a>
</div>
<!--/social Login -->
<div class="text-center dont-have"> Don't have an account? <a href="registerbuyer.php">Register</a></div>
      </div>
    </div>
   </div>
 </div>
 </div>
</div>
<!--  login  -->

<!--Footer start -->
<?php include("include/footer.php");?>
<!--footer stop-->

<!--scroll to top-->
<a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll">
    <i class="fas fa-angle-up"></i></a>
    <!--End scroll to top -->
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>