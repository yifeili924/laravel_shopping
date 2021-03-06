<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
            ===
            This comment should NOT be removed.
    
            Charisma v2.0.0
    
            Copyright 2012-2014 Muhammad Usman
            Licensed under the Apache License v2.0
            http://www.apache.org/licenses/LICENSE-2.0
    
            http://usman.it
            http://twitter.com/halalit_usman
            ===
        -->
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <link href="{{URL::asset('adminassets/css/bootstrap-cerulean.min.css') }}" rel="stylesheet">

        <link href="{{URL:: asset('adminassets/css/charisma-app.css') }}" rel="stylesheet">
        <link href='{{URL:: asset('adminassets/bower_components/fullcalendar/dist/fullcalendar.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/bower_components/fullcalendar/dist/fullcalendar.print.css') }}' rel='stylesheet' media='print'>
        <link href='{{URL:: asset('adminassets/bower_components/chosen/chosen.min.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/bower_components/colorbox/example3/colorbox.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/bower_components/responsive-tables/responsive-tables.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/jquery.noty.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/noty_theme_default.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/elfinder.min.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/elfinder.theme.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/jquery.iphone.toggle.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/uploadify.css') }}' rel='stylesheet'>
        <link href='{{URL:: asset('adminassets/css/animate.min.css') }}' rel='stylesheet'>
        <!-- jQuery -->
        <script src="{{URL:: asset('adminassets/bower_components/jquery/jquery.min.js') }}"></script>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="{{URL:: asset('adminassets/img/favicon.ico') }}">

    </head>

    <body>
        <!-- topbar starts -->
        <div class="navbar navbar-default" role="navigation">

            <div class="navbar-inner">
                <button type="button" class="navbar-toggle pull-left animated flip">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::route('admin-index') }}"><img src="{{URL:: asset('images/logo.png')}}" alt="Our Logo...">
                    <span>Our site</span></a>

                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::route('sign-out') }}">Sing out</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->

                <!-- theme selector starts -->
                <div class="btn-group pull-right theme-container animated tada">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-tint"></i><span
                            class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" id="themes">
                        <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                        <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                        <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                        <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                        <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                        <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                        <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                        <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                        <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                    </ul>
                </div>
                <!-- theme selector ends -->

            </div>
        </div>
        <!-- topbar ends -->

        <div class="ch-container">
            <div class="row">

                <!-- left menu starts -->
                <div class="col-sm-2 col-lg-2">
                    <div class="sidebar-nav">
                        <div class="nav-canvas">
                            <div class="nav-sm nav nav-stacked">

                            </div>
                            <ul class="nav nav-pills nav-stacked main-menu">
                                <li class="nav-header">Main</li>
                                <li><a class="ajax-link" href="{{ URL::route('admin-index') }}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="ajax-link" href="{{ URL::route('admin-userlist') }}">
                                        <i class=" glyphicon glyphicon-user"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-picture"></i><span> Product</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="{{ URL::route('admin-products') }}">Products</a></li>
                                        <li><a href="{{ URL::route('admin-add-products') }}">Add product</a></li>
                                    </ul>
                                </li>
                                
                                <li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                                </li>
                                <li><a class="ajax-link" href="form.html"><i
                                            class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                                <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                                </li>
                                <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                                </li>
                                <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                                </li>
                                <li class="nav-header hidden-md">Sample Section</li>

                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Child Menu 1</a></li>
                                        <li><a href="#">Child Menu 2</a></li>
                                    </ul>
                                </li>
                                <li><a class="ajax-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                                </li>
                                <li><a class="ajax-link" href="grid.html"><i
                                            class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                                <li><a href="tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                                <li><a class="ajax-link" href="icon.html"><i
                                            class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                                <li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                                </li>
                                <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                                </li>
                            </ul>
                            <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                        </div>
                    </div>
                </div>
                <!--/span-->
                <!-- left menu ends -->

                <noscript>
                <div class="alert alert-block col-md-12">
                    <h4 class="alert-heading">Warning!</h4>

                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
                </noscript>

                @yield('content')

            </div><!--/fluid-row-->

            <!-- Ad, you can remove it -->
            <div class="row">
                <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 2 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:728px;height:90px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="3193373905"></ins>
                    <script>
(adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

            </div>
            <!-- Ad ends -->

            <hr>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h3>Settings</h3>
                        </div>
                        <div class="modal-body">
                            <p>Here settings can be configured...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                            <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="row">
                <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank"></a> 2017</p>

                <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by:Our Team</p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- external javascript -->

        <script src="{{URL:: asset('adminassets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- library for cookie management -->
        <script src="{{URL:: asset('adminassets/js/jquery.cookie.js') }}"></script>
        <!-- calender plugin -->
        <script src='{{URL:: asset('adminassets/bower_components/moment/min/moment.min.js') }}'></script>
        <script src='{{URL:: asset('adminassets/bower_components/fullcalendar/dist/fullcalendar.min.js') }}'></script>
        <!-- data table plugin -->
        <script src='{{URL:: asset('adminassets/js/jquery.dataTables.min.js') }}'></script>

        <!-- select or dropdown enhancer -->
        <script src="{{URL:: asset('adminassets/bower_components/chosen/chosen.jquery.min.js') }}"></script>
        <!-- plugin for gallery image view -->
        <script src="{{URL:: asset('adminassets/bower_components/colorbox/jquery.colorbox-min.js') }}"></script>
        <!-- notification plugin -->
        <script src="{{URL:: asset('adminassets/js/jquery.noty.js') }}"></script>
        <!-- library for making tables responsive -->
        <script src="{{URL:: asset('adminassets/bower_components/responsive-tables/responsive-tables.js') }}"></script>
        <!-- tour plugin -->
        <script src="{{URL:: asset('adminassets/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
        <!-- star rating plugin -->
        <script src="{{URL:: asset('adminassets/js/jquery.raty.min.js') }}"></script>
        <!-- for iOS style toggle switch -->
        <script src="{{URL:: asset('adminassets/js/jquery.iphone.toggle.js') }}"></script>
        <!-- autogrowing textarea plugin -->
        <script src="{{URL:: asset('adminassets/js/jquery.autogrow-textarea.js') }}"></script>
        <!-- multiple file upload plugin -->
        <script src="{{URL:: asset('adminassets/js/jquery.uploadify-3.1.min.js') }}"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="{{URL:: asset('adminassets/js/jquery.history.js') }}"></script>
        <!-- application script for Charisma demo -->
        <script src="{{URL:: asset('adminassets/js/charisma.js') }}"></script>


    </body>
</html>
