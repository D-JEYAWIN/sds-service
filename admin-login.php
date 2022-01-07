<!DOCTYPE html>
<html lang="zxx">
<head>
        <meta charset="UTF-8" />
        <title>Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css" />
        <!--[if lt IE 10]>
        <link rel="stylesheet"  href="assets/css/ie-fix.css" />
        <![endif]-->
        <!-- Start BOOTSTRAP -->
        <link rel="stylesheet" href="assets/libraries/tether/dist/css/tether.min.css" />
        <link rel="stylesheet" href="assets/libraries/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" />
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <link rel="stylesheet" href="assets/css/world-dealer.css" />
        <link rel="stylesheet" href="assets/css/world-dealer-media.css" />
        <!-- End  Template files -->
        <!-- Start blueimp  -->
        <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css" />
        <!-- End blueimp  -->
        <!-- Start custom styles  -->
        <link rel="stylesheet" href="assets/css/custom.css" />
        <!-- End custom styles  -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- Start codemirror  -->
        <link rel="stylesheet" href="assets/libraries/codemirror/lib/codemirror.css" />
        <!-- End codemirror  -->
        <link rel="stylesheet" href="assets/libraries/nouislider/nouislider.css" />
        <link rel='stylesheet' href='assets/css/palette.css'>
    </head>
    <body>
        <header class="header container container-palette affix-menu">
            <div class="top-bar color-primary">
                <div class="<!--container-->">
                    <div class="top-bar-left">
                        <div class="top-bar-body">
                            <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" /></a>
                            <h1 class="website-title"><a href="index.php" data-hover="Best Service">Best Service</a></h1>
                        </div>
                        <div class="skew-block"></div>
                    </div>
                    <div class="top-bar-right search-form-middle-phone hidden">
                        <div class="skew-block"></div>
                        <div class="search-form-mini closed">
                          
                        </div>
                        <a href="#" class="search-btn search-form-mini-open">
                        </a>
                    </div>
                    <div class="sub-top-bar sub-top-bar-mobile visible-xs-block">
                        <div class="<!--container-->">
                            <div class="block block-black block-left-up">
                             
                            </div>
                        </div>
                    </div>
                    <div class="search-form-mini-phone hidden-sm">
                        <div>
                            <a href="#" class="search"><i class="fa fa-search"></i></a>
                            <input type="text" placeholder="Search" />
                            <a href="#" class="close"><i class="fa fa-remove"></i></a>
                        </div>
                    </div>
                    <div class="top-bar-center">
                        <nav class="navbar mainmenu">
                            <div class="container-fluid">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a class="dropdown-toggle" href="index.php"> Home </a>
                                    </li>
                                    <li class="active">
                                        <a class="dropdown-toggle" href="admin-login.php"> Admin Login </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="service-engineer-login.php"> Service Engineer Login  </a>
                                    </li>
                                </ul>
                            </div>
                        </nav><!-- /.main menu -->
                    </div>
                    
                    
                    <div class="action-down" id="scroll-down">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- /.top bar-->
            <div class="sub-top-bar overflow hidden-xs">
                <div class="<!--container-->">
                    <div class="block block-black block-left-up">
                        <a href="admin-login.php" class="btn-custom vert-line-l-r vert-line-orange link-effect-1 " data-hover="Admin Login">
                            Welcome to Best Service
                        </a> 
                    </div>
                </div>
            </div><!-- /. sub-top bar-->
        </header>
        <div class="widget-top-title-2 container container-palette">
            <div class="color-secondary">
                <div class="bg-mask">
                    <div class="container">
                        <h1>Admin Login</h1>
                    </div>
                </div>
            </div>
        </div><!-- /.widget geo map-->
        <main class="container container-overflow-low-xs">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget box box-fill widget-form form-main" id="form">
 
                        <form action="admin-action.php" method="post" class="widget-content form-additional"> 
                            <div class="control-group">
                                <label class="control-label" for="inputUsername2">Username</label>
                                <div class="controls">
                                    <input type="text" name="username" value="" class="form-control" placeholder="Username" required  autofocus />                      
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword1">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" value="" class="form-control" placeholder="Password" required />                      
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn btn-danger">Login</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.widget-form--> 
                </div> 
        </main>
        <footer class="footer container container-palette"> 
            <div class="footer-bottom" style="background-color:#CCC">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left">All Right reserved.</div>
                    </div>
                </div>
            </div>
        </footer>
        
        <a class="btn btn-scoll-up" id="btn-scroll-up"></a>
        <!-- Start Jquery -->
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
        <!-- End Jquery -->
        <!-- Start BOOTSTRAP -->
        <script src="assets/libraries/tether/dist/js/tether.min.js"></script>
        <script src="assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <script src="assets/js/world-dealer.js"></script>
        <!-- End  Template files -->
        <!-- Start blueimp  -->
        <script src="assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <script type="text/javascript" src="assets/js/map_infobox.js"></script>
        <script type="text/javascript" src="assets/js/markerclusterer.js"></script>
        <script src="assets/js/map.js" type="text/javascript"></script>
        <!-- End JS MAP  -->
        <!-- Start footable-jquery -->	
        <script src="assets/libraries/footable-jquery/js/footable.js"></script>
        <script src="assets/js/footable_custom.js"></script>
        <!-- End footable-jquery -->
        <!-- Start custom styles  -->
        <script src="assets/js/custom.js" type="text/javascript"></script>
        <!-- End custom styles  -->
        <script src="assets/js/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="assets/js/moment-timezone-with-data.js" type="text/javascript"></script>
        <!-- Start kevalbhatt-worldmapgenerator //kevalbhatt.github.io/WorldMapGenerator/ -->
        <script src="assets/js/worldmapgenerator_custom.js" type="text/javascript"></script>
        <!-- End kevalbhatt-worldmapgenerator  -->
        <script src="assets/libraries/nouislider/nouislider.min.js"></script>
        <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
        <script src="assets/js/facebook.js"></script>
        <script src='assets/js/palette.js'></script>
    </body>
</html>