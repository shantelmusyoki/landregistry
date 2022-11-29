<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
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
								| </li>
								<li><i class="fas fa-user text-primary mr-1"></i><a href="register.php"> Register</li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="main-nav secondary-nav hover-primary-nav py-2">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> 
                                <a class="navbar-brand position-relative" href="#">
                                <img class="nav-logo" src="admin/assets/img/ilogo2.png" height=50 alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span> 
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                       
                                        <li class="nav-item"> <a class="nav-link" href="index.php"><h6 class="fa fa-igloo text-primary mr-1"> Home</h6></a></li>
                                
										<li class="nav-item"> <a class="nav-link" href="about.php"><h6 class="fa fa-users text-primary mr-1"> About</h6></a> </li>
                                
										<li class="nav-item"> <a class="nav-link" href="buyer.php"><h6 class="fas fa-user text-primary mr-1"> Buyer</h6></a></li>

										<li class="nav-item"> <a class="nav-link" href="seller.php"><h6 class="fas fa-user text-primary mr-1"> Seller</h6></a> </li>
                                       
                                
										<li class="nav-item"> <a class="nav-link" href="property.php"><h6 class="fa fa-landmark text-primary mr-1"> Available Lands</h6></a> </li>
                                
                                        <li class="nav-item"> <a class="nav-link" href="contact.php"><h6 class="fas fa-phone-alt text-primary mr-1"> Contact</h6></a> </li>
                               
                                </ul>
                                </div>
                                </nav>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
        </header>

        