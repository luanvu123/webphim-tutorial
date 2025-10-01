<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>
        Trang Admin
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

                      function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- font-awesome icons CSS -->
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet" />
    <!--  <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/> -->
    <!-- //font-awesome icons CSS-->
    <!-- side nav css file -->
    <link href="{{ asset('backend/css/SidebarNav.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <!-- //side nav css file -->
    <!-- js-->
    <script src="{{ asset('backend/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/modernizr.custom.js') }}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet" />
    <!--//webfonts-->
    <!-- chart -->
    <script src="{{ asset('backend/js/Chart.js') }}"></script>
    <!-- //chart -->
    <!-- Metis Menu -->
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet" />

    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <script src="{{ asset('backend/js/pie-chart.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element)
                        .find('.pie-value')
                        .text(Math.round(percent) + '%');
                },
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element)
                        .find('.pie-value')
                        .text(Math.round(percent) + '%');
                },
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element)
                        .find('.pie-value')
                        .text(Math.round(percent) + '%');
                },
            });
        });
    </script>
    <!-- //pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <!-- requried-jsfiles-for owl -->
    <link href="{{ asset('backend/css/owl.carousel.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#owl-demo').owlCarousel({
                items: 3,
                lazyLoad: true,
                autoPlay: true,
                pagination: true,
                nav: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>

<body class="cbp-spmenu-push">
    @if (Auth::check())
        <div class="main-content">
            <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <!--left-fixed -navigation-->
                <aside class="sidebar-left">
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1>
                                <a class="navbar-brand" href="{{ url('/') }}"><span
                                        class="fa fa-area-chart"></span> HOME<span class="dashboard_text">Movie
                                        Admin</span></a>
                            </h1>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="sidebar-menu">
                                <li class="header">MAIN MOVIE</li>
                                <li class="treeview">
                                    <a href="{{ url('/home') }}">
                                        <lord-icon src="https://cdn.lordicon.com/ridbdkcb.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="{{ route('info.create') }}">
                                        <lord-icon src="https://cdn.lordicon.com/lxotnbfa.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon> <span>Thông tin website</span>
                                    </a>
                                </li>
                                @php
                                    $segment = Request::segment(1);
                                @endphp
                                <li class="treeview {{ $segment == 'category' ? 'active' : '' }}">
                                    <a href="#">
                                        <lord-icon src="https://cdn.lordicon.com/hiqmdfkt.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon>
                                        <span>Danh mục</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="{{ route('category.create') }}">
                                                <lord-icon src="https://cdn.lordicon.com/zgogqkqu.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Thêm &xem danh mục
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview {{ $segment == 'genre' ? 'active' : '' }}">
                                    <a href="#">
                                        <lord-icon src="https://cdn.lordicon.com/edxgdhxu.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon>
                                        <span>Thể loại </span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="{{ route('genre.create') }}">
                                                <lord-icon src="https://cdn.lordicon.com/zgogqkqu.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon> Thêm & xem thể loại
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview {{ $segment == 'country' ? 'active' : '' }}">
                                    <a href="#">
                                        <lord-icon src="https://cdn.lordicon.com/dfxesbyu.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon>
                                        <span>Quốc gia</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="{{ route('country.create') }}">
                                                <lord-icon src="https://cdn.lordicon.com/zgogqkqu.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Thêm quốc gia
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview {{ $segment == 'movie' ? 'active' : '' }}">
                                    <a href="#">
                                        <lord-icon src="https://cdn.lordicon.com/ehexapks.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon>
                                        <span>Phim </span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="{{ route('movie.create') }}">
                                                <lord-icon src="https://cdn.lordicon.com/zgogqkqu.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon> Thêm Phim
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('movie.index') }}">
                                                <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Liệt kê phim
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview {{ $segment == 'episode' ? 'active' : '' }}">
                                    <a href="#">
                                        <lord-icon src="https://cdn.lordicon.com/ydqfeguo.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon>
                                        <span>Tập Phim </span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="{{ route('episode.create') }}">
                                                <lord-icon src="https://cdn.lordicon.com/zgogqkqu.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Thêm tập phim
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('episode.index') }}">
                                                <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Liệt kê tập phim
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview {{ $segment == 'linkmovie' ? 'active' : '' }}">
                                    <a href="#">
                                        <lord-icon src="https://cdn.lordicon.com/ydqfeguo.json" trigger="loop"
                                            delay="2000" style="width:20px;height:20px">
                                        </lord-icon>
                                        <span>Link Phim </span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="{{ route('linkmovie.create') }}">
                                                <lord-icon src="https://cdn.lordicon.com/zgogqkqu.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Thêm phim
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('linkmovie.index') }}">
                                                <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="loop"
                                                    delay="2000" style="width:20px;height:20px">
                                                </lord-icon>Liệt kê link phim
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </aside>
            </div>
            <!--left-fixed -navigation-->
            <!-- header-starts -->
            <div class="sticky-header header-section">

                <div class="header-right">
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </li>
    </ul>
    </li>
    </ul>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="col_3">
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="{{ route('category.create') }}">
                            <i class="pull-left fa fa-file icon-rounded"></i>

                            <div class="stats">
                                <h5><strong>{{ $category_total }}</strong></h5>
                                <span>Danh mục</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="{{ route('genre.create') }}">
                            <i class="pull-left fa fa-child user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>{{ $genre_total }}</strong></h5>
                                <span>Thể loại</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="{{ route('country.create') }}">
                            <i class="pull-left fa fa-globe user2 icon-rounded"></i>

                            <div class="stats">
                                <h5><strong>{{ $country_total }}</strong></h5>
                                <span>Quốc gia</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="{{ route('movie.create') }}">
                            <i class="pull-left fa fa-film user3 icon-rounded"></i>

                            <div class="stats">
                                <h5><strong>{{ $movie_total }}</strong></h5>
                                <span>Phim</span>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="clearfix"></div>
            </div>
            <br>

            <!-- for amcharts js -->

            <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('backend/js/amcharts.js') }}"></script>
            <script src="{{ asset('backend/js/serial.js') }}"></script>
            <script src="{{ asset('backend/js/export.min.js') }}"></script>
            <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
            <script src="{{ asset('backend/js/light.js') }}"></script>
            <!-- for amcharts js -->
            <script src="{{ asset('backend/js/index1.js') }}"></script>
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--footer-->
    <div class="footer">
        <p>
            &copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by
            <a href="#" target="_blank">w3layouts</a>
        </p>
    </div>
    <!--//footer-->
    </div>
