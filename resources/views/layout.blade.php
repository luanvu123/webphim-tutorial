<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="theme-color" content="#234556">
    <meta http-equiv="Content-Language" content="vi" />
    <meta content="VN" name="geo.region" />
    <meta name="DC.language" scheme="utf-8" content="vi" />
    <meta name="language" content="Việt Nam">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/imgs/icon.png" type="image/png">
    <meta name="revisit-after" content="1 days" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>{{ $meta_title }}</title>
    <meta name="description" content="{{ $meta_description }}" />
    <link rel="canonical" href="{{ Request::url() }}">
    <link rel="next" href="" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="{{ $meta_title }}" />
    <meta property="og:image" content="{{ $meta_image }}" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="55" />








    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>


    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('css/bootstrap.min.css') }}' media='all' />
    <link rel='stylesheet' id='style-css' href='{{ asset('css/style.css') }}' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('css/style.min.css') }}' media='all' />
    <script type='text/javascript' src='{{ asset('js/jquery.min.js?ver=5.7.2') }}' id='halim-jquery-js'></script>
    <style type="text/css" id="wp-custom-css">
        .textwidget p a img {
            width: 100%;
        }
    </style>


</head>

<body class="home blog halimthemes halimmovies" data-masonry="">
    <header id="header">
        <div class="container">
            <div class="row" id="headwrap">
                <div class="col-md-3 col-sm-6 slogan">
                    <!-- <a href="{{ route('homepage') }}" class="navbar-brand">
          <img src="/imgs/logo.png" alt="" title="phim hay ">
        </a> -->
                    <p class=""><a class="logo" href="{{ route('homepage') }}" title="phim hay ">
                            <img src="{{ asset('uploads/logo/' . $info->logo) }}"
                                style="margin-top: 15px;margin-bottom: -20px;height: 30px;">
                        </a></p>
                </div>
                <div class="col-md-5 col-sm-6 halim-search-form hidden-xs">
                    <div class="header-nav">
                        <div class="col-xs-12">
                            <style type="text/css">
                                ul#result {
                                    position: absolute;
                                    z-index: 9999;
                                    /* background:#1b2d3c;*/
                                    background: #12171b;
                                    color: #fff;
                                    width: 94%;
                                    padding: 10px;
                                    margin: 1px;
                                }
                            </style>

                            <div class="form-group form-timkiem">

                                <div class="input-group col-xs-12">

                                    <form class="example" action="{{ route('tim-kiem') }}" method="GET">
                                        <input type="text" name="search" id="timkiem"
                                            placeholder="Nhập tên phim.." autocomplete="off">
                                        <!--  <button type="submit"><i class="fa fa-search"></i></button> -->
                                        @include('pages.include.test')
                                    </form>
                                </div>
                            </div>

                            <ul class="list-group" id="result" style="display:none;">

                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 hidden-xs" >
                  <div id="get-bookmark" class="box-shadow"><i class="hl-bookmark"></i><span> Bookmarks</span><span class="count">0</span></div>
                  <div id="bookmark-list" class="hidden bookmark-list-on-pc">
                     <ul style="margin: 0;"></ul>
                  </div>
               </div> --}}
            </div>

        </div>

        <!--  Nút đăng nhập -->
        <a href="#" class="Dangnhap"><span>Đăng Nhập</span></a>


        <!-- end đăng nhập -->


    </header>
    <div class="navbar-container">
        <div class="container">
            <nav class="navbar halim-navbar main-navigation" role="navigation" data-dropdown-hover="1">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                        data-target="#halim" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button type="button" class="navbar-toggle collapsed pull-right expand-search-form"
                        data-toggle="collapse" data-target="#search-form" aria-expanded="false">
                        <span class="hl-search" aria-hidden="true"></span>
                    </button>
                    {{-- <button type="button" class="navbar-toggle collapsed pull-right get-bookmark-on-mobile">
                  Bookmarks<i class="hl-bookmark" aria-hidden="true"></i>
                  <span class="count">0</span>
                  </button>
                  <button type="button" class="navbar-toggle collapsed pull-right get-locphim-on-mobile">
                  <a href="javascript:;" id="expand-ajax-filter" style="color: #ffed4d;">Lọc <i class="fas fa-filter"></i></a>
                  </button> --}}
                </div>
                <div class="collapse navbar-collapse" id="halim">
                    <div class="menu-menu_1-container">
                        <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
                            <li class="current-menu-item active"><a title="Trang Chủ" style="color:yellow;"
                                    href="{{ route('homepage') }}">
                                    <ion-icon name="home-outline"></ion-icon>Trang Chủ
                                    <!--  <lord-icon
               src="https://cdn.lordicon.com/kxoxiwrf.json"
              trigger="hover"
           style="width:20px;height:25px">
              </lord-icon> -->

                                </a></li>
                            <li class="mega dropdown">
                                <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Thể Loại <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    @foreach ($genre_home as $key => $gen)
                                        <li><a title="{{ $gen->title }}"
                                                href="{{ route('genre', $gen->slug) }}">{{ $gen->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="mega dropdown">
                                <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Quốc Gia <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    @foreach ($country_home as $key => $count)
                                        <li><a title="{{ $count->title }}"
                                                href="{{ route('country', $count->slug) }}">{{ $count->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="mega dropdown">
                                <a title="Năm Phim" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Năm phim <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    @for ($year = 2000; $year <= 2022; $year++)
                                        <li><a title="{{ $year }}"
                                                href="{{ url('nam/' . $year) }}">{{ $year }}</a></li>
                                    @endfor
                                </ul>
                            </li>
                            @foreach ($category_home as $key => $cate)
                                <li class="mega"><a title="{{ $cate->title }}"
                                        href="{{ route('category', $cate->slug) }}">{{ $cate->title }}</a></li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </nav>
            <div class="collapse navbar-collapse" id="search-form">
                <div id="mobile-search-form" class="halim-search-form"></div>
            </div>
            <div class="collapse navbar-collapse" id="user-info">
                <div id="mobile-user-login"></div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row fullwith-slider"></div>
    </div>
    <div class="container">
        @yield('content')
        @include('pages.include.banner')
    </div>
    <div class="clearfix"></div>

    <footer id="footer" class="clearfix">
        <div class="container footer-columns">
            <div class="row container">
                <div class="widget about col-xs-12 col-sm-4 col-md-6" style="display:flex;">
                    <div class="footer-logo col-md-6">
                        <img src="{{ asset('uploads/logo/' . $info->logo) }}" alt="Phim hay 2021- Xem phim hay nhất" />
                    </div>
                    <div class="col-md-6">
                        <p>{{ $info->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style type="text/css">
        .copyright_footer {
            text-align: center;
            line-height: 32px;
            color: black;
        }
    </style>
    <div class="col-md-6">
        <p class="copyright_footer">{{ $info->copyright }}</p>
    </div>
    <div id='easy-top'></div>
    <script type='text/javascript' src='{{ asset('js/bootstrap.min.js?ver=5.7.2') }}' id='bootstrap-js'></script>
    <script type='text/javascript' src='{{ asset('js/owl.carousel.min.js?ver=5.7.2') }}' id='carousel-js'></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="YxFFFDvQ"></script>
    <script type='text/javascript' src='{{ asset('js/halimtheme-core.min.js?ver=1626273138') }}' id='halim-init-js'>
    </script>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#banner_quangcao').modal('show');
        });
    </script>

    <script type="text/javascript">
        function remove_background(movie_id) {
            for (var count = 1; count <= 5; count++) {
                $('#' + movie_id + '-' + count).css('color', '#ccc');
            }
        }

        //hover chuột đánh giá sao
        $(document).on('mouseenter', '.rating', function() {
            var index = $(this).data("index");
            var movie_id = $(this).data('movie_id');
            // alert(index);
            // alert(movie_id);
            remove_background(movie_id);
            for (var count = 1; count <= index; count++) {
                $('#' + movie_id + '-' + count).css('color', '#ffcc00');
            }
        });
        //nhả chuột ko đánh giá
        $(document).on('mouseleave', '.rating', function() {
            var index = $(this).data("index");
            var movie_id = $(this).data('movie_id');
            var rating = $(this).data("rating");
            remove_background(movie_id);
            //alert(rating);
            for (var count = 1; count <= rating; count++) {
                $('#' + movie_id + '-' + count).css('color', '#ffcc00');
            }
        });

        //click đánh giá sao
        $(document).on('click', '.rating', function() {

            var index = $(this).data("index");
            var movie_id = $(this).data('movie_id');

            $.ajax({
                url: "{{ route('add-rating') }}",
                method: "POST",
                data: {
                    index: index,
                    movie_id: movie_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data == 'done') {

                        alert("Bạn đã đánh giá " + index + " trên 5");
                        location.reload();

                    } else if (data == 'exist') {
                        alert("Bạn đã đánh giá phim này rồi,cảm ơn bạn nhé");
                    } else {
                        alert("Lỗi đánh giá");
                    }

                }
            });



        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#timkiem').keyup(function() {
                $('#result').html('');
                var search = $('#timkiem').val();
                if (search != '') {
                    var expression = new RegExp(search, "i");
                    $.getJSON('/json/movies.json', function(data) {
                        $.each(data, function(key, value) {
                            document.getElementById('result').style.overflow = 'scroll';
                            document.getElementById('result').style.height = '600px';
                            if (value.title.search(expression) != -1 || value.name_eng
                                .search(expression) != -1) {
                                $('#result').css('display', 'inherit');
                                $('#result').append(
                                    '<li style="cursor:pointer; display: flex; max-height: 200px;" class="list-group-item link-class"><img src="/uploads/movie/' +
                                    value.image +
                                    '" width="100" class="" /><div style="flex-direction: column; margin-left: 2px;"><h4 width="100%">' +
                                    value.title +
                                    '</h4><span style="display: -webkit-box; max-height: 8.2rem; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; white-space: normal; -webkit-line-clamp: 5; line-height: 1.6rem;" class="text-muted">| ' +
                                    value.description + '</span></div></li>');
                            }
                        });
                    })
                } else {
                    $('#result').css('display', 'none');
                }
            })
            $('#result').on('click', 'li', function() {
                var click_text = $(this).text().split('|');

                $('#timkiem').val($.trim(click_text[0]));
                $("#result").html('');
                $('#result').css('display', 'none');

            });
        })
    </script>


    <script type="text/javascript">
        $(".watch_trailer").click(function(e) {
            e.preventDefault();
            var aid = $(this).attr("href");
            $('html,body').animate({
                scrollTop: $(aid).offset().top
            }, 'slow');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            //lấy top view ngày
            $.ajax({
                url: "{{ url('/filter-topview-default') }}",
                method: "GET",

                success: function(data) {
                    $('#show_data_default').html(data);
                }
            });

            $('.filter-sidebar').click(function() {
                var href = $(this).attr('href');
                if (href == '#ngay') {
                    var value = 0;
                } else if (href == '#tuan') {
                    var value = 1;
                } else {
                    var value = 2;
                }
                $.ajax({
                    url: "{{ url('/filter-topview-phim') }}",
                    method: "POST",
                    data: {
                        value: value
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('#halim-ajax-popular-post-default').css("display", "none");
                        $('#show_data').html(data);
                    }
                });
            })
        })
    </script>

    <style>
        #overlay_mb {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 99999;
            cursor: pointer
        }

        #overlay_mb .overlay_mb_content {
            position: relative;
            height: 100%
        }

        .overlay_mb_block {
            display: inline-block;
            position: relative
        }

        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 600px;
            height: auto;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center
        }

        #overlay_mb .overlay_mb_content .cls_ov {
            color: #fff;
            text-align: center;
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 999999;
            font-size: 14px;
            padding: 4px 10px;
            border: 1px solid #aeaeae;
            background-color: rgba(0, 0, 0, 0.7)
        }

        #overlay_mb img {
            position: relative;
            z-index: 999
        }

        @media only screen and (max-width: 768px) {
            #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                width: 400px;
                top: 3%;
                transform: translate(-50%, 3%)
            }
        }

        @media only screen and (max-width: 400px) {
            #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                width: 310px;
                top: 3%;
                transform: translate(-50%, 3%)
            }
        }
    </style>

    <style>
        #overlay_pc {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 99999;
            cursor: pointer;
        }

        #overlay_pc .overlay_pc_content {
            position: relative;
            height: 100%;
        }

        .overlay_pc_block {
            display: inline-block;
            position: relative;
        }

        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 600px;
            height: auto;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #overlay_pc .overlay_pc_content .cls_ov {
            color: #fff;
            text-align: center;
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 999999;
            font-size: 14px;
            padding: 4px 10px;
            border: 1px solid #aeaeae;
            background-color: rgba(0, 0, 0, 0.7);
        }

        #overlay_pc img {
            position: relative;
            z-index: 999;
        }

        @media only screen and (max-width: 768px) {
            #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                width: 400px;
                top: 3%;
                transform: translate(-50%, 3%);
            }
        }

        @media only screen and (max-width: 400px) {
            #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                width: 310px;
                top: 3%;
                transform: translate(-50%, 3%);
            }
        }

        <style>body {
            font-family: Arial;
        }

        * {
            box-sizing: border-box;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #222D38;
            color: white;
            font-size: 17px;
            border: 1px solid black;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #222D38;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
    <style>
        footer {
            background: var(--rich-black-fogra-30);
            padding: 80px var(--px) 40px;
        }



        .footer-logo {
            width: 100px;
            margin-bottom: 30px;
        }

        .slogan {
            font-size: var(--fs-sm);
            line-height: 20px;
            margin-bottom: 20px;
        }

        .social-link a {
            display: inline-block;
        }

        .social-link ion-icon {
            font-size: 25px;
            margin-right: 20px;
        }



        .link-heading {
            margin-bottom: 20px;
        }

        .link-item {
            font-size: var(--fs-sm);
        }

        ul .link-item:not(:last-child) {
            margin-bottom: 10px;
        }

        .link-item:hover a {
            color: var(--light-azure);
        }
    </style>

    <style>
        .float-ck {
            position: fixed;
            bottom: 0px;
            z-index: 9
        }

        * html .float-ck

        /* IE6 position fixed Bottom */
            {
            position: absolute;
            bottom: auto;
            top: expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop, 10)||0)-(parseInt(this.currentStyle.marginBottom, 10)||0)));
        }

        #hide_float_left a {
            background: #0098D2;
            padding: 5px 15px 5px 15px;
            color: #FFF;
            font-weight: 700;
            float: left;
        }

        #hide_float_left_m a {
            background: #0098D2;
            padding: 5px 15px 5px 15px;
            color: #FFF;
            font-weight: 700;
        }

        span.bannermobi2 img {
            height: 70px;
            width: 300px;
        }

        #hide_float_right a {
            background: #01AEF0;
            padding: 5px 5px 1px 5px;
            color: #FFF;
            float: left;
        }
    </style>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel='dns-prefetch' href='//s.w.org' />
</body>

</html>
