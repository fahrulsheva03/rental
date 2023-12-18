<div class="header_style_wrapper">

<!-- Begin top bar -->
<!-- End top bar -->
<div class="top_bar hasbg">
    <div class="standard_wrapper">
        <!-- Begin logo -->
        <div id="logo_wrapper">

            <div id="logo_normal" class="logo_container">
                <div class="logo_align">
                    <a id="custom_logo" class="logo_wrapper hidden" href="index.html">
                        <img src="users/assets/images/logo@2x_white.png" alt="" width="175" height="24" />
                    </a>
                </div>
            </div>

            <div id="logo_transparent" class="logo_container">
                <div class="logo_align">
                    <a id="custom_logo_transparent" class="logo_wrapper default" href="index.html">
                        <img src="users/assets/images/logo@2x_white.png" alt="" width="175" height="24" />
                    </a>
                </div>
            </div>
            <!-- End logo -->

            <div id="menu_wrapper">
                <div id="nav_wrapper">
                    <div class="nav_wrapper_inner">
                        <div id="menu_border_wrapper">
                            <div class="menu-main-menu-container">
                                <ul id="main_menu" class="nav">
                                    <li class="menu-item current-menu-item "><a href="index.php">Home</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children "><a href="cars.php">Cars</a>
                                        
                                    </li>
                                    <li class="menu-item menu-item-has-children "><a href="about.php">About us</a>
                                      
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="contact.php">Contact</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="gallery.php">Gallery</a>
                                    </li>
                                    <?php  if(!isset($_SESSION['login'])){ ?>
                                    <li class="menu-item menu-item-has-children"><a href="login.php">Login</a>
                                    </li>
                                    <?php }else{ ?>
                                    <li class="menu-item menu-item-has-children"><a href="logout.php">Logout</a>
                                    </li>
                                    <?php  } ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Begin right corner buttons -->

                    <!-- End right corner buttons -->
                </div>
                <!-- End main nav -->
            </div>

        </div>
    </div>
</div>
</div>