@else
    @yield('content_login')
    @endif
    <!-- new added graphs chart js-->
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
    <script>
        var MONTHS = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
            ],
            datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: color(window.chartColors.red)
                        .alpha(0.5)
                        .rgbString(),
                    borderColor: window.chartColors.red,
                    borderWidth: 1,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                },
                {
                    label: 'Dataset 2',
                    backgroundColor: color(window.chartColors.blue)
                        .alpha(0.5)
                        .rgbString(),
                    borderColor: window.chartColors.blue,
                    borderWidth: 1,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                },
            ],
        };

        window.onload = function() {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart',
                    },
                },
            });
        };

        document
            .getElementById('randomizeData')
            .addEventListener('click', function() {
                var zero = Math.random() < 0.2 ? true : false;
                barChartData.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return zero ? 0.0 : randomScalingFactor();
                    });
                });
                window.myBar.update();
            });

        var colorNames = Object.keys(window.chartColors);
        document
            .getElementById('addDataset')
            .addEventListener('click', function() {
                var colorName =
                    colorNames[barChartData.datasets.length % colorNames.length];
                var dsColor = window.chartColors[colorName];
                var newDataset = {
                    label: 'Dataset ' + barChartData.datasets.length,
                    backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                    borderColor: dsColor,
                    borderWidth: 1,
                    data: [],
                };

                for (var index = 0; index < barChartData.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());
                }

                barChartData.datasets.push(newDataset);
                window.myBar.update();
            });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document
            .getElementById('removeDataset')
            .addEventListener('click', function() {
                barChartData.datasets.splice(0, 1);
                window.myBar.update();
            });

        document
            .getElementById('removeData')
            .addEventListener('click', function() {
                barChartData.labels.splice(-1, 1); // remove the label first

                barChartData.datasets.forEach(function(dataset, datasetIndex) {
                    dataset.data.pop();
                });

                window.myBar.update();
            });
    </script>
    <!-- new added graphs chart js-->
    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->
    <!--scrolling js-->
    <!-- <script>
        $(document).ready(function() {
            $('#tablephim').DataTable();
        });
    </script> -->
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <!--//scrolling js-->
    <!-- side nav js -->
    <script src="{{ asset('backend/js/SidebarNav.min.js') }}" type="text/javascript"></script>
    <script>
        $('.sidebar-menu').SidebarNav();
    </script>
    <!-- //side nav js -->
    <!-- for index page weekly sales java script -->
    <!--  -->
    <!-- //for index page weekly sales java script -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <!-- //Bootstrap Core JavaScript -->

    <script type="text/javascript">
        $(document).on('change', '.file_image', function() {

            var movie_id = $(this).data('movie_id');
            var files = $("#file-" + movie_id)[0].files;

            //console.log(files);
            var image = document.getElementById("file-" + movie_id).files[0];


            var form_data = new FormData();

            form_data.append("file", document.getElementById("file-" + movie_id).files[0]);
            form_data.append("movie_id", movie_id);



            $.ajax({
                url: "{{ route('update-image-movie-ajax') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: form_data,

                contentType: false,
                cache: false,
                processData: false,

                success: function() {
                    location.reload();
                    $('#success_image').html(
                        '<span class="text-success">Cập nhật hình ảnh thành công</span>');
                }
            });



        });
    </script>


    <script type="text/javascript">
        $('.category_choose').change(function() {

            var category_id = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('category-choose') }}",
                method: "GET",
                data: {
                    category_id: category_id,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi thành công!');
                }
            });
        })

        $('.country_choose').change(function() {

            var country_id = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('country-choose') }}",
                method: "GET",
                data: {
                    country_id: country_id,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi quốc gia thành công!');
                }
            });
        })

        $('.phimhot_choose').change(function() {

            var phimhot_val = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('phimhot-choose') }}",
                method: "GET",
                data: {
                    phimhot_val: phimhot_val,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi phim nổi bật thành công!');
                }
            });
        })
        $('.phude_choose').change(function() {

            var phude_val = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('phude-choose') }}",
                method: "GET",
                data: {
                    phude_val: phude_val,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi thành công!');
                }
            });
        })

        $('.trangthai_choose').change(function() {

            var trangthai_val = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('trangthai-choose') }}",
                method: "GET",
                data: {
                    trangthai_val: trangthai_val,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi hiển thị thành công!');
                }
            });
        })

        $('.thuocphim_choose').change(function() {

            var thuocphim_val = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('thuocphim-choose') }}",
                method: "GET",
                data: {
                    thuocphim_val: thuocphim_val,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi thành công!');
                }
            });
        })
        $('.resolution_choose').change(function() {

            var resolution_val = $(this).val();
            var movie_id = $(this).attr('id');
            // alert(movie_id)
            // alert(category_id)
            $.ajax({
                url: "{{ route('resolution-choose') }}",
                method: "GET",
                data: {
                    resolution_val: resolution_val,
                    movie_id: movie_id
                },
                success: function(data) {
                    alert('Thay đổi độ phân giải thành công!');
                }
            });
        })
    </script>
    <script type="text/javascript">
        $('.select-movie').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "{{ route('select-movie') }}",
                method: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#show_movie').html(data);
                }
            });
        })
    </script>
    <script type="text/javascript">
        $('.select-year').change(function() {
            var year = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            // alert(year);
            // alert(id_phim);
            $.ajax({
                url: "{{ url('/update-year-phim') }}",
                method: "GET",
                data: {
                    year: year,
                    id_phim: id_phim
                },
                success: function() {
                    alert('Thay đổi năm phim theo năm ' + year + ' thành công');
                }
            });
        })
    </script>

    <script type="text/javascript">
        $('.select-season').change(function() {
            var season = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            // alert(year);
            // alert(id_phim);
            $.ajax({
                url: "{{ url('/update-season-phim') }}",
                method: "GET",
                data: {
                    season: season,
                    id_phim: id_phim
                },
                success: function() {
                    alert('Thay đổi năm phim season ' + season + ' thành công');
                }
            });
        })
    </script>
    <script type="text/javascript">
        $('.select-topview').change(function() {
            var topview = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            // alert(year);
            // alert(id_phim);
            if (topview == 0) {
                var text = 'Ngày';
            } else if (topview == 1) {
                var text = 'Tuần';
            } else {
                var text = 'Tháng';
            }
            $.ajax({
                url: "{{ url('/update-topview-phim') }}",
                method: "GET",
                data: {
                    topview: topview,
                    id_phim: id_phim
                },
                success: function() {
                    alert('Thay đổi phim theo topview ' + text + ' thành công');
                }
            });
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablephim').DataTable();
        });

        function ChangeToSlug() {

            var slug;

            //Lấy text từ thẻ input title
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '-');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
    </script>
    <script type="text/javascript">
        $('.order_position').sortable({
            placeholder: 'ui-state-highlight',
            update: function(event, ui) {
                var array_id = [];
                $('.order_position tr').each(function() {
                    array_id.push($(this).attr('id'));
                })
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('resorting') }}",
                    method: "POST",
                    data: {
                        array_id: array_id
                    },
                    success: function(data) {
                        alert('sắp xếp thứ tự thành công');
                    }
                })
            }
        })
    </script>
</body>

</html>
