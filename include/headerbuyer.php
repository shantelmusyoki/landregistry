<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
<link rel="stylesheet" type="text/css" href="css/style.css">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"><i class="fas fa-phone-alt text-primary mr-1"></i>(+254) 757 689 061</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-primary mr-1"></i>Instaland@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-primary mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Login</a>&nbsp;&nbsp;
								<?php } ?>
								</li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                                    
            <div class="main-nav secondary-nav hover-primary-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0 "> 
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">About</a></li>
										<li class="nav-item"> <a class="nav-link" href="property.php"> Available Lands</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="contactus.php">Contact our experts</a></li>
										
										
										
                                    </ul>
                                    <a class="btn btn-primary d-none d-xl-block" href="shop/shop.php" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
					
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> 
        </header>
        

