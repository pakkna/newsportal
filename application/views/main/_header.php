<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo xss_clean($title); ?> - <?php echo xss_clean($this->settings->site_title); ?></title>
    <meta name="description" content="<?php echo addslashes(xss_clean($description)); ?>" />
    <meta name="keywords" content="<?php echo xss_clean($keywords); ?>" />
    <meta name="author" content="Codingest" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="<?php echo xss_clean($this->settings->application_name); ?>" />
    <?php if (isset($post_type)) : ?>
        <meta property="og:type" content="<?php echo $og_type; ?>" />
        <meta property="og:title" content="<?php echo $og_title; ?>" />
        <meta property="og:description" content="<?php echo addslashes(xss_clean($description)); ?>" />
        <meta property="og:url" content="<?php echo $og_url; ?>" />
        <meta property="og:image" content="<?php echo $og_image; ?>" />
        <meta property="og:image:width" content="<?php echo $og_width; ?>" />
        <meta property="og:image:height" content="<?php echo $og_height; ?>" />
        <meta property="article:author" content="<?php echo $og_author; ?>" />
        <meta property="fb:app_id" content="<?php echo $this->general_settings->facebook_app_id; ?>" />
        <?php foreach ($og_tags as $tag) : ?>
            <meta property="article:tag" content="<?php echo xss_clean($tag->tag); ?>" />
        <?php endforeach; ?>
        <meta property="article:published_time" content="<?php echo $og_published_time; ?>" />
        <meta property="article:modified_time" content="<?php echo $og_modified_time; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@<?php echo xss_clean($this->settings->application_name); ?>" />
        <meta name="twitter:creator" content="@<?php echo xss_clean($og_creator); ?>" />
        <meta name="twitter:title" content="<?php echo xss_clean($post->title); ?>" />
        <meta name="twitter:description" content="<?php echo addslashes(xss_clean($description)); ?>" />
        <meta name="twitter:image" content="<?php echo $og_image; ?>" />
    <?php else : ?>
        <meta property="og:image" content="<?php echo get_logo($this->general_settings); ?>" />
        <meta property="og:image:width" content="240" />
        <meta property="og:image:height" content="90" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($this->settings->site_title); ?>" />
        <meta property="og:description" content="<?php echo addslashes(xss_clean($description)); ?>" />
        <meta property="og:url" content="<?php echo base_url(); ?>" />
        <meta property="fb:app_id" content="<?php echo $this->general_settings->facebook_app_id; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@<?php echo xss_clean($this->settings->application_name); ?>" />
        <meta name="twitter:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($this->settings->site_title); ?>" />
        <meta name="twitter:description" content="<?php echo xss_clean($description); ?>" />
    <?php endif; ?>
    <link rel="canonical" href="<?php echo current_url(); ?>" />
    <?php if ($this->general_settings->multilingual_system == 1) :
        foreach ($this->languages as $language) :
            if ($language->id == $this->site_lang->id) : ?>
                <link rel="alternate" href="<?php echo base_url(); ?>" hreflang="<?php echo $language->language_code ?>" />
            <?php else : ?>
                <link rel="alternate" href="<?php echo base_url() . $language->short_form . "/"; ?>" hreflang="<?php echo $language->language_code ?>" />
    <?php endif;
        endforeach;
    endif; ?>

    <link href="/assets/inews/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/inews/css/animate.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/inews/bootsnav/css/bootsnav.css" rel="stylesheet" type="text/css" />

    <link href="/assets/inews/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/inews/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />

    <link href="/assets/inews/css/flaticon.css" rel="stylesheet" type="text/css" />

    <link href="/assets/inews/css/style.css" rel="stylesheet" type="text/css" />


    </script>
    <script src="/assets/inews/js/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/custom/css/dist/1589002489932.styles.css" />
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fa04bdb0c30ea00126bd3c1&product=sop' async='async'></script>
    <style>
        .lead-news .post-title {
            font-size: 22px;
            font-weight: 500;
            line-height: 30px;
        }

        h4.title {
            background: #01429c;
            padding: 9px;
            font-size: 20px;
            color: white;
        }

        time {
            font-family: 'solaiman';
        }

        .item {
            font-family: 'solaiman';

        }

        .cat-menu ul.nav.navbar-nav.navbar-left {
            background: #f0f0f0;
        }
    </style>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fa04bdb0c30ea00126bd3c1&product=sop' async='async'></script>
