<!DOCTYPE html>
    <html lang="en">
    {{-----this is my header --}}
    @include('layouts.includes.partial.header')



    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">

                           @include('layouts.includes.partial.profile')


                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            {{--this my side bar--}}

                            @include('layouts.includes.partial.sidebar')

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
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    {{--this is my navigation bar--}}

                    @include('layouts.includes.partial.navigation')
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                    {{--@include('layouts.includes.partial.content')--}}

                    @yield('content')

                </div>


                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{url('js/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{url('js/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{url('js/vendors/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{url('js/vendors/nprogress/nprogress.js')}}"></script>
        <!-- Chart.js -->
        <script src="{{url('js/vendors/Chart.js/dist/Chart.min.js')}}"></script>
        <!-- gauge.js -->
        <script src="{{url('js/vendors/gauge.js/dist/gauge.min.js')}}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{url('js/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <!-- iCheck -->
        <script src="{{url('js/vendors/iCheck/icheck.min.js')}}"></script>
        <!-- Skycons -->
        <script src="{{url('js/vendors/skycons/skycons.js')}}"></script>
        <!-- Flot -->
        <script src="{{url('js/vendors/Flot/jquery.flot.js')}}"></script>
        <script src="{{url('js/vendors/Flot/jquery.flot.pie.js')}}"></script>
        <script src="{{url('js/vendors/Flot/jquery.flot.time.js')}}"></script>
        <script src="{{url('js/vendors/Flot/jquery.flot.stack.js')}}"></script>
        <script src="{{url('js/vendors/Flot/jquery.flot.resize.js')}}"></script>
        <!-- Flot plugins -->
        <script src="{{url('js/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
        <script src="{{url('js/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
        <script src="{{url('js//vendors/flot.curvedlines/curvedLines.js')}}"></script>
        <!-- DateJS -->
        <script src="{{url('js/vendors/DateJS/build/date.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{url('js/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
        <script src="{{url('js/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{url('js/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{url('js/vendors/moment/min/moment.min.js')}}"></script>
        <script src="{{url('js/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{url('bower-components/bootstrap-sweetalert/dist/sweetalert.js')}}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{url('js/build/js/custom.min.js')}}"></script>

        @yield('after-script-end')

    </body>
</html>
