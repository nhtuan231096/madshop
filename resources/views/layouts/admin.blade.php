<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Madshop Admin</title>
    <link href="{{asset('/public/admin')}}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('/public/admin')}}/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('/public/admin')}}/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <link href="{{asset('/public/admin')}}/css/basic.css" rel="stylesheet" />
    <link href="{{asset('/public/admin')}}/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet"> -->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{asset('admin')}}">MAD SHOP</a>
            </div>

            <div class="header-right">

                <a href="/madshop" class="btn btn-info" title="Return Homepage" target="blank"><i class="fa fa-home fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="{{asset('/public/admin')}}/img/user.png" class="img-thumbnail" />
                            <div class="inner-text">
                                  Howdy: {{Auth::user()->name}}
                            <br />
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="active-menu" href="{{route('admin')}}"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('category')}}"><i class="fa fa-list-alt  "></i>Category</a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('category')}}">List category</a></li>
                            {{-- <li><a href="{{route('add_category')}}">Add category</a></li> --}}
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li><a href="{{route('list_product')}}">List product</a></li>
                            <li><a href="{{route('add_product')}}">Add product</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('banner')}}"><i class="fa fa-flash "></i>Banner</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            @yield('main')
        </div>
    </div>
    <div id="footer-sec">
        &copy; 2018 Madshop | Design By : <a href="#" target="_blank">Madshop</a>
    </div>
    <script src="{{asset('/public/admin')}}/js/jquery-1.10.2.js"></script>
    <script src="{{asset('/public/admin')}}/js/bootstrap.js"></script>
    <script src="{{asset('/public/admin')}}/js/jquery.metisMenu.js"></script>
    <script src="{{asset('/public/admin')}}/js/bootstrap-fileupload.js"></script>
    <script src="{{asset('/public/admin')}}/js/custom.js"></script>
    
<!--     <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script> -->
</body>
</html>