</head>

<body class="home-page">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=436552463847496&autoLogAppEvents=1" nonce="Kz1LRtoQ"></script>


    <section class="full-width top_event_banner">
        <div class="container" style="padding:0;">
            <div class="banner-holder" style="text-align:center; padding:5px 0;">


            </div>
        </div>
    </section>

    <?php
    $bn = new BanglaDate(time());
    $date = $bn->get_date();
    $bn_date = ' ' . $date["0"] . ' ' . $date["1"] . ' ' . $date["2"] . ' ' . 'বঙ্গাব্দ';
    ?>
    <!-- <div class="se-pre-con"></div> -->
    <div class="se-pre-con"></div>

    <header>

        <!-- <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="date hidden-xs" style="font-family: solaiman;font-size: 16px;"><?php echo mim_date(date("D, d M, Y")); ?>
                            | <?php echo $bn_date; ?></div>
                        <div class="header-social hidden-md hidden-lg hidden-sm">
                            <ul>
                                <li><a href="<?php echo html_escape($this->settings->facebook_url); ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="<?php echo html_escape($this->settings->twitter_url); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo html_escape($this->settings->instagram_url); ?>"><i class="fa fa-instagram"></i></a></li>
                                <li class="hidden-xs"><a href="<?php echo html_escape($this->settings->linkedin_url); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="<?php echo html_escape($this->settings->youtube_url); ?>"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="hidden-xs"><a href="feed"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>



                        <div class="top-left-menu">
                            <ul>

                            </ul>
                        </div>

                    </div>

                    <div class="col-sm-8 col-xs-6 pull-right">
                        <div class="header-right-menu">
                            <div class="header-social hidden-xs">
                                <ul>
                                    <li><a href="<?php echo html_escape($this->settings->facebook_url); ?>"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="<?php echo html_escape($this->settings->twitter_url); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo html_escape($this->settings->instagram_url); ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li class="hidden-xs"><a href="<?php echo html_escape($this->settings->linkedin_url); ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="hidden-xs"><a href="<?php echo html_escape($this->settings->youtube_url); ?>"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="hidden-xs"><a href="feed"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                            <ul>
                                <li class="bg-black"><a style="color: white !important; font-size: 15px" href="https://en.prokousholnews.com/">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="header-mid hidden-xs">
            <div class="container">
                <div class="row" style="display:flex; justify-content: center">
                    <div class="top-add">
                        <section class="full-width top_event_banner">
                            <div class="container" style="padding:0;">
                                <div class="banner-holder" style="text-align:center; padding:5px 0;">
                                    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "header"]); ?>
                                </div>
                            </div>
                        </section>
                        <p class="p-t-5">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">

                        <div class="header-social">
                            <ul>
                                <li><a href="<?php echo html_escape($this->settings->facebook_url); ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="<?php echo html_escape($this->settings->twitter_url); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo html_escape($this->settings->instagram_url); ?>"><i class="fa fa-instagram"></i></a></li>
                                <li class="hidden-xs"><a href="<?php echo html_escape($this->settings->linkedin_url); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="<?php echo html_escape($this->settings->youtube_url); ?>"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="hidden-xs"><a href="/feed"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#!"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>


                        <div class="top-left-menu">
                            <ul>

                            </ul>
                        </div>

                    </div>

                    <div class="col-sm-8 pull-right">
                        <div class="header-right-menu">
                            <ul>
                                <li class="bg-black"><a style="color: white !important; font-size: 15px" href="https://en.prokousholnews.com/">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid hidden-xs">
            <div class="container">
                <div class="row" style="display:flex; justify-content: center">
                    <div class="logo">
                        <a href="/">
                        <img src="<?php echo $this->dark_mode == 1 ? get_logo_footer($this->visual_settings) : get_logo($this->visual_settings); ?>" class="logo" alt="Barta24 24x7 online multimedia news">
                        </a>
                        <p class="p-t-5">
                        <?php echo mim_date(date("D, d M, Y")); ?>
                            | <?php echo $bn_date; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">
            .main-navbar {
                background: #fff none repeat scroll 0 0;
                box-shadow: 0 0 2px -1px;
                margin-bottom: 0;
                padding: 10px 0;
                width: 100%;
                font-size: 16px;
                z-index: 99999
            }

            .main-navbar .logo {
                margin-top: 4px;
                display: block
            }

            .main-navbar .logo img {
                width: 100%
            }

            .main-navbar .navbar {
                background: 0 0;
                border: none;
                border-radius: 0;
                margin: 0
            }

            .main-navbar .navbar .active a,
            .main-navbar .navbar .active a:hover,
            .main-navbar .navbar-inverse .navbar-nav>.open>a,
            .main-navbar .navbar-inverse .navbar-nav>.open>a:focus,
            .main-navbar .navbar-inverse .navbar-nav>.open>a:hover {
                background: 0 0;
                color: #000
            }

            .main-navbar .navbar hr {
                border-top: 1px solid #e91802;
                clear: both;
                margin: 2px 0
            }

            .main-navbar .navbar .nav {
                display: inline-block;
                width: 100%;
                margin-bottom: 2px
            }

            .main-navbar .navbar li a {
                padding: 3px 6px 1px;
                color: #000;
                font-size: 18px;
                display: block
            }

            .main-navbar .navbar li a:hover {
                background-color: #e91802;
                color: #000
            }

            .main-navbar .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
                z-index: 1
            }

            .main-navbar .navbar-nav>li>.dropdown-menu {
                background: #ccc;
                padding-bottom: 0;
                padding-top: 0
            }

            .main-navbar .navbar-nav>li>.dropdown-menu li a {
                border-bottom: 1px solid #f1f1f1;
                padding-top: 5px;
                padding-bottom: 5px
            }

            .main-navbar .navbar-nav>li>.dropdown-menu li:last-child a {
                border-bottom: none
            }

            .m-logo img {
                max-height: 50px;
                width: auto;
                margin: unset;
            }

            .m-logo .navbar-brand {
                padding: unset;
            }

            ul.nav.navbar-nav.navbar-left {
                background: #0c2b57;
            }
        </style>
        <!------------------------------------------------------------------>
        <nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">

            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>

            <div class="container no-padding">

                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="/google/search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>


                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="m-logo hidden-sm hidden-md hidden-lg">
                        <a class="navbar-brand" href="/">
                            <img src="<?php echo $this->dark_mode == 1 ? get_logo_footer($this->visual_settings) : get_logo($this->visual_settings); ?>" class="logo" alt="Prokoushol 24x7 online multimedia news"></a>
                        <p class="p-t-5 m-b-0">
                            <?php echo mim_date(date("D, d M, Y")); ?>
                            | <?php echo $bn_date; ?>
                        </p>
                    </div>
                </div>


                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                    <li class="active"><a href="<?php echo lang_base_url(); ?>"><i class="fa fa-home"></i></a></li>
                        <li><a href="<?php echo category_link(30); ?>"><?php echo category(30); ?></a></li>
                        <li><a href="<?php echo category_link(5); ?>"><?php echo category(5); ?></a></li>
                        <li><a href="<?php echo category_link(7); ?>"><?php echo category(7); ?></a></li>
                        <li><a href="<?php echo category_link(8); ?>"><?php echo category(8); ?></a></li>
                        <li><a href="<?php echo category_link(10); ?>"><?php echo category(10); ?></a></li>
                        <li><a href="<?php echo category_link(11); ?>"><?php echo category(11); ?></a></li>
                        <li><a href="<?php echo category_link(12); ?>"><?php echo category(12); ?></a></li>
                        <li><a href="<?php echo category_link(13); ?>"><?php echo category(13); ?></a></li>
                        <li><a href="<?php echo category_link(14); ?>"><?php echo category(14); ?></a></li>
                        <li><a href="<?php echo category_link(15); ?>"><?php echo category(15); ?></a></li>
                        <li><a href="<?php echo category_link(17); ?>"><?php echo category(17); ?></a></li>
                        <li><a href="<?php echo category_link(18); ?>"><?php echo category(18); ?></a></li>
                        <li><a href="<?php echo category_link(19); ?>"><?php echo category(19); ?></a></li>
                        <li><a href="<?php echo category_link(20); ?>"><?php echo category(20); ?></a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">অন্যান্য</a>
                            <div class="dropdown-menu megamenu-content megamenu-others animated" role="menu">
                                <div class="col-menu-mega col-md-3">
                                    <ul>
                                    <li><a href="<?php echo category_link(21); ?>"><?php echo category(21); ?></a></li>
                                        <li><a href="<?php echo category_link(22); ?>"><?php echo category(22); ?></a></li>
                                        <li><a href="<?php echo category_link(23); ?>"><?php echo category(23); ?></a></li>
                                    </ul>
                                </div>
                                <div class="col-menu-mega col-md-3">
                                    <ul>
                                    <li><a href="<?php echo category_link(24); ?>"><?php echo category(24); ?></a></li>
                                        <li><a href="<?php echo category_link(25); ?>"><?php echo category(25); ?></a></li>
                                        <li><a href="<?php echo category_link(26); ?>"><?php echo category(26); ?></a></li>
                                    </ul>
                                </div>
                                <div class="col-menu-mega col-md-3">
                                    <ul>
                                    <li><a href="<?php echo category_link(28); ?>"><?php echo category(28); ?></a></li>
                                        <li><a href="<?php echo category_link(29); ?>"><?php echo category(29); ?></a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!----------------------------------------------------------->
        <!-- <div class="main-navbar hidden-xs">
            <div class="container">
                <div class="col-md-2" style="padding-left: 0;">
                    <a href="<?php echo lang_base_url(); ?>" class="logo"><img src="<?php echo $this->dark_mode == 1 ? get_logo_footer($this->visual_settings) : get_logo($this->visual_settings); ?>"></a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <nav class="navbar navbar-inverse hidden-xs">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?php echo lang_base_url(); ?>"><i class="fa fa-home"></i></a></li>
                                <li><a href="<?php echo category_link(30); ?>"><?php echo category(30); ?></a></li>
                                <li><a href="<?php echo category_link(5); ?>"><?php echo category(5); ?></a></li>
                                <li><a href="<?php echo category_link(7); ?>"><?php echo category(7); ?></a></li>
                                <li><a href="<?php echo category_link(8); ?>"><?php echo category(8); ?></a></li>
                                <li><a href="<?php echo category_link(10); ?>"><?php echo category(10); ?></a></li>
                                <li><a href="<?php echo category_link(11); ?>"><?php echo category(11); ?></a></li>
                                <li><a href="<?php echo category_link(12); ?>"><?php echo category(12); ?></a></li>
                                <li><a href="<?php echo category_link(13); ?>"><?php echo category(13); ?></a></li>
                                <li><a href="<?php echo category_link(14); ?>"><?php echo category(14); ?></a></li>
                                <li><a href="<?php echo category_link(15); ?>"><?php echo category(15); ?></a></li>

                                <div class="clearfix"></div>
                                <hr>
                                <li><a href="<?php echo category_link(17); ?>"><?php echo category(17); ?></a></li>
                                <li><a href="<?php echo category_link(18); ?>"><?php echo category(18); ?></a></li>
                                <li><a href="<?php echo category_link(19); ?>"><?php echo category(19); ?></a></li>
                                <li><a href="<?php echo category_link(20); ?>"><?php echo category(20); ?></a></li>
                                <li><a href="<?php echo category_link(21); ?>"><?php echo category(21); ?></a></li>
                                <li><a href="<?php echo category_link(22); ?>"><?php echo category(22); ?></a></li>
                                <li><a href="<?php echo category_link(23); ?>"><?php echo category(23); ?></a></li>
                                <li><a href="<?php echo category_link(24); ?>"><?php echo category(24); ?></a></li>
                                <li><a href="<?php echo category_link(25); ?>"><?php echo category(25); ?></a></li>
                                <li><a href="<?php echo category_link(26); ?>"><?php echo category(26); ?></a></li>
                                <li><a href="<?php echo category_link(28); ?>"><?php echo category(28); ?></a></li>
                                <li><a href="<?php echo category_link(29); ?>"><?php echo category(29); ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
    </header>