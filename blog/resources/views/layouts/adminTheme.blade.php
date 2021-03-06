<!DOCTYPE html>
<head>
<title>Student Activity Management System @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="admin/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="admin/css/font.css" type="text/css"/>
<link href="admin/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="admin/js/jquery2.0.3.min.js"></script>
<script src="admin/js/modernizr.js"></script>
<script src="admin/js/jquery.cookie.js"></script>
<script src="admin/js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }


            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            }); 
        });
        </script>
<!-- charts -->
<script src="admin/js/raphael-min.js"></script>
<script src="admin/js/morris.js"></script>
<link rel="stylesheet" href="admin/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="admin/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
    <script>
            var theme = $.cookie('protonTheme') || 'default';
            $('body').removeClass (function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ');
            });
            if (theme !== 'default') $('body').addClass(theme);
        </script>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="/dashboard">
                    <i class="fa fa-home nav_icon"></i>
                    <span class="nav-text">
                    Dashboard
                    </span>
                </a>
            </li>
             <li>
                <a href="/adnews">
                    <i class="fa fa-file-text-o nav_icon"></i>
                    <span class="nav-text">
                    News
                    </span>
                </a>
            </li>
             <li>
                <a href="/adevent">
                    <i class="fa fa-check-square-o nav_icon"></i>
                    <span class="nav-text">
                    Event
                    </span>
                </a>
            </li>
            <li>
                <a href="/adcalendar">
                    <i class="glyphicon glyphicon-calendar nav-icon"></i>
                    <span class="nav-text">
                    Calendar
                    </span>
                </a>
            </li>
            <li>
                <a href="/adgallery">
                    <i class="glyphicon glyphicon-picture nav-icon"></i>
                    <span class="nav-text">
                    Gallery
                    </span>
                </a>
            </li>
              <li>
                <a href="/addocument">
                    <i class="glyphicon glyphicon-folder-open nav-icon"></i>
                    <span class="nav-text">
                    Document
                    </span>
                </a>
            </li>
            <li>
                <a href="/adreport">
                    <i class="fa fa-bar-chart nav_icon"></i>
                    <span class="nav-text">
                    Report
                    </span>
                </a>
            </li>
             <li>
                <a href="/admessenger">
                    <i class="glyphicon glyphicon-comment nav-icon"></i>
                    <span class=" nav-text">
                    Messages
                    </span>
                </a>
            </li>
            <li>
                <a href="/admanageuser">
                    <i class="glyphicon glyphicon-user nav-icon"></i>
                    <span class=" nav-text">
                    User
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
            <a href="login.html">
            <i class="icon-off nav-icon"></i>
            <span class="nav-text">
            Logout
            </span>
            </a>
            </li>
        </ul>
    </nav>
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
            </a>
        </nav>
        <section class="title-bar">
            <div class="logo">
                <h1><img src="images/Logo PSUActBackend.png" href="/dashboard" width="240" height="50" alt="Logo" /></h1>
            </div>
            <div class="full-screen">
                <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>    
                </section>
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="header-right">
                <div class="profile_details_left">
                    <div class="header-right-left">
                        <!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                <ul class="dropdown-menu anti-dropdown-menu w3l-msg">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                       <div class="user_img"><img src="admin/images/1.png" alt=""></div>
                                       <div class="notification_desc">
                                        <p>Lorem ipsum dolor amet</p>
                                        <p><span>1 hour ago</span></p>
                                        </div>
                                       <div class="clearfix"></div> 
                                    </a></li>
                                    <li class="odd"><a href="#">
                                        <div class="user_img"><img src="admin/images/2.png" alt=""></div>
                                       <div class="notification_desc">
                                        <p>Lorem ipsum dolor amet </p>
                                        <p><span>1 hour ago</span></p>
                                        </div>
                                      <div class="clearfix"></div>  
                                    </a></li>
                                    <li><a href="#">
                                       <div class="user_img"><img src="admin/images/3.png" alt=""></div>
                                       <div class="notification_desc">
                                        <p>Lorem ipsum dolor amet </p>
                                        <p><span>1 hour ago</span></p>
                                        </div>
                                       <div class="clearfix"></div> 
                                    </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div> 
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class=""></i><span class=""></span></a>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>  
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">   
                                        <span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
                                        <div class="clearfix"></div>    
                                    </div>  
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                                    <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </section>

        <div class="main-grid">
            @section('sidebar')
            @show
            @yield('content')

        </div>

        <!-- footer -->
        <div class="footer">
            <p>© 2017 Student Activity Management by Student Union</p>
        </div>
        <!-- //footer -->
    </section>
    <script src="admin/js/bootstrap.js"></script>

</body>
</html>
