<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mim App - @yield('title')</title>

    <!-- Bootstrap core CSS -->

    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/maps/jquery-jvectormap-2.0.1.css')}}" />
    <link href="{{URL::asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/nprogress.js')}}"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MIM Foudation</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{URL::asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ $name }}</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="/dashboard"><i class="fa fa-home"></i> Home</a>
                                   
                                </li>
                                <li><a><i class="fa fa-edit"></i> Pondok <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="/visi_misi">Visi Misi</a>
                                        </li>
                                        <li><a href="/struktur">Stuktur Organisasi</a>
                                        </li>
                                        <li><a href="/aturan">Aturan Podok</a>
                                        </li>
                                        <li><a href="#">Program</a>
                                        </li>
                                        <li><a href="#">Silabus</a>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-desktop"></i>Kelas </a>
                                    
                                </li>
                                <li><a href="#" ><i class="fa fa-table"></i> Event </a>
                                    
                                </li>
                                <li><a href="#" ><i class="fa fa-table"></i> Jadwal </a>
                                    
                                </li>
                                <li><a href="#" ><i class="fa fa-table"></i> My Activity </a>
                                    
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Penilaian Santri Baru <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="/seleksi">List Calon Santri</a></li>
                                        <li><a href="/soal_seleksi">List Soal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Rekap Data <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="e_commerce.html">E-commerce</a>
                                        </li>
                                        <li><a href="projects.html">Projects</a>
                                        </li>
                                        <li><a href="project_detail.html">Project Detail</a>
                                        </li>
                                        <li><a href="contacts.html">Contacts</a>
                                        </li>
                                        <li><a href="profile.html">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a><i class="fa fa-laptop"></i> Credit <span class="label label-success pull-right">Coming Soon</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{URL::asset('images/img.jpg')}}" alt="">{{ $name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="auth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="/images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="inbox.html">See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

        <div>
            @yield('content')
        </div>


        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <!-- bootstrap progress js -->
    <script src="{{URL::asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{URL::asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>
    <script src="{{URL::asset('js/chartjs/chart.min.js')}}"></script>
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.time.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/date.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.spline.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/curvedLines.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.resize.js')}}"></script>
    <!-- icheck -->
    <script src="{{URL::asset('js/icheck/icheck.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{URL::asset('js/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('js/datatables/tools/js/dataTables.tableTools.js')}}"></script>

</body>

</html>
