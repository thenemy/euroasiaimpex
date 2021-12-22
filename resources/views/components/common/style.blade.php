<link href="css/import_style.css" rel="stylesheet">
<style rel="stylesheet">

    * {
        margin: 0px;
        padding: 0px;
        border: none;
        outline: none;
    }

    /***

====================================================================
	Global Settings
====================================================================

 ***/

    body {
        font-family: 'Roboto Slab', sans-serif;
        font-size: 15px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        line-height: 1.8em;
        font-weight: 400;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
    }

    a {
        text-decoration: none;
        cursor: pointer;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    a:hover, a:focus, a:visited {
        text-decoration: none;
        outline: none;
    }

    h1, h2, h3, h4, h5, h6 {
        position: relative;
        font-family: 'Grand Hotel', cursive;
        font-weight: normal;
        margin: 0px;
        background: none;
        line-height: 1.6em;
    }

    input, button, select, textarea {
        font-family: 'Roboto Slab', sans-serif;
    }

    p {
        position: relative;
        line-height: 1.8em;
    }

    .strike-through {
        text-decoration: line-through;
    }

    .auto-container {
        position: static;
        max-width: 1200px;
        padding: 0px 15px;
        margin: 0 auto;
    }

    .medium-container {
        max-width: 850px;
    }

    .page-wrapper {
        position: relative;
        margin: 0 auto;
        width: 100%;
        min-width: 300px;

    }

    ul, li {
        list-style: none;
        padding: 0px;
        margin: 0px;
    }

    .theme-btn {
        display: inline-block;
        transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
    }

    .centered {
        text-align: center;
    }

    .btn-style-one {
        position: relative;
        padding: 8px 30px;
        line-height: 24px;
        text-transform: capitalize;
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border: 2px solid rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-size: 14px;
        font-weight: 700;
        border-radius: 22px;
    }

    .btn-style-one:hover {
        background: none;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        border-color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .btn-style-two {
        position: relative;
        padding: 8px 30px;
        line-height: 24px;
        text-transform: capitalize;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border: 2px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-size: 14px;
        font-weight: 700;
        border-radius: 22px;
    }

    .btn-style-two:hover {
        background: none;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .btn-style-three {
        position: relative;
        padding: 8px 30px;
        line-height: 24px;
        text-transform: capitalize;
        background: none;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border: 2px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-size: 14px;
        font-weight: 700;
        border-radius: 22px;
    }

    .btn-style-three:hover {
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .btn-style-four {
        position: relative;
        padding: 8px 30px;
        line-height: 24px;
        text-transform: capitalize;
        background: none;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border: 2px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-size: 14px;
        font-weight: 700;
        border-radius: 22px;
    }

    .btn-style-four:hover {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .btn-style-five {
        position: relative;
        padding: 8px 30px;
        line-height: 24px;
        text-transform: capitalize;
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}}, 0.90);
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border: 2px solid rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}}, 1);
        font-size: 14px;
        font-weight: 700;
        border-radius: 22px;
    }

    .btn-style-five:hover {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}}, 1);
        border-color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}}, 1);
    }

    .theme_color {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .light-font {
        font-weight: 300;
    }

    .regular-font {
        font-weight: 400;
    }

    .semibold-font {
        font-weight: 600;
    }

    .bold-font {
        font-weight: 700;
    }

    .ex-bold-font {
        font-weight: 800;
    }

    .heavy-font {
        font-weight: 900;
    }

    .bg-lightgrey {
        background-color: #f7f7f7 !important;
    }

    .no-bg {
        background: none !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .preloader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 999999;
        background-color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background-position: center center;
        background-repeat: no-repeat;
            background-image: url({{$preloader_GIF}});
    }

    img {
        display: inline-block;
        max-width: 100%;
        height: auto;
    }

    /***

====================================================================
	Scroll To Top style
====================================================================

***/

    .scroll-to-top {
        position: fixed;
        bottom: 15px;
        right: 15px;
        width: 40px;
        height: 40px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-size: 13px;
        text-transform: uppercase;
        line-height: 38px;
        text-align: center;
        z-index: 100;
        cursor: pointer;
        border-radius: 50%;
        background: rgba({{$scroll_up_color[0]}},{{$scroll_up_color[1]}},{{$scroll_up_color[2]}},{{$scroll_up_color[3]}});
        display: none;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .scroll-to-top:hover {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    /***

====================================================================
	Main Header style
====================================================================

***/

    .main-header {
        position: relative;
        left: 0px;
        top: 0px;
        z-index: 999;
        width: 100%;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .main-header.light-version {
        position: absolute;
        background: none;
    }

    .main-header .auto-container {
        position: relative;
    }

    .main-header .header-top {
        position: relative;
        background: #222222;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .main-header .header-top .top-left {
        position: relative;
        float: left;
    }

    .main-header .header-top .top-right {
        position: relative;
        float: right;
    }

    .header-top .social-icon {
        position: relative;
    }

    .header-top .social-icon a {
        position: relative;
        display: block;
        float: left;
        line-height: 24px;
        padding: 13px 5px;
        width: 41px;
        text-align: center;
        font-size: 13px;
        color: #aaaaaa;
        border-right: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
        transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .header-top .social-icon a:first-child {
        border-left: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
    }

    .header-top .social-icon a:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .header-top .get-quote-btn {
        position: relative;
        display: inline-block;
        line-height: 24px;
        padding: 13px 30px;
        background: #000000;
        font-size: 13px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
    }

    .header-top .get-quote-btn .fa {
        position: relative;
        line-height: 24px;
        padding-right: 5px;
        font-weight: 400;
        font-size: 13px;
    }

    .header-top .get-quote-btn:hover {
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .main-header .main-box {
        position: relative;
        padding: 0px 0px;
        left: 0px;
        top: 0px;
        width: 100%;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-header.light-version .main-box {
        background: none;
    }

    .main-header.fixed-header .main-box {
        position: fixed;
        border-bottom: 1px solid #e0e0e0;
        padding: 0px 0px;
        z-index: 999;
        opacity: 1;
        visibility: visible;
        -ms-animation-name: fadeInDown;
        -moz-animation-name: fadeInDown;
        -op-animation-name: fadeInDown;
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -ms-animation-duration: 500ms;
        -moz-animation-duration: 500ms;
        -op-animation-duration: 500ms;
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
        -ms-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        -op-animation-timing-function: linear;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -ms-animation-iteration-count: 1;
        -moz-animation-iteration-count: 1;
        -op-animation-iteration-count: 1;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
    }

    .main-header.light-version.fixed-header .main-box {
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        border-bottom: none;
    }

    .main-header .main-box .outer-container {
        position: relative;
    }

    .header-style-two .main-box .outer-container {
        padding: 0px 45px;
    }

    .main-header .main-box .logo-box {
        position: relative;
        float: left;
        left: 0px;
        padding: 15px 0px;
        z-index: 10;
    }

    .header-style-two .main-box .logo-box {
        position: absolute;
        top: 0px;
        left: 50%;
        margin-left: -110px;
        width: 220px;
        text-align: center;
    }

    .main-header .main-box .logo-box .logo img {
        display: inline-block;
        max-width: 100%;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-header .nav-toggler {
        position: absolute;
        right: 0px;
        top: 50%;
        margin-top: -18px;
        display: none;
    }

    .main-header .nav-toggler button {
        position: relative;
        display: block;
        height: 36px;
        width: 42px;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        text-align: center;
        font-size: 16px;
        line-height: 34px;
        border: 1px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border-radius: 3px;
        font-weight: normal;
    }

    .main-header .nav-outer {
        position: relative;
        float: right;
    }

    .header-style-two .nav-outer {
        float: none;
    }

    .header-style-two .main-box .outer-container .home-btn {
        position: absolute;
        left: 0px;
        top: 50%;
        margin-top: -15px;
        width: 45px;
        line-height: 30px;
        font-size: 18px;
        text-align: left;
        color: #aaaaaa;
    }

    .header-style-two .main-box .outer-container .home-btn a {
        color: #aaaaaa;
    }

    .header-style-two .main-box .outer-container .search-box-btn {
        position: absolute;
        right: 0px;
        top: 50%;
        margin-top: -15px;
        width: 45px;
        line-height: 30px;
        font-size: 14px;
        text-align: right;
        color: #aaaaaa;
        cursor: pointer;
    }

    .header-style-two .main-box .outer-container .search-box-btn:hover,
    .header-style-two .main-box .outer-container .home-btn a:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .main-menu {
        position: relative;
        font-family: 'Roboto Slab', sans-serif;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-menu .navbar-collapse {
        padding: 0px;
    }

    .main-menu .navigation {
        position: relative;
        width: 100%;
        margin: 0px;
    }

    .header-style-two .main-menu .navigation:nth-child(1) {
        float: left;
        text-align: left;
        max-width: 50%;
        padding-right: 110px;
    }

    .header-style-two .main-menu .navigation:nth-child(2) {
        float: right;
        text-align: right;
        max-width: 50%;
        padding-left: 110px;
    }

    .main-menu .navigation > li {
        position: relative;
        display: inline-block;
        padding: 15px 0px;
        margin-left: 50px;
    }

    .header-style-two .main-menu .navigation:nth-child(1) > li {
        margin: 0px -5px 0px 0px;
        padding: 20px 30px;
    }

    .header-style-two .main-menu .navigation:nth-child(1) > li:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 50%;
        margin-top: -10px;
        width: 4px;
        height: 20px;
        background: url(../images/icons/nav-separator.png) left center no-repeat;
    }

    .header-style-two .main-menu .navigation:nth-child(2) > li {
        margin: 0px 0px 0px -3px;
        padding: 20px 30px;
    }

    .header-style-two .main-menu .navigation:nth-child(2) > li:after {
        content: '';
        position: absolute;
        right: 0px;
        top: 50%;
        margin-top: -10px;
        width: 4px;
        height: 20px;
        background: url(../images/icons/nav-separator.png) left center no-repeat;
    }

    .main-menu .navigation > li > a {
        position: relative;
        display: block;
        padding: 25px 0px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        text-align: center;
        line-height: 30px;
        text-transform: uppercase;
        letter-spacing: 0px;
        font-weight: 400;
        opacity: 1;
        font-size: 13px;
        transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .light-version .main-menu .navigation > li > a {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .header-style-two .main-menu .navigation > li > a {
        text-transform: capitalize;
        font-size: 14px;
    }

    .main-menu .navigation > li.dropdown > a {
        padding-right: 18px;
    }

    .main-menu .navigation > li.dropdown > a:after {
        font-family: 'FontAwesome';
        content: "\f107";
        position: absolute;
        right: 0px;
        top: 50%;
        margin-top: -11px;
        width: 10px;
        height: 24px;
        display: block;
        line-height: 24px;
        font-size: 14px;
        font-weight: normal;
    }

    .main-menu .navigation > li:hover > a,
    .main-menu .navigation > li.current > a,
    .main-menu .navigation > li.current-menu-item > a {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        opacity: 1;
    }

    .main-menu .navigation > li > ul {
        position: absolute;
        left: 0px;
        top: 120%;
        width: 220px;
        padding: 0px 10px;
        z-index: 100;
        display: none;
        text-align: left;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border-top: 3px solid rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -webkit-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        -ms-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        -o-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    }

    .main-menu .navigation > li > ul.from-right {
        left: auto;
        right: 0px;
    }

    .main-menu .navigation > li > ul > li {
        position: relative;
        width: 100%;
        border-bottom: 1px solid rgba(0, 0, 0, 0.10);
    }

    .main-menu .navigation > li > ul > li:last-child {
        border-bottom: none;
    }

    .main-menu .navigation > li > ul > li > a {
        position: relative;
        display: block;
        padding: 10px 15px;
        line-height: 24px;
        font-weight: 400;
        font-size: 13px;
        text-transform: capitalize;
        color: #272727;
        transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .main-menu .navigation > li > ul > li:hover > a {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .main-menu .navigation > li > ul > li.dropdown > a:after {
        font-family: 'FontAwesome';
        content: "\f105";
        position: absolute;
        right: 10px;
        top: 10px;
        width: 10px;
        height: 20px;
        display: block;
        color: #253d4a;
        line-height: 20px;
        font-size: 16px;
        font-weight: normal;
        text-align: center;
        z-index: 5;
    }

    .main-menu .navigation > li > ul > li.dropdown:hover > a:after {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .main-menu .navigation > li > ul > li > ul {
        position: absolute;
        left: 100%;
        top: 20px;
        width: 220px;
        padding: 0px 10px;
        z-index: 100;
        display: none;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border-top: 3px solid rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        -webkit-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        -ms-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        -o-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    }

    .main-menu .navigation > li > ul > li > ul.from-right {
        left: auto;
        right: 0px;
    }

    .main-menu .navigation > li > ul > li > ul > li {
        position: relative;
        width: 100%;
        border-bottom: 1px solid rgba(0, 0, 0, 0.10);
    }

    .main-menu .navigation > li > ul > li > ul > li:last-child {
        border-bottom: none;
    }

    .main-menu .navigation > li > ul > li > ul > li > a {
        position: relative;
        display: block;
        padding: 10px 15px;
        line-height: 24px;
        font-weight: 400;
        font-size: 13px;
        text-transform: capitalize;
        color: #272727;
        transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .main-menu .navigation > li > ul > li > ul > li:hover > a {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .main-menu .navigation > li > ul > li > ul > li.dropdown > a:after {
        font-family: 'FontAwesome';
        content: "\f105";
        position: absolute;
        right: 10px;
        top: 11px;
        width: 10px;
        height: 20px;
        display: block;
        color: #272727;
        line-height: 20px;
        font-size: 16px;
        font-weight: normal;
        text-align: center;
        z-index: 5;
    }

    .main-menu .navigation > li > ul > li > ul > li.dropdown:hover > a:after {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .main-menu .navigation > li.dropdown:hover > ul {
        visibility: visible;
        opacity: 1;
        top: 100%;
    }

    .main-menu .navigation li > ul > li.dropdown:hover > ul {
        visibility: visible;
        opacity: 1;
        top: 0;
        transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
    }

    .main-menu .navbar-collapse > ul li.dropdown .dropdown-btn {
        position: absolute;
        right: 10px;
        top: 6px;
        width: 34px;
        height: 30px;
        border: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: url(../images/icons/submenu-icon.png) center center no-repeat;
        background-size: 20px;
        cursor: pointer;
        z-index: 5;
        display: none;
    }


    /***

====================================================================
	Hidden Sidebar style
====================================================================

***/

    .hidden-bar {
        position: fixed;
        top: 0;
        width: 305px;
        height: 100%;
        background: #272727;
        z-index: 9999;
        transition: all 700ms ease;
        -webkit-transition: all 700ms ease;
        -ms-transition: all 700ms ease;
        -o-transition: all 700ms ease;
        -moz-transition: all 700ms ease;
    }

    .hidden-bar .mCSB_inside > .mCSB_container {
        margin-right: 0px;
    }

    .hidden-bar.right-align {
        right: -400px;
    }

    .hidden-bar.right-align.visible-sidebar {
        right: 0px;
    }

    .hidden-bar.right-align .hidden-bar-closer {
        left: 0px;
    }

    .hidden-bar.left-align {
        left: -400px;
    }

    .hidden-bar.left-align.visible-sidebar {
        left: 0px;
    }

    .hidden-bar.left-align .hidden-bar-closer {
        right: -20px;
    }

    .hidden-bar .hidden-bar-closer {
        width: 40px;
        height: 40px;
        position: absolute;
        top: 0;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.80);
        color: #272727;
        border-radius: 2px;
        text-align: center;
        line-height: 38px;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        z-index: 999999;
    }

    .hidden-bar .hidden-bar-closer:hover {
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .hidden-bar .hidden-bar-closer:hover .btn {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .hidden-bar .hidden-bar-closer .btn {
        background-color: transparent;
        border: none;
        outline: none;
        font-size: 14px;
    }

    .hidden-bar .social-icons {
        text-align: center;
        margin: 50px 0px 30px;
    }

    .hidden-bar .social-icons ul {
        font-size: 0;
        margin-left: -5px;
        margin-right: -5px;
    }

    .hidden-bar .social-icons ul li {
        display: inline-block;
        padding: 0 5px;
    }

    .hidden-bar .social-icons ul li a {
        display: block;
        width: 36px;
        height: 36px;
        font-size: 16px;
        line-height: 36px;
        text-align: center;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border-radius: 5px;
        transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
    }

    .hidden-bar .social-icons ul li a:hover {
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .hidden-bar-wrapper {
        height: 100%;
    }

    .hidden-bar .logo {
        padding: 30px 0px;
        background: #272727;
    }

    .hidden-bar .logo img {
        display: inline-block;
        max-width: 100%;
    }

    .hidden-bar .side-menu {
        background-color: transparent;
        padding: 0;
        font-size: 13px;
        letter-spacing: 1px;
    }

    .hidden-bar .side-menu ul li ul a {
        background: transparent;
    }

    .hidden-bar .side-menu ul li ul li ul li a {
        background: transparent;
    }

    .hidden-bar .side-menu a.current {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .hidden-bar .side-menu li.current > a {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .hidden-bar .side-menu ul li a {
        background: transparent;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        display: block;
        font-weight: 500;
        text-transform: capitalize;
        border-top: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.30);
        border-bottom: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.30);
        padding: 10px 15px 10px 20px;
        position: relative;
        transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
    }

    .hidden-bar .side-menu ul li a:hover,
    .hidden-bar .side-menu ul > li.current > a,
    .hidden-bar .side-menu ul > li > ul > li.current > a {
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .hidden-bar .side-menu ul li a .btn.expander {
        background: none;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.80);
        padding: 5px 10px;
        font-size: 14px;
        border-radius: 0px;
        position: absolute;
        top: 6px;
        right: 20px;
        outline: none;
    }

    /***

====================================================================
	Main Slider style
====================================================================

***/

    .main-slider {
        position: relative;
        z-index: 10;
    }

    .main-slider .tp-dottedoverlay {
        background-color: rgba(27, 26, 27, 0.50) !important;
    }

    .main-slider .tp-caption {
        z-index: 5;
    }

    .main-slider .text {
        font-weight: 400;
        line-height: 1.8em;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-size: 20px;
    }

    .main-slider h2 {
        font-size: 110px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-weight: 400;
        text-transform: capitalize;
        line-height: 1.2em;
    }

    .main-slider h3 {
        font-size: 64px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-weight: 400;
        line-height: 1em;
    }

    .main-slider .big-text {
        font-size: 36px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-weight: 700;
        text-transform: uppercase;
        line-height: 1.2em;
        font-family: 'Roboto Condensed', sans-serif;
    }

    .main-slider .btn-style-one,
    .main-slider .btn-style-two,
    .main-slider .btn-style-three {
        border-width: 2px !important;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .main-slider .tp-bannertimer,
    .main-slider .tp-bullets {
        display: none !important;
    }

    /***

====================================================================
	Titles / Headings Styles
====================================================================

***/

    .sec-title-one {
        position: relative;
        padding-top: 70px;
        padding-bottom: 10px;
        text-align: center;
        margin-bottom: 50px;
    }

    .sec-title-one:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 80px;
        background: url({{$common_icon}}) center top no-repeat;
    }

    .sec-title-one:after {
        content: '';
        position: absolute;
        left: 50%;
        margin-left: -20px;
        bottom: 0px;
        width: 40px;
        height: 2px;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sec-title-one h2 {
        font-size: 34px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        line-height: 1.4em;
    }

    .sec-title-two {
        position: relative;
        padding-bottom: 10px;
        text-align: center;
        margin-bottom: 50px;
    }

    .sec-title-two:after {
        content: '';
        position: absolute;
        left: 50%;
        margin-left: -20px;
        bottom: 0px;
        width: 40px;
        height: 2px;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sec-title-two h2 {
        font-size: 36px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        line-height: 1.4em;
    }

    /***

====================================================================
	Intro Section
====================================================================

***/

    .intro-section {
        position: relative;
        background: url({{$background_image}}) center center no-repeat;
        background-size: cover;
        z-index: 12;
    }

    .intro-section:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$intro_section_before_color_home[0]}},{{$intro_section_before_color_home[1]}},{{$intro_section_before_color_home[2]}},{{$intro_section_before_color_home[3]}});
    }

    .intro-section .inner-part {
        position: relative;
        margin-bottom: -30px;
        padding-bottom: 10px;
    }

    .intro-section .inner-part .content-box {
        position: relative;
        top: -200px;
        padding: 60px 110px 0px;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        margin-bottom: 65px;
    }

    .intro-section .inner-part .content-box .inner-box {
        position: relative;
    }

    .intro-section .inner-part .content-box .inner-box:before {
        content: '';
        position: absolute;
        bottom: -250px;
        right: 100%;
        margin-right: -110px;
        width: 570px;
        height: 510px;
        background: url(../images/resource/crop-image-left.png) center top no-repeat;
        z-index: 1;
    }

    .intro-section .inner-part .content-box .inner-box:after {
        content: '';
        position: absolute;
        bottom: -250px;
        left: 100%;
        margin-left: -110px;
        width: 570px;
        height: 510px;
        background: url(../images/resource/crop-image-right.png) center top no-repeat;
        z-index: 1;
    }

    .intro-section .inner-part .content-box:after {
        content: '';
        position: absolute;
        left: 0px;
        top: 100%;
        height: 64px;
        width: 100%;
        background:url({{$home_image_down}}) center top no-repeat;

    }

    .intro-section .inner-part .content-column {
        position: relative;
        margin-bottom: 30px;
        z-index: 5;
    }

    .intro-section .inner-part .text-left {
        padding-right: 20px;
    }

    .intro-section .inner-part .text-right {
        padding-left: 20px;
    }

    .intro-section .inner-part .content-column h3 {
        font-size: 24px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        line-height: 1.4em;
        margin-bottom: 15px;
        font-weight: 700;
        font-family: 'Roboto Slab', serif;
    }

    .intro-section .inner-part .content-column .text {
        line-height: 2em;
        margin-bottom: 20px;
    }

    /***

====================================================================
	About Farm
====================================================================

***/

    .about-farm {
        position: relative;
        padding: 120px 0px 90px;
    }

    .about-farm.style-two {
        padding-bottom: 50px;
    }

    .about-farm .column {
        position: relative;
        margin-bottom: 30px;
    }

    .about-farm .image-box {
        position: relative;
        display: block;
        text-align: center;
    }

    .about-farm .image-box img {
        display: inline-block;
        max-width: 100%;
    }

    /***

====================================================================
	Tabs Box
====================================================================

***/

    .tabs-box {
        position: relative;
    }

    .tabs-box .tab-buttons {
        position: relative;
    }

    .tabs-box .tabs-content {
        position: relative;
    }

    .tabs-box .tabs-content .tab {
        position: relative;
        display: none;
    }

    .tabs-box .tabs-content .active-tab {
        display: block;
    }

    /***

====================================================================
	Tabs Style One
====================================================================

***/

    .tabs-style-one .tab-buttons {
        position: relative;
    }

    .tabs-style-one .tab-buttons .tab-btn {
        position: relative;
        display: block;
        width: 166px;
        height: 166px;
        line-height: 26px;
        padding: 70px 10px;
        text-align: center;
        font-weight: 700;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-size: 18px;
        cursor: pointer;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        transition: all 500ms ease;
    }

    .tabs-style-one .tab-buttons .tab-btn.active-btn {
        z-index: 2;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .tabs-style-one .tab-buttons .tab-btn .txt {
        position: relative;
        display: block;
    }

    .tabs-style-one .tab-buttons .tab-btn:before {
        content: '';
        position: absolute;
        left: 50%;
        margin-left: -83px;
        top: 0px;
        display: block;
        width: 166px;
        height: 166px;
        border: 1px solid #dddddd;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border-radius: 50%;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        transition: all 500ms ease;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        transform: scale(1, 1);
    }

    .tabs-style-one .tab-buttons .tab-btn.active-btn:before {
        -webkit-transform: scale(1.3, 1.3);
        -ms-transform: scale(1.3, 1.3);
        -o-transform: scale(1.3, 1.3);
        -moz-transform: scale(1.3, 1.3);
        transform: scale(1.3, 1.3);
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .tabs-style-one .tabs-content {
        padding: 50px 0px;
        text-align: center;
    }

    .tabs-style-one .tabs-content h3 {
        font-size: 24px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 700;
        font-family: 'Roboto Slab', serif;
        margin-bottom: 20px;
    }

    .style-two .tabs-style-one .tabs-content h3 {
        font-size: 34px;
        font-weight: 400;
        font-family: 'Grand Hotel', cursive;
    }

    .style-two .tabs-style-one .tabs-content .subtitle {
        font-size: 16px;
        font-weight: 700;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        text-transform: capitalize;
        margin-bottom: 5px;
    }

    .tabs-style-one .tabs-content p {
        margin-bottom: 20px;
    }

    .tabs-style-one .tabs-content .author-name {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-size: 34px;
        line-height: 1.6em;
    }

    /***

====================================================================
	Fluid Section One
====================================================================

***/

    .fluid-section-one {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
    }

    .fluid-section-one .oval-cut {
        position: absolute;
        left: 0;
        top: -14px;
        width: 100%;
        height: 64px;
        background: url(../images/background/curve-one.png) center top no-repeat;
        z-index: 2;
    }

    .fluid-section-one .floated-image-left {
        position: absolute;
        left: 0px;
        bottom: -100px;
        max-width: 100%;
        z-index: 1;
    }

    .fluid-section-one .floated-image-right {
        position: absolute;
        right: 0px;
        bottom: -100px;
        max-width: 100%;
        z-index: 1;
    }

    .fluid-section-one .left-column {
        position: relative;
        float: left;
        width: 50%;
        padding: 80px 0px;
    }

    .fluid-section-one .left-column .inner-box {
        position: relative;
        float: right;
        width: 100%;
        max-width: 400px;
        padding: 0px 50px 0px 15px;
        z-index: 1;
    }

    .fluid-section-one .right-column {
        position: relative;
        float: left;
        width: 50%;
        padding: 80px 0px;
    }

    .fluid-section-one .right-column .inner-box {
        position: relative;
        float: left;
        width: 100%;
        max-width: 400px;
        padding: 0px 15px 0px 50px;
        z-index: 2;
    }

    .fluid-section-one .left-column:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.94);
    }

    .fluid-section-one .right-column:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}}, 0.94);
    }

    .fluid-section-one h3 {
        font-size: 52px;
        line-height: 1.2em;
    }

    .fluid-section-one h5 {
        font-size: 28px;
        line-height: 1.2em;
        margin-bottom: 15px;
    }

    /***

====================================================================
	Gallery Section
====================================================================

***/

    .gallery-section {
        position: relative;
        padding: 120px 0px;
    }

    .gallery-section .more-btn-outer {
        padding-top: 20px;
    }

    .gallery-section .sec-title-one {
        margin-bottom: 30px;
    }

    .gallery-section .filters {
        position: relative;
        text-align: center;
        margin-bottom: 40px;
    }

    .gallery-section .filters li {
        position: relative;
        display: inline-block;
        padding: 0px 0px;
        line-height: 24px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        cursor: pointer;
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 400;
        margin: 0px 15px 10px;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
    }

    .gallery-section .filters li:hover,
    .gallery-section .filters li.active {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .default-food-item {
        position: relative;
        margin-bottom: 30px;
    }

    .default-food-item.mix {
        display: none;
    }

    .default-food-item .inner-box {
        position: relative;
        width: 100%;
        overflow: hidden;
        text-align: center;
        border: 1px solid #e0e0e0;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        border-radius: 2px;
    }

    .default-food-item .inner-box:hover {
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .default-food-item .image-box {
        position: relative;
        display: block;
    }

    .default-food-item .image-box img {
        position: relative;
        display: block;
        width: 100%;
    }

    .default-food-item .lower-content {
        position: relative;
        padding: 20px 20px 40px;
    }

    .default-food-item .lower-content h3 {
        font-size: 20px;
        font-weight: 400;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 10px;
        font-family: 'Roboto Slab', serif;
    }

    .default-food-item .lower-content h3 a {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
    }

    .default-food-item .lower-content h3 a:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .default-food-item .lower-content .price {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-size: 20px;
        font-weight: 700;
    }


    .fancybox-next span,
    .fancybox-prev span {
        background-image: none !important;
        width: 44px !important;
        height: 44px !important;
        line-height: 44px !important;
        text-align: center;
    }

    .fancybox-next span:before,
    .fancybox-prev span:before {
        content: '';
        position: absolute;
        font-family: 'FontAwesome';
        left: 0px;
        top: 0px;
        font-size: 12px;
        width: 44px !important;
        height: 44px !important;
        line-height: 44px !important;
        background-color: rgba(28, 28, 28, 0.40) !important;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        visibility: visible;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
    }

    .fancybox-next span:before {
        content: '\f178';
    }

    .fancybox-prev span:before {
        content: '\f177';
    }

    .fancybox-next:hover span:before,
    .fancybox-prev:hover span:before {
        background-color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}}) !important;
        color: #000000;
    }

    .fancybox-type-image .fancybox-close {
        right: 0px;
        top: 0px;
        width: 45px;
        height: 45px;
        background: url(../images/icons/icon-cross.png) center center no-repeat;
        background-color: rgba(17, 17, 17, 0.50) !important;
    }

    .fancybox-type-image .fancybox-close:hover {
        background-color: #000000 !important;
    }

    .fancybox-type-image .fancybox-skin {
        padding: 0px !important;
    }

    /***

====================================================================
	Deal Of the day Section
====================================================================

***/

    .deal-of-day {
        position: relative;
        padding: 120px 0px 100px;
        background: url({{$background_image}}) center center no-repeat;
        background-size: cover;
    }

    .deal-of-day:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba(244, 238, 222, 0.94);
    }

    .deal-of-day .auto-container {
        position: relative;
        z-index: 1;
    }

    .deal-of-day .title-box {
        position: relative;
        margin-bottom: -160px;
        z-index: 2;
    }

    .deal-of-day .title-box h3 {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-weight: 700;
        font-family: 'Roboto Slab', serif;
        font-size: 20px;
    }

    .deal-of-day .title-box h2 {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-weight: 400;
        font-size: 64px;
        line-height: 1.4em;
    }

    .deal-of-day .carousel-outer {
        position: relative;
    }

    .deal-of-day .carousel-outer .image-box {
        display: block;
        text-align: right;
    }

    .deal-of-day .carousel-outer .image-box img {
        position: relative;
        display: inline-block !important;
        width: auto !important;
        max-width: 100%;
    }

    .deal-of-day .carousel-outer .content-column .inner {
        position: relative;
        padding: 80px 0px 40px;
    }

    .deal-of-day .carousel-outer .content-column .prod-title {
        font-size: 24px;
        font-weight: 700;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        line-height: 1.4em;
        margin-bottom: 10px;
    }

    .deal-of-day .carousel-outer .content-column .price {
        font-size: 20px;
        font-weight: 700;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        line-height: 1.4em;
        margin-bottom: 15px;
    }

    .deal-of-day .carousel-outer .content-column .text {
        margin-bottom: 30px;
    }

    .deal-of-day .carousel-outer .options .normal-btn {
        position: relative;
        display: inline-block;
        line-height: 24px;
        padding: 8px 5px;
        text-align: center;
        width: 44px;
        height: 44px;
        font-size: 18px;
        margin-right: 15px;
        margin-bottom: 10px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border: 2px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border-radius: 5px;
    }

    .deal-of-day .carousel-outer .options .shop-btn {
        position: relative;
        display: inline-block;
        line-height: 24px;
        padding: 8px 40px;
        text-align: center;
        margin-right: 15px;
        margin-bottom: 10px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border: 2px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border-radius: 22px;
    }

    .deal-of-day .carousel-outer .options .shop-btn:hover,
    .deal-of-day .carousel-outer .options .normal-btn:hover {
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .deal-of-day .owl-theme .owl-controls .owl-dots {
        display: none !important;
    }

    .deal-of-day .owl-theme .owl-controls {
        position: absolute;
        left: 0px;
        top: 170px;
        margin: 0px;
        padding: 0px;
    }

    .deal-of-day .owl-theme .owl-controls .owl-nav [class*="owl-"] {
        position: relative;
        display: inline-block;
        line-height: 36px;
        text-align: center;
        width: 40px;
        height: 40px;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-size: 20px;
        border: 2px solid rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        margin: 0px 10px 0px 0px;
        padding: 0px;
        background: none;
        transition: all 500ms ease;
        border-radius: 3px;
    }

    .deal-of-day .owl-theme .owl-controls .owl-nav [class*="owl-"]:hover {
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    /***

====================================================================
	Team Section
====================================================================

***/

    .team-section {
        position: relative;
        padding: 120px 0px;
    }

    .team-section .sec-title-one {
        margin-bottom: 70px;
    }

    .default-team-member {
        position: relative;
        margin-bottom: 30px;
    }

    .default-team-member .inner-box {
        position: relative;
        display: block;
        border: 1px solid #e0e0e0;
        transition: all 500ms ease;
    }

    .default-team-member.vertical .inner-box {
        max-width: 570px;
        margin: 0 auto;
    }

    .default-team-member:hover .inner-box {
        -webkit-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.30);
        -ms-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.30);
        -o-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.30);
        -moz-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.30);
        box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.30);
    }

    .default-team-member .inner-box .content-column {
        position: relative;
        float: left;
        width: 50%;
        text-align: center;
    }

    .default-team-member .inner-box .image-column {
        position: relative;
        float: left;
        width: 50%;
    }

    .default-team-member .inner-box .image-column img {
        position: relative;
        display: block;
        width: 100%;
        height: auto;
    }

    .default-team-member.alternate .inner-box .content-column {
        float: left;
    }

    .default-team-member.alternate .inner-box .image-column {
        float: right;
    }

    .default-team-member.vertical .inner-box .image-column,
    .default-team-member.vertical .inner-box .content-column {
        float: none;
        width: 100%;
    }

    .default-team-member .content-column .inner {
        position: relative;
        padding: 50px 50px 20px;
    }

    .default-team-member.vertical .inner-box .content-column .inner {
        padding: 48px 50px;
    }

    .default-team-member .inner-box h3 {
        position: relative;
        font-size: 18px;
        font-weight: 700;
        font-family: 'Roboto Slab', serif;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 15px;
        transition: all 500ms ease;
    }

    .default-team-member:hover .inner-box h3 {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .default-team-member .inner-box .text {
        position: relative;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        font-size: 14px;
        margin-bottom: 20px;
    }

    .default-team-member .inner-box .social-links a {
        position: relative;
        display: inline-block;
        font-size: 15px;
        color: #bdbdbd;
        line-height: 24px;
        margin: 0px 8px;
    }

    .default-team-member .inner-box .social-links a:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    /***

====================================================================
	Testimonials Section
====================================================================

***/

    .testimonial-section {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
        padding: 80px 0px 130px;
    }

    .testimonial-section:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.94);
    }

    .testimonial-section .oval-cut {
        position: absolute;
        left: 0;
        bottom: 0px;
        width: 100%;
        height: 64px;
        background: url(../images/background/curve-two.png) center top no-repeat;
        z-index: 2;
    }


    .testimonial-section .carousel-outer {
        position: relative;
        padding: 0px 0px;
        max-width: 860px;
        margin: 0 auto;
        text-align: center;
        z-index: 1;
    }

    .testimonial-section .icon-box {
        position: relative;
        width: 64px;
        height: 64px;
        line-height: 60px;
        font-size: 24px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border: 2px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        text-align: center;
        margin: 0 auto 40px;
        border-radius: 50%;
    }

    .testimonial-section .icon-box:after {
        content: '';
        position: absolute;
        left: 50%;
        margin-left: -1px;
        top: 100%;
        margin-top: 10px;
        border-right: 2px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        height: 40px;
    }

    .testimonial-section .slide-item .text-content {
        position: relative;
        padding: 30px 50px;
        font-size: 17px;
        line-height: 1.8em;
        margin-bottom: 0px;
    }

    .testimonial-section .slide-item .text-content:before {
        font-family: 'FontAwesome';
        content: "\f10d";
        position: absolute;
        left: 0px;
        top: 0px;
        display: block;
        line-height: 1em;
        font-size: 44px;
        font-weight: normal;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
    }

    .testimonial-section .slide-item .text-content:after {
        font-family: 'FontAwesome';
        content: "\f10e";
        position: absolute;
        right: 0px;
        bottom: 0px;
        display: block;
        line-height: 1em;
        font-size: 44px;
        font-weight: normal;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
    }

    .testimonial-section .slide-item .quote-info {
        position: relative;
        padding: 15px 0px 10px 130px;
        min-height: 100px;
        text-align: left;
        max-width: 340px;
        margin: 0 auto;
    }

    .testimonial-section .slide-item .quote-info h4 {
        font-size: 34px;
        line-height: 1.3em;
    }

    .testimonial-section .slide-item .quote-info .designation {
        font-size: 15px;
        font-weight: 700;
    }

    .testimonial-section .slide-item .quote-info .author-thumb {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100px;
        height: 100px;
    }

    .testimonial-section .owl-theme .owl-controls {
        display: none;
    }

    /***

====================================================================
	Testimonials Section Two
====================================================================

***/

    .testimonial-section-two {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
        padding: 70px 0px 120px;
    }

    .testimonial-section-two:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.94);
    }

    .testimonial-section-two .oval-cut {
        position: absolute;
        left: 0;
        bottom: 0px;
        width: 100%;
        height: 64px;
        background: url(../images/background/curve-two.png) center top no-repeat;
        z-index: 2;
    }

    .testimonial-section-two .carousel-outer {
        position: relative;
        padding: 0px 0px;
        max-width: 860px;
        margin: 0 auto;
        z-index: 1;
    }

    .testimonial-section-two .slide-item {
        position: relative;
        padding: 30px 50px 0px 160px;
        min-height: 100px;
    }

    .testimonial-section-two .slide-item:before {
        font-family: 'FontAwesome';
        content: "\f10d";
        position: absolute;
        left: 0px;
        top: 0px;
        display: block;
        line-height: 1em;
        font-size: 44px;
        font-weight: normal;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
    }

    .testimonial-section-two .slide-item:after {
        font-family: 'FontAwesome';
        content: "\f10e";
        position: absolute;
        right: 0px;
        bottom: -5px;
        display: block;
        line-height: 1em;
        font-size: 44px;
        font-weight: normal;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.10);
    }

    .testimonial-section-two .slide-item .author-thumb {
        position: absolute;
        left: 30px;
        top: 30px;
        width: 100px;
        height: 100px;
    }

    .testimonial-section-two .slide-item .info {
        margin-bottom: 5px;
    }

    .testimonial-section-two .slide-item .info .title {
        font-size: 34px;
        font-family: 'Grand Hotel', cursive;
        line-height: 1.3em;
        padding-right: 20px;
    }

    .testimonial-section-two .slide-item .info .designation {
        font-size: 15px;
        font-weight: 700;
    }

    .testimonial-section-two .slide-item .text-content {
        position: relative;
        font-size: 16px;
        line-height: 1.8em;
    }

    .testimonial-section-two .owl-theme .owl-controls {
        display: none;
    }

    /***

====================================================================
	Sponsors Section
====================================================================

***/

    .sponsors-style-one {
        position: relative;
        padding: 30px 0px 80px;
        text-align: center;
    }

    .sponsors-style-one.alternate {
        padding: 80px 0px;
        background: #f8f8f8;
    }

    .sponsors-style-one .sec-title-one {
        margin-bottom: 50px;
    }

    .sponsors-style-one .floated-image-left {
        position: absolute;
        left: 0px;
        bottom: 0px;
        max-width: 100%;
    }

    .sponsors-style-one .slide-item img {
        display: inline-block;
        width: auto;
        max-width: 100%;
    }

    .sponsors-style-one .owl-theme .owl-controls {
        display: none !important;
    }

    /***

====================================================================
	Fluid Section Two
====================================================================

***/

    .fluid-section-two {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
    }

    .fluid-section-two:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}}, 0.94);
    }

    .fluid-section-two .left-column {
        position: relative;
        float: left;
        width: 50%;
        padding: 0px 0px;
    }

    .fluid-section-two .left-column .inner-box {
        position: relative;
        float: right;
        width: 100%;
        max-width: 600px;
        padding: 90px 80px 90px 15px;
        z-index: 1;
    }

    .fluid-section-two .left-column h5 {
        font-size: 14px;
        line-height: 1.4em;
        margin-bottom: 10px;
        letter-spacing: 1px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: 'Roboto Slab', serif;
    }

    .fluid-section-two .left-column h3 {
        font-size: 34px;
        line-height: 1.2em;
        margin-bottom: 40px;
    }

    .fluid-section-two .subscribe-form {
        position: relative;
    }

    .fluid-section-two .subscribe-form .form-group {
        position: relative;
        padding-right: 160px;
        margin: 0px;
    }

    .fluid-section-two .subscribe-form .form-group input {
        position: relative;
        display: block;
        width: 100%;
        font-size: 14px;
        height: 44px;
        line-height: 24px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: none;
        border-bottom: 2px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        padding: 6px 0px 12px;
        margin: 0px;
    }

    .fluid-section-two .subscribe-form ::-webkit-input-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .fluid-section-two .subscribe-form ::-moz-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .fluid-section-two .subscribe-form :-ms-input-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .fluid-section-two .subscribe-form input:-moz-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .fluid-section-two .subscribe-form .form-group button {
        position: absolute;
        right: 0px;
        top: 0px;
        width: 140px;
        text-align: center;
    }

    .fluid-section-two .right-column {
        position: absolute;
        right: 0px;
        top: 0px;
        width: 50%;
        height: 100%;
        z-index: 1;
    }

    /***

====================================================================
	Map Section
====================================================================

***/

    .map-section {
        position: relative;
        top: -260px;
        margin-bottom: -260px;
    }

    .map-canvas {
        position: relative;
        left: 0px;
        top: 0px;
        width: 100%;
        height: auto;
    }

    .fluid-section-two .map-canvas {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
    }

    .map-canvas .map-data {
        text-align: center;
        font-size: 13px;
        font-weight: 400;
    }

    .map-canvas .map-data h6 {
        text-transform: uppercase;
        font-size: 15px;
        font-weight: 700;
        font-family: 'Roboto Slab', serif;
        text-align: center;
        margin-bottom: 5px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    /***

====================================================================
	Main Footer
====================================================================

***/

    .main-footer {
        position: relative;
    }

    .footer-style-one {
        border-top: 1px solid #f0f0f0;
    }

    .footer-style-two {
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        color: #aaaaaa;
    }

    .footer-style-one .footer-upper {
        position: relative;
        padding: 100px 0px 50px;
    }

    .footer-style-two .footer-upper {
        position: relative;
        padding: 80px 0px 50px;
    }

    .footer-style-one .column {
        position: relative;
        margin-bottom: 30px;
    }

    .footer-style-two .column {
        position: relative;
        margin-bottom: 30px;
    }

    .footer-style-one .centered-column {
        max-width: 350px;
        margin: 0 auto 30px;
        text-align: center;
    }

    .footer-style-one .column h2 {
        position: relative;
        font-size: 14px;
        line-height: 1.4em;
        padding: 0px 0px 10px;
        font-family: 'Roboto Slab', serif;
        margin-bottom: 35px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .footer-style-two .column h2 {
        position: relative;
        font-size: 14px;
        line-height: 1.4em;
        padding: 0px;
        font-family: 'Roboto Slab', serif;
        margin-bottom: 20px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .footer-style-one .column h2:after {
        content: '';
        position: absolute;
        left: 0px;
        bottom: 0px;
        width: 30px;
        border-bottom: 1px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .footer-style-one .about-widget .footer-logo {
        position: relative;
        margin: -35px 0px 20px;
    }

    .footer-style-two .logo-widget {
        text-align: center;
        padding: 50px 0px 20px;
    }

    .footer-style-one .about-widget .text,
    .footer-style-two .subscribe-widget .text {
        font-size: 14px;
        line-height: 1.8em;
        margin-bottom: 20px;
    }

    .footer-style-one .footer-upper a {
        transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
    }

    .footer-style-one .footer-upper a:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .footer-style-one .footer-upper .info-widget li {
        position: relative;
        line-height: 1.8em;
        margin-bottom: 15px;
    }

    .footer-style-two .footer-upper .info-widget li {
        position: relative;
        line-height: 1.8em;
        margin-bottom: 10px;
    }

    .footer-style-one .footer-upper .links-widget li {
        position: relative;
        margin-bottom: 7px;
    }

    .footer-style-one .footer-upper .links-widget li a {
        position: relative;
        display: block;
        font-size: 13px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        line-height: 24px;
    }

    .footer-style-one .footer-upper .links-widget li a:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .footer-style-one .footer-upper .social-links h3 {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 700;
        margin-bottom: 7px;
        font-size: 13px;
        text-transform: uppercase;
        font-family: 'Roboto Slab', serif;
    }

    .footer-style-one .footer-upper .social-links a {
        position: relative;
        display: inline-block;
        font-size: 14px;
        line-height: 24px;
        text-align: center;
        background: none;
        margin-right: 12px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .footer-style-one .footer-upper .social-links a:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .footer-style-one .footer-upper .gallery-widget {
        position: relative;
    }

    .footer-style-one .footer-upper .gallery-widget .image {
        position: relative;
        float: left;
        width: 33.333%;
        padding: 0px 5px 5px 0px;
    }

    .footer-style-one .footer-upper .gallery-widget .image img {
        position: relative;
        display: block;
        width: 100%;
        transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
    }

    .footer-style-one .footer-upper .gallery-widget .image img:hover {
        opacity: 0.80;
    }

    .footer-style-one .footer-bottom {
        position: relative;
        background:  rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        color: #aaaaaa;
        font-size: 14px;
        text-align: center;
        padding: 25px 0px;
    }

    .footer-style-one .footer-bottom .copyright {
        position: relative;
        line-height: 30px;
        font-weight: 400;
    }

    .footer-style-two .footer-bottom {
        position: relative;
        background: #2a2a2a;
        color: #aaaaaa;
        font-size: 14px;
        text-align: center;
        padding: 25px 0px;
    }

    .footer-style-two .footer-bottom .copyright {
        position: relative;
        line-height: 30px;
        font-weight: 400;
    }

    .subscribe-form-two {
        position: relative;
    }

    .subscribe-form-two .form-group {
        position: relative;
        margin: 0px;
    }

    .subscribe-form-two .form-group input {
        position: relative;
        display: block;
        width: 100%;
        height: 50px;
        line-height: 24px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-size: 14px;
        background: #2d2d2d;
        padding: 13px 60px 13px 20px;
        margin: 0px;
        border-radius: 3px;
    }

    .subscribe-form-two ::-webkit-input-placeholder {
        color: #aaaaaa;
    }

    .subscribe-form-two ::-moz-placeholder {
        color: #aaaaaa;
    }

    .subscribe-form-two :-ms-input-placeholder {
        color: #aaaaaa;
    }

    .subscribe-form-two input:-moz-placeholder {
        color: #aaaaaa;
    }

    .subscribe-form-two .form-group button {
        position: absolute;
        right: 3px;
        top: 3px;
        width: 60px;
        height: 44px;
        font-size: 15px;
        font-weight: 700;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        line-height: 44px;
        text-align: center;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        text-transform: uppercase;
    }

    /***

====================================================================
	Search Popup
====================================================================

***/

    .search-popup {
        position: fixed;
        left: 0px;
        top: -100%;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.80);
        z-index: 9999;
        visibility: hidden;
        opacity: 0;
        overflow: auto;
        transition: all 700ms ease;
        -moz-transition: all 700ms ease;
        -webkit-transition: all 700ms ease;
        -ms-transition: all 700ms ease;
        -o-transition: all 700ms ease;
    }

    .search-popup.popup-visible {
        top: 0;
        visibility: visible;
        opacity: 1;
    }

    .search-popup .close-search {
        position: absolute;
        right: 25px;
        top: 25px;
        font-size: 32px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        cursor: pointer;
        z-index: 5;
    }

    .search-popup .close-search:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .search-popup .search-form {
        position: relative;
        padding: 0px 15px 50px;
        padding-top: 200px;
        max-width: 1024px;
        margin: 0 auto;
    }

    .search-popup .search-form fieldset {
        position: relative;
        border: 5px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.80);
        -webkit-border-radius: 12px;
        -ms-border-radius: 12px;
        -o-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
    }

    .search-popup .search-form fieldset input[type="search"],
    .search-popup .search-form fieldset input.form-control {
        position: relative;
        height: 70px;
        padding: 20px 220px 20px 30px;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        line-height: 30px;
        font-size: 24px;
        color: #233145;
        font-family: 'Oswald', sans-serif;
        -webkit-border-radius: 7px;
        -ms-border-radius: 7px;
        -o-border-radius: 7px;
        -moz-border-radius: 7px;
        border-radius: 7px;
    }

    .search-popup .search-form fieldset input[type="submit"] {
        position: absolute;
        display: block;
        right: 0px;
        top: 0px;
        text-align: center;
        width: 220px;
        padding: 20px 10px 20px 10px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        line-height: 30px;
        height: 70px;
        font-size: 18px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-family: 'Oswald', sans-serif;
        -moz-border-radius: 0px 7px 7px 0px;
        -ms-border-radius: 0px 7px 7px 0px;
        -o-border-radius: 0px 7px 7px 0px;
        -webkit-border-radius: 0px 7px 7px 0px;
        border-radius: 0px 7px 7px 0px;
    }

    .search-popup .search-form fieldset input[type="submit"]:hover {
        background: #334551;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .search-popup h3 {
        font-family: 'Oswald', sans-serif;
        font-size: 24px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        margin-bottom: 30px;
        text-align: center;
        letter-spacing: 1px;
    }

    .search-popup .recent-searches {

        font-size: 14px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        text-align: center;
    }

    .search-popup .recent-searches li {
        display: inline-block;
        margin: 0px 10px 10px 0px;
    }

    .search-popup .recent-searches li a {
        display: block;
        line-height: 24px;
        border: 1px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        padding: 5px 20px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border-radius: 3px;
    }

    .search-popup .recent-searches li a:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    /***

====================================================================
	Products Section One
====================================================================

***/

    .products-section-one {
        position: relative;
        padding: 120px 0px 50px;
    }

    .product-style-one {
        position: relative;
        margin-bottom: 70px;
    }

    .product-style-one .inner-box {
        position: relative;
        background: url() center center repeat;
        background-attachment: fixed;
    }

    .product-style-one .inner-box:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}}, 0.95);
    }

    .product-style-one.orange-theme .inner-box:before {
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}}, 0.95);
    }

    .product-style-one.light-theme .inner-box:before {
        background: rgba(244, 238, 222, 0.95);
    }

    .product-style-one.green-theme .inner-box:before {
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.95);
    }

    .product-style-one .inner-box .content {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        padding: 60px 50px 0px;
        z-index: 1;
    }

    .product-style-one.light-theme .content {
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .product-style-one .inner-box .food-image {
        position: relative;
        display: block;
        margin-top: -60px;
        bottom: -60px;
        text-align: center;
        z-index: 1;
    }

    .product-style-one .inner-box h3 {
        font-family: 'Roboto Slab', serif;
        font-size: 28px;
        font-weight: 700;
        text-transform: capitalize;
        line-height: 1.4em;
    }

    .product-style-one.light-theme .inner-box h3 {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .product-style-one .inner-box .text {
        margin-bottom: 5px;
    }

    .product-style-one .inner-box .default-link {
        display: inline-block;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-size: 14px;
        font-weight: 700;
        text-transform: capitalize;
        line-height: 1.4em;
        border-bottom: 1px solid;
    }

    .product-style-one.light-theme .inner-box .default-link {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    /***

====================================================================
	Featured Package Section
====================================================================

***/

    .featured-package-section {
        position: relative;
        padding: 120px 0px 0px;
    }

    .featured-package-section .package-box {
        position: relative;
        background: #f8f8f8 url({{$background_image}}) center center repeat;
    }

    .featured-package-section .package-box:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba(248, 248, 248, 0.98);
    }

    .featured-package-section .package-box .inner {
        position: relative;
        z-index: 1;
    }

    .featured-package-section .package-box .image-box {
        position: relative;
        margin-top: -100px;
        padding-left: 30px;
    }

    .featured-package-section .package-box .content-box {
        position: relative;
        padding: 100px 50px 30px;
    }

    .featured-package-section .package-box .info {
        position: relative;
        margin-bottom: 20px;
    }

    .featured-package-section .package-box .sub-title {
        font-size: 14px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        line-height: 2em;
    }

    .featured-package-section .package-box .title {
        font-size: 30px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 700;
        line-height: 1.6em;
    }

    .featured-package-section .package-box .pricing {
        font-size: 20px;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-weight: 700;
        line-height: 1.6em;
    }

    .featured-package-section .package-box .pricing .old-price {
        font-size: 16px;
        color: #c0c0c0;
        font-weight: 400;
        text-decoration: line-through;
        padding-right: 10px;
        line-height: 1.4em;
    }

    .featured-package-section .package-box .text {
        position: relative;
        font-size: 14px;
        line-height: 1.8em;
        margin-bottom: 20px;
    }

    .featured-package-section .package-box .link-box {
        position: relative;
        margin-bottom: 30px;
    }

    /***

====================================================================
	Countdown style
====================================================================

***/

    .time-counter {
        position: relative;
    }

    .time-counter .time-countdown {
        position: relative;
    }

    .time-counter .time-countdown .counter-column {
        position: relative;
        float: left;
        margin: 0px 25px 30px 0px;
        padding-right: 25px;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-size: 14px;
        line-height: 1.8em;
        text-transform: capitalize;
        text-align: center;
        font-weight: 400;
    }

    .time-counter .time-countdown .counter-column:after {
        content: '';
        position: absolute;
        right: -1px;
        top: 50%;
        margin-top: -20px;
        width: 2px;
        height: 40px;
        background: url(../images/icons/count-separator.png) right center no-repeat;
    }

    .time-counter .time-countdown .counter-column:last-child:after {
        display: none;
    }

    .time-counter .time-countdown .counter-column .count {
        position: relative;
        display: block;
        font-size: 24px;
        line-height: 1.4em;
        padding: 0px;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-style: normal;
        letter-spacing: 1px;
        font-weight: 700;
    }

    /***

====================================================================
	Products Section Two
====================================================================

***/

    .products-section-two {
        position: relative;
        padding: 120px 0px;
    }

    .product-style-two {
        position: relative;
        margin-bottom: 30px;
    }

    .product-style-two .inner-box {
        position: relative;
        display: block;
        border: 1px solid #f0f0f0;
    }

    .product-style-two .inner-box .image-column,
    .product-style-two .inner-box .content-column {
        padding: 0px;
    }

    .product-style-two .inner-box .image img {
        position: relative;
        display: block;
        width: 100%;
    }

    .product-style-two .content-column .inner {
        position: relative;
        padding: 30px 30px 25px;
    }

    .product-style-two .content-column h3 {
        font-size: 20px;
        font-weight: 400;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-family: 'Roboto Slab', serif;
        line-height: 1.4em;
        margin-bottom: 5px;
    }

    .product-style-two .content-column .price {
        font-size: 18px;
        font-weight: 700;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        line-height: 1.4em;
        margin-bottom: 15px;
    }

    .product-style-two .content-column .text {
        font-size: 14px;
        font-weight: 400;
        line-height: 1.8em;
        margin-bottom: 20px;
    }

    .products-section-two .more-btn-outer {
        padding-top: 40px;
    }

    /***

====================================================================
	Gallery Section Two
====================================================================

***/

    .gallery-section-two {
        position: relative;
        padding: 120px 0px;
    }

    .gallery-section-two.fullwidth-gallery {
        position: relative;
        padding: 80px 0px;
        background: #f8f8f8;
    }

    .gallery-section.gallery-page {
        padding: 120px 0px;
    }

    .gallery-section.fullwidth-gallery-two {
        overflow: hidden;
        padding-bottom: 110px;
    }

    .fullwidth-gallery-two .images-outer {
        margin: 0px -5px;
    }

    .masonry-gallery .images-container {
        margin: 0px -11px;
    }

    .default-portfolio-item {
        position: relative;
        margin-bottom: 30px;
    }

    .default-portfolio-item.mix {
        display: none;
    }

    .fullwidth-gallery .default-portfolio-item {
        padding: 0px;
        margin: 0px;
    }

    .fullwidth-gallery-two .default-portfolio-item {
        margin-bottom: 10px;
        padding: 0px 5px;
        float: left;
        width: 20%;
    }

    .masonry-gallery .default-portfolio-item {
        margin-bottom: 20px;
        padding: 0px 9px;
    }

    .default-portfolio-item .inner-box {
        position: relative;
        display: block;
        text-align: center;
        overflow: hidden;
    }

    .default-portfolio-item .image-box img {
        display: block;
        width: 100%;
    }

    .default-portfolio-item .overlay-box {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        border: 10px solid transparent;
        opacity: 0;
        -webkit-transition: all 700ms ease;
        -ms-transition: all 700ms ease;
        -o-transition: all 700ms ease;
        -moz-transition: all 700ms ease;
        transition: all 700ms ease;
        -webkit-transform: scale(0.5, 0.5) rotate(-90deg);
        -ms-transform: scale(0.5, 0.5) rotate(-90deg);
        -o-transform: scale(0.5, 0.5) rotate(-90deg);
        -moz-transform: scale(0.5, 0.5) rotate(-90deg);
        transform: scale(0.5, 0.5) rotate(-90deg);
    }

    .default-portfolio-item:hover .overlay-box {
        opacity: 1;
        -webkit-transform: scale(1, 1) rotate(0deg);
        -ms-transform: scale(1, 1) rotate(0deg);
        -o-transform: scale(1, 1) rotate(0deg);
        -moz-transform: scale(1, 1) rotate(0deg);
        transform: scale(1, 1) rotate(0deg);
    }

    .default-portfolio-item .overlay-box .overlay-inner {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        display: table;
        vertical-align: middle;
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}}, 0.90);
    }

    .default-portfolio-item .overlay-box .overlay-content {
        position: relative;
        display: table-cell;
        vertical-align: middle;
    }

    .default-portfolio-item .overlay-box .option-btn {
        position: relative;
        display: inline-block;
        width: 42px;
        height: 42px;
        line-height: 38px;
        text-align: center;
        font-size: 14px;
        color: #aaaaaa;
        border: 2px solid #aaaaaa;
        margin: 0px 5px;
    }

    .default-portfolio-item .overlay-box .option-btn:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        border-color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .gallery-section-two .more-btn-outer {
        padding-top: 50px;
    }

    /***

====================================================================
	News Section
====================================================================

***/

    .news-section {
        position: relative;
        padding: 120px 0px 70px;
    }

    .news-style-one {
        position: relative;
        margin-bottom: 50px;
    }

    .news-style-one .inner-box {
        position: relative;
        display: block;
    }

    .news-style-one .image-box {
        position: relative;
        display: block;
    }

    .news-style-one .image-box img {
        position: relative;
        display: block;
        width: 100%;
    }

    .news-style-one .lower-content {
        position: relative;
        padding-top: 20px;
    }

    .news-style-one .lower-content h3 {
        font-size: 16px;
        font-family: 'Roboto Slab', serif;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 700;
        margin-bottom: 10px;
    }

    .news-style-one .lower-content h4 {
        font-size: 14px;
        font-family: 'Roboto Slab', serif;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 700;
        margin-bottom: 10px;
    }

    .news-style-one .lower-content h3 a {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .news-style-one .lower-content h3 a:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .news-style-one .lower-content .text {
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 20px;
        line-height: 1.9em;
    }

    .news-style-one .lower-content .more-link {
        position: relative;
        float: right;
    }

    .news-style-one .lower-content .more-link a {
        line-height: 24px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-size: 14px;
    }

    .news-style-one .post-tags {
        position: relative;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-size: 14px;
        padding: 20px 0px 0px;
        border-top: 1px solid #f0f0f0;
    }

    .news-style-one .post-tags a {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-size: 13px;
    }

    .news-style-one .lower-content .post-meta {
        position: relative;
        float: left;
    }

    .news-style-one .lower-content .post-meta li {
        position: relative;
        float: left;
        font-size: 14px;
        line-height: 24px;
        margin-right: 30px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .news-style-one .lower-content .post-meta li:after {
        content: '';
        position: absolute;
        right: -15px;
        top: 50%;
        margin-top: -6px;
        height: 12px;
        border-right: 1px solid rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .news-style-one .lower-content .post-meta li:last-child:after {
        display: none;
    }

    .news-style-one .lower-content .post-meta li a {
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .news-style-one .lower-content .post-meta li .fa {
        padding-right: 5px;
    }

    /***

====================================================================
	Call To Action One
====================================================================

***/

    .call-to-action-one {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        text-align: center;
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
        padding: 80px 0px;
        z-index: 1;
    }

    .call-to-action-one:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.94);
    }

    .call-to-action-one .content-box {
        position: relative;
        max-width: 450px;
        margin: 0 auto;
        z-index: 1;
    }

    .call-to-action-one .content-box .sub-title {
        font-size: 12px;
        text-transform: uppercase;
    }

    .call-to-action-one .content-box .phone-number {
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1.4em;
        margin: 10px 0px;
    }

    .call-to-action-one .content-box .text {
        font-size: 14px;
        line-height: 1.8em;
    }

    .call-to-action-one .floated-image-left {
        position: absolute;
        left: 50px;
        bottom: 0px;
        max-width: 100%;
    }

    .call-to-action-one .floated-image-right {
        position: absolute;
        right: 0px;
        bottom: -30px;
        max-width: 100%;
    }

    /***

====================================================================
	Welcome Section
====================================================================

***/

    .welcome-section {
        position: relative;
        background: #f8f8f8;
        padding: 110px 0px 70px;
    }

    .featured-block-one {
        position: relative;
        margin-bottom: 40px;
        text-align: center;
    }

    .featured-block-one .inner-box {
        position: relative;
        display: block;
        padding: 0px 5px;
        max-width: 480px;
        margin: 0 auto;
    }

    .featured-block-one .image {
        display: block;
        margin-bottom: 10px;
    }

    .featured-block-one .image img {
        display: inline-block;
        max-width: 100%;
        height: auto;
    }

    .featured-block-one h3 {
        font-size: 18px;
        font-weight: 400;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        line-height: 1.4em;
        font-family: 'Roboto Slab', serif;
        margin-bottom: 10px;
    }

    .featured-block-one .text {
        font-size: 14px;
        line-height: 1.8em;
        margin-bottom: 10px;
    }

    .featured-block-one .read-more {
        font-size: 14px;
        display: inline-block;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .featured-block-one .read-more:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    /***

====================================================================
	Gallery Section Three
====================================================================

***/

    .gallery-section-three {
        position: relative;
        padding: 120px 0px 90px;
    }

    /***

====================================================================
	Call To Action Two
====================================================================

***/

    .call-to-action-two {
        position: relative;
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
        padding: 0px 0px;
    }

    .call-to-action-two:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba(244, 236, 222, 0.95);
    }

    .call-to-action-two .auto-container {
        position: relative;
        z-index: 1;
    }

    .call-to-action-two .image-box {
        position: relative;
        text-align: center;
        margin: -20px 0px -50px;
    }

    .call-to-action-two .image-box img {
        display: inline-block;
        max-width: 100%;
    }

    .call-to-action-two .left {
        position: relative;
        display: inline-block;
        padding-top: 120px;
        text-align: right;
    }

    .call-to-action-two .right {
        position: relative;
        display: inline-block;
        padding-top: 120px;
        text-align: left;
    }

    .call-to-action-two h2 {
        font-size: 52px;
        line-height: 1.2em;
    }

    .call-to-action-two h3 {
        font-size: 28px;
        line-height: 1.4em;
    }

    .call-to-action-two .left h2,
    .call-to-action-two .right h3 {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .call-to-action-two .left h3,
    .call-to-action-two .right h2 {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    /***

====================================================================
	Featured Food Items
====================================================================

***/

    .featured-food-items {
        position: relative;
        padding: 120px 0px 0px;
    }

    .featured-item-row {
        position: relative;
    }

    .featured-item-row .featured-column {
        position: relative;
        margin-bottom: 120px;
    }

    .featured-item-row .featured-column.left-aligned {
        float: left;
    }

    .featured-item-row .featured-column.right-aligned {
        float: right;
    }

    .featured-item-row .featured-column .inner-box {
        position: relative;
        display: block;
        padding: 60px 50px 50px;
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
    }

    .featured-item-row .featured-column .inner-box:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.95);
    }

    .featured-item-row .featured-column.green-theme .inner-box:before {
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.95);
    }

    .featured-item-row .featured-column.orange-theme .inner-box:before {
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}}, 0.95);
    }

    .featured-item-row .featured-column .inner-box .content-box {
        position: relative;
        display: block;
        padding: 70px 50px 180px;
        border: 4px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.50);
        border-top: none;
        z-index: 0;
    }

    .featured-item-row .featured-column .inner-box .content-box:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100px;
        border-bottom: 4px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.50);
    }

    .featured-item-row .featured-column .inner-box .content-box:after {
        content: '';
        position: absolute;
        right: 0px;
        top: 0px;
        width: 100px;
        border-bottom: 4px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.50);
    }

    .featured-item-row .featured-column.green-theme .inner-box .content-box,
    .featured-item-row .featured-column.green-theme .inner-box .content-box:before,
    .featured-item-row .featured-column.green-theme .inner-box .content-box:after {
        border-color: #7ce6bb;
    }

    .featured-item-row .featured-column.orange-theme .inner-box .content-box,
    .featured-item-row .featured-column.orange-theme .inner-box .content-box:before,
    .featured-item-row .featured-column.orange-theme .inner-box .content-box:after {
        border-color: #fecb92;
    }

    .featured-item-row .featured-column .inner-box .content-box .upper-title {
        position: absolute;
        left: 0px;
        top: -20px;
        width: 100%;
        line-height: 40px;
        font-size: 24px;
        font-weight: 700;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        text-align: center;
        text-transform: capitalize;
    }

    .featured-item-row .featured-column .inner-box .content-box .text-content {
        position: relative;
        margin-left: 50px;
        z-index: 10;
    }

    .featured-item-row .featured-column .inner-box .content-box .sub-title {
        font-size: 16px;
        color: #fefefe;
        line-height: 1.4em;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .featured-item-row .featured-column .inner-box .content-box h3 {
        font-size: 42px;
        color: #3b6151;
        line-height: 1.4em;
        margin-bottom: 10px;
    }

    .featured-item-row .featured-column .inner-box .content-box .theme-btn {
        z-index: 5;
    }

    .featured-item-row .featured-column .bottom-image {
        position: absolute;
        left: -50px;
        right: -50px;
        bottom: -50px;
    }

    .featured-item-row .featured-column.left-aligned .bottom-image {
        text-align: left;
    }

    .featured-item-row .featured-column.right-aligned .bottom-image {
        text-align: right;
    }

    .featured-item-row .featured-column .bottom-image img {
        position: relative;
        max-width: 100%;
        display: inline-block;
        z-index: 1;
    }

    .featured-item-row .products {
        padding-top: 75px;
    }

    .featured-item-row .products .default-food-item {
        margin-bottom: 50px;
    }

    .no-padding-top {
        padding-top: 0px;
    }

    /***

====================================================================
	Page Title Style
====================================================================

***/

    .page-title {
        position: relative;
        padding: 100px 0px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        text-align: center;
    }

    .page-title:before {
        content: '';
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        background: rgba(27, 26, 27, 0.70);
    }

    .page-title .auto-container {
        position: relative;
        z-index: 1;
    }

    .page-title h1 {
        position: relative;
        font-size: 36px;
        font-weight: 700;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        line-height: 1.4em;
        text-transform: capitalize;
        font-family: 'Roboto Slab', serif;
    }


    /***

====================================================================
	Styled Pagination
====================================================================

***/

    .styled-pagination {
        position: relative;
    }

    .gallery-page .styled-pagination {
        padding-top: 50px;
    }

    .sidebar-page-container .styled-pagination {
        padding-top: 20px;
    }

    .shop-section .styled-pagination {
        padding-top: 40px;
    }

    .styled-pagination li {
        position: relative;
        display: inline-block;
        margin: 0px 7px 7px 0px;
    }

    .styled-pagination li a {
        position: relative;
        display: block;
        line-height: 20px;
        padding: 10px 5px;
        font-size: 14px;
        text-transform: capitalize;
        min-width: 42px;
        border: 1px solid #e0e0e0;
        background: none;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 500;
        text-align: center;
        border-radius: 21px;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
    }

    .styled-pagination li a.next {
        padding: 10px 40px;
        letter-spacing: 1px;
    }

    .styled-pagination li a:hover,
    .styled-pagination li a.active {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    /***

====================================================================
	Sidebar
====================================================================

***/

    .sidebar-page-container {
        position: relative;
        padding: 120px 0px 90px;
    }

    .sidebar-page-container .content-side {
        margin-bottom: 30px;
        padding-right: 55px;
    }

    .sidebar-page-container .sidebar {
        margin-left: -30px;
        margin-bottom: 30px;
    }

    .sidebar-title {
        position: relative;
        margin-bottom: 20px;
    }

    .sidebar-title h3 {
        position: relative;
        font-size: 30px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 400;
        line-height: 1.4em;
        text-transform: capitalize;
    }

    .sidebar .sidebar-widget {
        position: relative;
        margin-bottom: 50px;
    }

    .sidebar .search-box .form-group {
        position: relative;
        margin: 0px;
    }

    .sidebar .search-box .form-group input[type="text"],
    .sidebar .search-box .form-group input[type="search"] {
        position: relative;
        line-height: 26px;
        padding: 10px 30px 10px 15px;
        border: 1px solid #f0f0f0;
        height: 48px;
        font-size: 14px;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        color: #1a1a1a;
        display: block;
        width: 100%;
        border-radius: 2px;
        transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .sidebar .search-box .form-group input:focus {
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sidebar .search-box .form-group button {
        position: absolute;
        right: 0px;
        top: 0px;
        height: 48px;
        width: 50px;
        line-height: 48px;
        text-align: center;
        display: block;
        font-size: 14px;
        color: #eeeeee;
        background: none;
        border-radius: 0px 2px 2px 0px;
    }

    .sidebar .search-box .form-group input:focus + button,
    .sidebar .search-box .form-group button:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sidebar .recent-posts .post {
        position: relative;
        min-height: 125px;
        padding-left: 110px;
        padding-bottom: 25px;
        margin-bottom: 25px;
        border-bottom: 1px solid #f0f0f0;
    }

    .sidebar .recent-posts .post:last-child {
        margin-bottom: 0px;
        border-bottom: none;
        padding-bottom: 0px;
        min-height: 100px;
    }

    .sidebar .recent-posts .post .post-thumb {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100px;
        height: 100px;
    }

    .sidebar .recent-posts .post .post-thumb img {
        display: block;
        width: 100%;
    }

    .sidebar .recent-posts .post .post-thumb .overlay-link {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba(94, 199, 56, 0.90);
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        opacity: 0;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .sidebar .recent-posts .post:hover .post-thumb .overlay-link {
        opacity: 1;
    }

    .sidebar .recent-posts .post .post-thumb .overlay-link span {
        position: absolute;
        left: 50%;
        top: 50%;
        text-align: center;
        width: 30px;
        margin-left: -15px;
        margin-top: -15px;
        line-height: 30px;
        font-size: 18px;
    }

    .sidebar .recent-posts .post .post-thumb img {
        display: block;
        width: 100%;
    }

    .sidebar .recent-posts .post .desc-text {
        position: relative;
        font-size: 14px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        line-height: 1.4em;
        padding: 10px 0px 5px 0;
    }

    .sidebar .recent-posts .post .desc-text a {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .sidebar .recent-posts .post .time {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-size: 13px;
        line-height: 24px;
    }

    .sidebar .popular-tags a {
        position: relative;
        display: inline-block;
        line-height: 24px;
        padding: 4px 15px;
        margin: 0px 2px 5px 0px;
        background: #f9f9f9;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        font-size: 12px;
        font-weight: 400;
        text-transform: capitalize;
        text-align: center;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .sidebar .popular-tags a:hover {
        background-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .sidebar .list {
        position: relative;
    }

    .sidebar .list li {
        position: relative;
        margin-bottom: 0px;
        border-bottom: 1px solid #f0f0f0;
    }

    .sidebar .list li:last-child {
        border: none;
    }

    .sidebar .list li a {
        position: relative;
        display: block;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        padding: 14px 0px;
    }

    .sidebar .list li.current > a {
        padding-left: 25px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sidebar .list li a:before {
        content: "\f178";
        font-family: 'FontAwesome';
        position: absolute;
        left: 0px;
        line-height: 24px;
        top: 15px;
        font-size: 14px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        opacity: 0;
        visibility: hidden;
    }

    .sidebar .list li.current > a:before {
        opacity: 1;
        visibility: visible;
    }

    .sidebar .list li a.pull-right {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-size: 17px;
    }

    .sidebar .list li:last-child a {
        padding-bottom: 0px;
    }

    .sidebar .list li a:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sidebar .list-three {
        position: relative;
    }

    .sidebar .list-three li {
        position: relative;
        border-bottom: 1px solid #f0f0f0;
    }

    .sidebar .list-three li a {
        position: relative;
        display: block;
        color: #9e9e9e;
        font-size: 15px;
        font-weight: 400;
        line-height: 24px;
        padding: 15px 0px 15px 25px;
    }

    .sidebar .list-three li:first-child a {
        padding-top: 0px;
    }

    .sidebar .list-three li a:before {
        font-family: 'FontAwesome';
        content: '\f105';
        position: absolute;
        left: 0px;
        top: 14px;
        display: block;
        font-size: 18px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        line-height: 24px;
    }

    .sidebar .list-three li:first-child a:before {
        top: 0px;
    }

    .sidebar .list-three li a:hover {
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .sidebar .text-widget {
        position: relative;
        color: #9e9e9e;
    }

    .sidebar .text-widget .text p {
        margin-bottom: 15px;
    }

    .sidebar .text-widget .text p:last-child {
        margin-bottom: 0px;
    }

    .post-details .sidebar-title {
        margin-bottom: 40px;
    }

    .post-details .post-content p {
        line-height: 1.8em;
        margin-bottom: 20px;
    }

    .post-details .post-content blockquote {
        position: relative;
        padding: 15px 20px;
        border-left: 5px solid rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        font-family: 'Grand Hotel', cursive;
        background: none;
        font-size: 24px;
        line-height: 1.3em;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 20px;
    }

    .post-details .two-col-images .row {
        margin: 0px -5px;
    }

    .post-details .two-col-images .image-column {
        padding: 0px 5px;
        margin-bottom: 25px;
    }

    .post-details .two-col-images img {
        display: block;
        width: 100%;
    }


    /***

====================================================================
	Comments Area
====================================================================

 ***/

    .post-details .comments-area {
        position: relative;
        margin-bottom: 60px;
    }

    .post-details .comments-area .comment-box {
        position: relative;
    }

    .post-details .comments-area .comment {
        position: relative;
        padding: 0px;
        margin-bottom: 30px;
    }

    .post-details .comments-area .reply-comment {
        margin-left: 100px;
    }

    .post-details .comments-area .comment .comment-inner {
        position: relative;
        padding-left: 130px;
    }

    .post-details .comments-area .comment .comment-content {
        position: relative;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 25px;
    }

    .post-details .comments-area .comment .author-thumb {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100px;
        height: 100px;
    }

    .post-details .comments-area .comment .author-thumb img {
        width: 100%;
        display: block;
    }

    .post-details .comments-area .comment .comment-header {
        position: relative;
        font-size: 13px;
        margin-bottom: 10px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
    }

    .post-details .comments-area .comment .comment-header strong {
        color: #4e4e4e;
        font-size: 16px;
        font-weight: 700;
        padding-right: 30px;
    }

    .post-details .comments-area .comment .text {
        line-height: 1.8em;
        font-size: 14px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        margin-bottom: 10px;
    }

    .post-details .comments-area .comment .reply-btn {
        position: relative;
        font-size: 14px;
        color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
        text-transform: capitalize;
    }

    .post-details .comments-area .comment .reply-btn:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    /***

====================================================================
	Default Form Style
====================================================================

***/

    .default-form {
        position: relative;
    }

    .default-form .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .default-form .form-group .field-label {
        display: block;
        line-height: 24px;
        text-transform: capitalize;
        margin-bottom: 10px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        font-weight: 400;
        font-size: 14px;
    }

    .default-form .form-group .field-label sup {
        color: #ff0000;
        font-size: 14px;
    }

    .default-form input[type="text"],
    .default-form input[type="email"],
    .default-form input[type="password"],
    .default-form select,
    .default-form textarea {
        display: block;
        width: 100%;
        line-height: 24px;
        height: 48px;
        font-size: 14px;
        border: 1px solid #f0f0f0;
        padding: 11px 20px;
        background-color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        color: #010101;
        border-radius: 0px;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .default-form select {
        cursor: pointer;
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}}) url(../images/icons/icon-select.png) right center no-repeat;
    }

    .default-form textarea {
        height: 150px;
        resize: none;
    }

    .default-form select option {
        text-indent: 15px;
    }

    .default-form input:focus,
    .default-form select:focus,
    .default-form textarea:focus {
        border-color: #ffbf00 !important;
    }

    .default-form input.error,
    .default-form select.error,
    .default-form textarea.error {
        border-color: #ff0000 !important;
    }

    .default-form label.error {
        display: block;
        line-height: 24px;
        padding: 5px 0px 0px;
        margin: 0px;
        text-transform: capitalize;
        font-size: 11px;
        color: #ff0000;
        font-weight: 500;
    }

    .default-form .check-boxes {
        position: relative;
    }

    .default-form .check-boxes .default-label {
        position: relative;
        display: inline-block;
        line-height: 30px;
        margin-right: 20px;
    }

    .default-form .check-boxes .checkbox {
        position: relative;
        display: inline-block;
        margin-right: 20px;
        line-height: 24px;
    }

    .default-form .check-boxes .checkbox label {
        position: relative;
        padding: 0px;
        padding-left: 20px;
        line-height: 24px;
        font-weight: 400;
        color: #999999;
        cursor: pointer;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .default-form .check-boxes .checkbox label:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 50%;
        margin-top: -4px;
        width: 8px;
        height: 8px;
        border: 1px solid #999999;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .default-form .check-boxes .checkbox input {
        opacity: 0;
        visibility: hidden;
    }

    .default-form .check-boxes .checkbox input:checked + label {
        color: #010101;
    }

    .default-form .check-boxes .checkbox input:checked + label:before {
        border-color: #010101;
        background: #010101;
    }

    .post-details .comment-form .form-group {
        margin-bottom: 20px;
    }

    .post-details .comment-form .btn-style-one {
        display: block;
    }

    .post-details .comment-form .form-group input:focus,
    .post-details .comment-form .form-group select:focus,
    .post-details .comment-form .form-group textarea:focus {
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}}) !important;
    }

    /***

====================================================================
	Contact Section
====================================================================

***/

    .contact-section {
        position: relative;
        padding: 120px 0px 100px;
    }

    .contact-section .contact-form {
        max-width: 650px;
        margin: 0 auto;
    }

    .contact-section .contact-form .form-group {
        margin-bottom: 15px;
    }

    .contact-section .contact-form .form-group textarea {
        height: 180px;
    }

    .contact-section .contact-form button {
        padding: 10px 25px;
        border-radius: 25px;
        margin-top: 20px;
    }

    /***

====================================================================
	Info Section
====================================================================

***/

    .info-section {
        position: relative;
        padding: 0px 0px;
        z-index: 5;
    }

    .info-section .info-column {
        position: relative;
        margin-bottom: 30px;
    }

    .info-section .info-column .column-header {
        padding: 20px 20px;
        text-align: center;
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .info-section .info-column .column-header h3 {
        line-height: 40px;
        font-size: 30px;
    }

    .info-section .info-column .info-box {
        position: relative;
        text-align: center;
        display: table;
        width: 100%;
        height: 230px;
        word-break: break-all;
        padding: 45px 30px 20px;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        transition: all 500ms ease;
    }

    .info-section .info-column .info-box:hover {
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    .info-section .info-column .info-box .inner {
        position: relative;
        display: table-cell;
        vertical-align: top;
    }

    .info-section .info-column .info-box .icon {
        position: relative;
        font-size: 36px;
        line-height: 1.2em;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 15px;
    }

    .info-section .info-column .info-box h4 {
        font-size: 14px;
        font-weight: 700;
        line-height: 1.4em;
        font-family: 'Roboto Slab', serif;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 5px;
    }

    /***

====================================================================
	Subscribe Section
====================================================================

***/

    .subscribe-section {
        position: relative;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: url({{$background_image}}) center center repeat;
        background-attachment: fixed;
        padding: 80px 0px 60px;
    }

    .subscribe-section:before {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}}, 0.96);
    }

    .subscribe-section .form-container {
        position: relative;
        max-width: 850px;
        margin: 0 auto;
    }

    .subscribe-section .form-container h5 {
        font-size: 14px;
        line-height: 1.4em;
        margin-bottom: 10px;
        letter-spacing: 1px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: 'Roboto Slab', serif;
    }

    .subscribe-section .form-container h3 {
        font-size: 32px;
        line-height: 1.2em;
        margin-bottom: 20px;
    }

    .subscribe-section .form-container .subscribe-form {
        position: relative;
        margin-bottom: 20px;
    }

    .subscribe-section .form-container .subscribe-form .form-group {
        position: relative;
        padding-right: 150px;
        padding-top: 5px;
        margin: 0px;
    }

    .subscribe-section .form-container .subscribe-form .form-group input {
        position: relative;
        display: block;
        width: 100%;
        font-size: 14px;
        height: 50px;
        line-height: 24px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: none;
        border-bottom: 2px solid rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.50);
        padding: 12px 0px;
        margin: 0px;
    }

    .subscribe-section .form-container .subscribe-form ::-webkit-input-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .subscribe-section .form-container .subscribe-form ::-moz-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .subscribe-section .form-container .subscribe-form :-ms-input-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .subscribe-section .form-container .subscribe-form input:-moz-placeholder {
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .subscribe-section .form-container .subscribe-form .form-group button {
        position: absolute;
        right: 0px;
        top: 10px;
        width: 130px;
        text-align: center;
    }

    /***

====================================================================
	Shop Section
====================================================================

***/

    .shop-section {
        position: relative;
        padding: 120px 0px 90px;
    }

    .shop-section .sec-title .desc-text {
        max-width: 650px;
    }

    .default-shop-item {
        position: relative;
        margin-bottom: 30px;
    }

    .default-shop-item .inner-box {
        position: relative;
        text-align: center;
        display: block;
        border: 1px solid #f0f0f0;
        transition: all 500ms ease;
    }

    .default-shop-item .inner-box:hover {
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.10);
    }

    .default-shop-item .image-box {
        position: relative;
        overflow: hidden;
    }

    .default-shop-item .image-box img {
        display: block;
        width: 100%;
    }

    .default-shop-item .inner-box .prod-options {
        position: absolute;
        width: 100%;
        left: 0px;
        bottom: 0px;
        padding: 25px 20px;
        transition: all 500ms ease;
    }

    .default-shop-item .inner-box:hover .prod-options {
        left: 0px;
    }

    .default-shop-item .inner-box .prod-options .option-btn {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 46px;
        font-size: 16px;
        line-height: 46px;
        text-align: center;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        background: #e4e4e4;
        margin: 0px 2px 10px;
        border-radius: 0px;
        transition: all 300ms ease;
    }

    .default-shop-item .inner-box .prod-options .option-btn:hover {
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .default-shop-item .inner-box .add-cart-btn {
        line-height: 24px;
        padding: 12px 28px;
        text-align: center;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 700;
        background: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        display: inline-block;
    }

    .default-shop-item .inner-box .add-cart-btn .fa {
        padding-left: 7px;
        font-weight: normal;
    }

    .default-shop-item .inner-box .add-cart-btn:hover {
        background: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .default-shop-item .overlay-box {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}}, 0.80);
        visibility: hidden;
        opacity: 0;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .default-shop-item:hover .overlay-box {
        opacity: 1;
        visibility: visible;
    }

    .default-shop-item .lower-content {
        position: relative;
        padding: 20px 20px 30px;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .default-shop-item:hover .lower-content {
        opacity: 0;
        visibility: hidden;
    }

    .default-shop-item .lower-content h3 {
        font-size: 18px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-family: 'Roboto Slab', serif;
        margin-bottom: 10px;
    }

    .default-shop-item .lower-content h3 a {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .default-shop-item .lower-content h3 a:hover {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .default-shop-item .lower-content .price {
        font-weight: 700;
        font-size: 16px;
    }

    .shop-section .items-sorting {
        position: relative;
        margin-bottom: 30px;
    }

    .shop-section .items-sorting .results-column,
    .shop-section .items-sorting .select-column {
        margin-bottom: 10px;
    }

    .shop-section .items-sorting .results-column .text {
        font-size: 14px;
        font-weight: 600;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        line-height: 24px;
        padding: 10px 0px;
    }

    .shop-section .items-sorting .form-group {
        margin-bottom: 0px;
    }

    .shop-section .items-sorting select {
        position: relative;
        display: block;
        width: 100%;
        line-height: 24px;
        padding: 9px 15px 9px;
        height: 44px;
        font-size: 14px;
        border: 1px solid #f0f0f0;
        cursor: pointer;
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        background: url(../images/icons/icon-select.png) right center no-repeat;
        color: #999999;
        transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
    }

    .shop-section .items-sorting select option {
        text-indent: 15px;
    }

    .shop-section .items-sorting select:focus {
        border-color: rgba({{$choice_color[0]}},{{$choice_color[1]}},{{$choice_color[2]}},{{$choice_color[3]}});
    }

    /***

====================================================================
	Products Details style
====================================================================

***/

    .shop-single {
        position: relative;
    }

    .shop-single .product-details {
        position: relative;
        padding: 120px 0px 70px;
    }

    .product-details .basic-details {
        position: relative;
        margin-bottom: 50px;
    }

    .product-details .image-column,
    .product-details .info-column {
        margin-bottom: 20px;
    }

    .product-details .image-column .image-box {
        border: 1px solid #e0e0e0;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .product-details .info-column {
        position: relative;
    }

    .product-details .image-column .image-box img {
        position: relative;
        display: block;
        width: 100%;
    }

    .product-details .basic-details .details-header {
        position: relative;
        padding-bottom: 20px;
    }

    .product-details .basic-details .details-header h4 {
        font-size: 20px;
        font-weight: 700;
        margin: 0px 0px;
        font-family: 'Roboto Slab', serif;
        line-height: 1.4em;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 15px;
    }

    .product-details .basic-details .details-header h4 a {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .product-details .basic-details .details-header .rating {
        font-size: 13px;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        margin-bottom: 4px;
    }

    .product-details .basic-details .details-header .rating .fa {
        display: inline-block;
        margin-right: 2px;
    }

    .product-details .basic-details .details-header .rating .txt {
        font-size: 13px;
        padding-left: 15px;
        font-weight: 700;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        text-transform: capitalize;
    }

    .product-details .basic-details .details-header .item-price {
        font-size: 20px;
        font-weight: 400;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        line-height: 30px;
        letter-spacing: 1px;
    }

    .product-details .basic-details .details-header .item-price .old-price {
        font-size: 18px;
        color: #cccccc;
        text-decoration: line-through;
        padding-right: 10px;
        line-height: 30px;
    }

    .product-details .basic-details .text {
        margin-bottom: 25px;
        font-size: 14px;
        line-height: 1.9em;
        padding: 25px 0px;
        border-bottom: 1px solid #f0f0f0;
        border-top: 1px solid #f0f0f0;
    }

    .product-details .basic-details .text p {
        margin-bottom: 15px;
    }

    .product-details .basic-details .item-categories {
        margin: 0px;
        font-size: 14px;
    }

    .product-details .basic-details .item-categories a {
        position: relative;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        text-transform: capitalize;
    }

    .product-details .basic-details .availablity {
        position: relative;
        line-height: 1.9em;
        margin-bottom: 25px;
        font-size: 14px;
        font-weight: 400;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .product-details .basic-details .availablity strong {
        font-size: 14px;
        letter-spacing: 2px;
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        font-weight: 600;
        text-transform: uppercase;
    }

    .quantity-spinner {
        position: relative;
        display: block;
        width: 150px;
    }

    .product-details .quantity-spinner {
        margin-bottom: 25px;
        float: left;
        margin-right: 20px;
    }

    .quantity-spinner input {
        position: relative;
        display: block;
        width: 45px;
        line-height: 24px;
        padding: 9px 10px;
        margin: 0px 53px;
        font-weight: 500;
        font-size: 13px;
        height: 42px;
        border: 1px solid #e0e0e0;
        text-align: center;
        border-radius: 2px;
    }

    .quantity-spinner .minus {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 45px;
        height: 42px;
        line-height: 22px;
        padding: 10px 10px;
        text-align: center;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        font-weight: 400;
        color: #555555;
        font-size: 14px;
        border: 1px solid #e0e0e0;
        z-index: 1;
    }

    .quantity-spinner .plus {
        position: absolute;
        right: 0px;
        top: 0px;
        width: 45px;
        height: 42px;
        line-height: 22px;
        padding: 10px 10px;
        text-align: center;
        font-weight: 400;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        color: #555555;
        font-size: 14px;
        border: 1px solid #e0e0e0;
        z-index: 1;
    }

    .product-details .basic-details .item-quantity .field-label {
        float: left;
        font-weight: 700;
        font-size: 14px;
        line-height: 32px;
        display: inline-block;
        padding-right: 20px;
    }

    .product-details .basic-details .theme-btn {
        padding: 8px 30px;
        border-radius: 2px;
        margin-right: 15px;
        margin-bottom: 20px;
    }

    .product-details .basic-details .theme-btn .icon {
        font-size: 14px;
        padding-left: 5px;
        font-weight: normal;
    }

    /***

====================================================================
	Product Tabs Style
====================================================================

***/


    .product-info-tabs {
        position: relative;
        margin-bottom: 30px;
    }

    .prod-tabs {
        position: relative;
    }

    .prod-tabs .tab-btns {
        position: relative;
        top: 1px;
        z-index: 1;
    }

    .prod-tabs .tab-btns .tab-btn {
        position: relative;
        display: block;
        font-size: 14px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        text-transform: capitalize;
        font-weight: 500;
        padding: 10px 60px 10px 40px;
        line-height: 24px;
        border: 1px solid #f0f0f0;
        margin-bottom: 10px;
        background: none;
        cursor: pointer;
    }

    .prod-tabs .tab-btns .tab-btn:after {
        font-family: 'FontAwesome';
        content: "\f105";
        position: absolute;
        right: 20px;
        top: 50%;
        margin-top: -11px;
        width: 10px;
        height: 24px;
        display: block;
        line-height: 24px;
        font-size: 14px;
        font-weight: normal;
    }

    .prod-tabs .tab-btns .tab-btn.active-btn {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
        border-color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .prod-tabs .tabs-container {
        position: relative;
        border: 1px solid #f0f0f0;
    }

    .prod-tabs .tabs-container .tab {
        position: relative;
        padding: 30px 30px;
        display: none;
        font-size: 14px;
    }

    .prod-tabs .tabs-container .tab.active-tab {
        display: block;
    }

    .prod-tabs .tabs-container .tab p,
    .prod-tabs .tabs-container .tab h2,
    .prod-tabs .tabs-container .tab h3,
    .prod-tabs .tabs-container .tab h4,
    .prod-tabs .tabs-container .tab h5,
    .prod-tabs .tabs-container .tab h6 {
        margin-bottom: 15px;
        font-family: 'Roboto Slab', serif;
    }

    .prod-tabs .tabs-container .tab .content p {
        font-size: 13px;
    }


    .prod-tabs .tabs-container .tab h3 {
        font-size: 18px;
        font-weight: 400;
        text-transform: capitalize;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 15px;
    }

    .prod-tabs .tabs-container .tab h4 {
        font-size: 14px;
        font-weight: 400;
        text-transform: capitalize;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 15px;
    }

    .prod-tabs .reviews-container {
        position: relative;
    }

    .prod-tabs .reviews-container .review-box {
        position: relative;
        margin-bottom: 30px;
        padding-left: 100px;
        min-height: 100px;
    }

    .prod-tabs .reviews-container .rev-thumb {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 82px;
        height: 82px;
        border: 1px solid #e0e0e0;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        border-radius: 3px;
    }

    .prod-tabs .reviews-container .rev-thumb img {
        display: block;
        width: 80px;
        height: 80px;
        border-radius: 3px;
    }

    .prod-tabs .reviews-container .rev-content {
        position: relative;
        padding: 15px;
        border: 1px solid #e0e0e0;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
    }

    .prod-tabs .reviews-container .rating {
        color: #ff9c01;
        font-size: 13px;
    }

    .prod-tabs .reviews-container .rating .fa {
        margin-right: 1px;
    }

    .prod-tabs .reviews-container .rev-info {
        font-size: 12px;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .prod-tabs .reviews-container .rev-text {
        font-size: 13px;
    }

    .prod-tabs .add-review {
        position: relative;
        margin: 30px 0px 20px;
        font-size: 14px;
    }

    .prod-tabs .add-review .rating {
        position: relative;
        padding-top: 8px;
    }

    .prod-tabs .add-review .rating .rate-box {
        position: relative;
        display: inline-block;
        margin-right: 10px;
        font-size: 14px;
        color: #555555;
    }

    .prod-tabs .add-review .rating .rate-box:hover,
    .prod-tabs .add-review .rating .rate-box:focus,
    .prod-tabs .add-review .rating .rate-box:active {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .prod-tabs .add-review label {
        position: relative;
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: 400;
        color: #303030;
    }

    .prod-tabs .add-review h3 {
        margin-bottom: 20px;
    }

    .prod-tabs .add-review .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .prod-tabs .add-review .form-group input[type="text"],
    .prod-tabs .add-review .form-group input[type="password"],
    .prod-tabs .add-review .form-group input[type="tel"],
    .prod-tabs .add-review .form-group input[type="email"],
    .prod-tabs .add-review .form-group select {
        position: relative;
        display: block;
        width: 100%;
        line-height: 22px;
        padding: 9px 15px;
        color: #222222;
        border: 1px solid #e0e0e0;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .prod-tabs .add-review .form-group textarea {
        position: relative;
        display: block;
        width: 100%;
        line-height: 22px;
        padding: 8px 15px;
        color: #222222;
        border: 1px solid #e0e0e0;
        height: 150px;
        resize: none;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .prod-tabs .add-review button {
        padding: 8px 35px;
    }

    /***

====================================================================
	Related Products
====================================================================

***/


    .related-products {
        position: relative;
        padding: 0px 0px 80px;
    }

    /***

====================================================================
	Cart Section style
====================================================================

***/

    .cart-section {
        position: relative;
        padding: 120px 0px;
    }

    .cart-outer {
        position: relative;
    }

    .checkout-page .cart-outer {
        margin-bottom: 40px;
    }

    .cart-outer .table-outer {
        position: relative;
        width: 100%;
        overflow-x: auto;
    }

    .cart-outer .cart-table {
        width: 100%;
        min-width: 900px;
    }

    .cart-table .cart-header {
        position: relative;
        width: 100%;
        text-transform: uppercase;
        font-size: 13px;
        background: #f4f5f6;
        color: #1c1c1c;
    }

    .cart-table thead tr th {
        line-height: 24px;
        padding: 13px 30px;
        font-weight: 600;
    }

    .cart-table thead tr th .fa {
        font-size: 18px;
    }

    .cart-table thead tr th.prod-column {
        text-align: left;
    }

    .cart-table tbody tr td {
        line-height: 24px;
        padding: 30px 30px;
    }

    .cart-table tbody tr .qty {
        width: 200px;
        padding-right: 80px;
    }

    .cart-table tbody tr .prod-column .column-box {
        position: relative;
        min-height: 140px;
        padding-left: 120px;
        padding-top: 30px;
        text-align: left;
    }

    .cart-table tbody tr .prod-column .column-box .prod-thumb {
        position: absolute;
        width: 100px;
        height: 140px;
        border: 1px solid #f0f0f0;
        left: 0px;
        top: 0px;
    }

    .cart-table tbody tr .prod-column .column-box .prod-thumb img {
        display: block;
        max-width: 100%;
    }

    .cart-table tbody tr .prod-column .column-box .prod-title {
        font-size: 16px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-weight: 400;
        margin-bottom: 5px;
    }

    .cart-table tbody tr .prod-column .author {
        font-size: 13px;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        margin-bottom: 0px;
    }

    .cart-table tbody tr .prod-column .rating {
        font-size: 13px;
        color: #ff9c01;
    }

    .cart-table tbody tr .prod-column .rating .fa {
        display: inline-block;
        margin-right: 2px;
    }

    .cart-table tbody tr .sub-total {
        font-weight: 500;
        color: #1c1c1c;
    }

    .cart-table tbody tr .remove-btn {
        position: relative;
        font-size: 14px;
        color: #1c1c1c;
        line-height: 30px;
        font-weight: 500;
        -webkit-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        transition: all 500ms ease;
    }

    .cart-table tbody tr .remove-btn .fa {
        position: relative;
        font-size: 14px;
        line-height: 30px;
    }

    .cart-table tbody tr .remove-btn:hover {
        color: #ec1c33;
    }

    .cart-table tbody tr {
        border-bottom: 1px solid #e9e9e9;
    }

    .cart-table tbody tr td {
        vertical-align: middle;
        color: #1c1c1c;
        font-weight: 500;
    }

    .cart-table tbody .available-info {
        position: relative;
        padding-left: 50px;
    }

    .cart-table tbody .available-info .icon {
        position: absolute;
        left: 0px;
        top: 5px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        font-size: 18px;
        color: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        background: #223555;
        border-radius: 50%;
    }

    .cart-section .cart-options {
        position: relative;
        padding: 40px 0px 25px;
        margin-bottom: 50px;
        border-bottom: 1px solid #e0e0e0;
    }

    .cart-section .apply-coupon {
        position: relative;
    }

    .cart-section .apply-coupon .form-group {
        position: relative;
        float: left;
        margin-right: 10px;
    }

    .cart-section .apply-coupon .form-group input[type="text"] {
        display: block;
        line-height: 24px;
        padding: 9px 10px;
        border: 1px solid #e0e0e0;
        border-radius: 3px;
        width: 230px;
        background: none;
    }

    .cart-section .theme-btn {
        padding: 8px 25px;
        border-radius: 2px;
    }

    .cart-section h3 {
        font-size: 15px;
        font-weight: 700;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        font-family: 'Roboto Slab', serif;
        text-transform: capitalize;
        margin-bottom: 15px;
    }

    .cart-section .totals-table {
        position: relative;
        margin-bottom: 20px;
        font-size: 14px;
        border: 1px solid #f0f0f0;
        border-radius: 2px;
    }

    .cart-section .totals-table li {
        line-height: 24px;
        padding: 12px 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .cart-section .totals-table li:last-child {
        border-bottom: none;
        margin-bottom: 0px;
    }

    .cart-section .totals-table .col {
        position: relative;
        display: block;
        float: left;
        line-height: 24px;
        width: 50%;
        text-transform: capitalize;
    }

    .cart-section .totals-table li .col:last-child {
        text-align: right;
    }

    .cart-section .totals-table .total {
        color: #111111;
        font-weight: 700;
    }

    .cart-section .proceed-btn {
        display: block;
        width: 100%;
    }


    /***

====================================================================
	Checkout Style
====================================================================

***/

    .checkout-page {
        position: relative;
        padding: 120px 0px 80px;
    }

    .checkout-page .default-links {
        position: relative;
        margin-bottom: 30px;
    }

    .checkout-page .default-links li {
        margin-bottom: 15px;
        line-height: 24px;
        padding: 15px 20px;
        background: #f9f9f9;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        font-size: 13px;
        border-top: 1px solid rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .checkout-page .default-links li a {
        color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .checkout-page .billing-details {
        position: relative;
        margin-bottom: 20px;
    }

    .checkout-page .check-box {
        line-height: 24px;
        font-size: 14px;
        font-weight: normal;
        padding-top: 5px;
    }

    .checkout-page .check-box label {
        position: relative;
        top: -1px;
        font-weight: normal;
        padding: 0px;
        font-size: 13px;
        cursor: pointer;
    }


    .checkout-page .place-order {
        position: relative;
        padding: 0px;
    }

    .checkout-page .payment-options {
        position: relative;
        margin-bottom: 30px;
    }

    .checkout-page .payment-options li {
        position: relative;
        margin-bottom: 15px;
    }

    .checkout-page .payment-options li .radio-option {
        position: relative;
        padding-left: 30px;
    }

    .checkout-page .payment-options li .radio-option label {
        position: relative;
        display: inline-block;
        font-weight: 500 !important;
        text-transform: capitalize;
        letter-spacing: 1px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        font-size: 14px;
        cursor: pointer;
    }

    .checkout-page .payment-options li .radio-option label strong {
        font-weight: 400;
    }

    .checkout-page .payment-options li .radio-option input[type="radio"] {
        position: absolute;
        left: 0px;
        top: 3px;
    }

    .checkout-page .payment-options li .radio-option label .small-text {
        position: relative;
        margin-top: 15px;
        margin-left: -30px;
        padding: 10px 15px;
        letter-spacing: 0px;
        text-transform: none;
        font-weight: normal;
        font-size: 12px;
        color: rgba({{$secondary_color[0]}},{{$secondary_color[1]}},{{$secondary_color[2]}},{{$secondary_color[3]}});
        line-height: 24px;
        background: #f4f5f6;
        display: none;
    }

    .checkout-page .payment-options li .radio-option input[type="radio"]:checked + label .small-text {
        display: block;
    }

    .checkout-page .payment-options li .radio-option label .small-text:before {
        content: '';
        position: absolute;
        left: 40px;
        top: -15px;
        border: 8px solid transparent;
        border-bottom: 8px solid #f4f5f6;
    }

    .checkout-page .payment-options li .radio-option label img {
        position: relative;
        margin-top: -5px;
        display: inline-block;
        max-width: 100%;
        padding-left: 30px;
    }

    .checkout-page .place-order .theme-btn {
        padding: 8px 30px;
    }

    .default-title {
        position: relative;
        margin-bottom: 40px;
    }

    .default-title h2 {
        font-size: 20px;
        font-weight: 400;
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
        text-transform: capitalize;
        font-family: 'Roboto Slab', serif;
    }

    .shop-form {
        position: relative;
    }

    .shop-form .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .billing-details .shop-form .form-group {
        margin-bottom: 20px;
    }

    .shop-form .form-group .field-label {
        display: block;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 10px;
        text-transform: capitalize;
        color: #5a5a5a;
    }

    .shop-form .form-group .field-label sup {
        color: #ff0000;
    }

    .shop-form input[type="text"],
    .shop-form input[type="email"],
    .shop-form input[type="password"],
    .shop-form input[type="tel"],
    .shop-form input[type="number"],
    .shop-form input[type="url"],
    .shop-form select,
    .shop-form textarea {
        position: relative;
        display: block;
        width: 100%;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}});
        line-height: 24px;
        padding: 9px 15px;
        height: 44px;
        font-size: 14px;
        border: 1px solid #f0f0f0;
        border-radius: 2px;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }


    .shop-form select {
        -webkit-appearance: none;
        -ms-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        background: rgba({{$main_color[0]}},{{$main_color[1]}},{{$main_color[2]}},{{$main_color[3]}}) url(../images/icons/icon-select.png) right center no-repeat;
        cursor: pointer;
    }

    .shop-form select option {
        text-indent: 15px;
    }

    .shop-form textarea {
        resize: none;
        height: 150px;
    }

    .shop-form input:focus,
    .shop-form select:focus,
    .shop-form textarea:focus {
        border-color: rgba({{$emphasize_color[0]}},{{$emphasize_color[1]}},{{$emphasize_color[2]}},{{$emphasize_color[3]}});
    }

    .checkout-page .your-order {
        position: relative;
        margin-bottom: 40px;
    }

    .checkout-page .orders-table {
        position: relative;
        margin-bottom: 30px;
        display: table;
        width: 100%;
        vertical-align: middle;
    }

    .checkout-page .orders-table li {
        display: table-row;
        line-height: 24px;
        font-size: 14px;
        padding: 12px 15px;
    }

    .checkout-page .orders-table li img {
        display: inline-block;
        margin-right: 10px;
    }

    .checkout-page .orders-table .table-header,
    .checkout-page .orders-table .total {
        background: #f9f9f9;
    }

    .checkout-page .orders-table li:last-child {
        margin-bottom: 0px;
        border-bottom: 1px solid #e0e0e0;
    }

    .checkout-page .orders-table .col {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        line-height: 24px;
        padding: 15px 15px;
        width: 50%;
        font-weight: 500;
        text-transform: capitalize;
    }

    .checkout-page .orders-table .table-header .col,
    .checkout-page .orders-table .total .col {
        padding: 10px 15px;
        font-size: 13px;
        border: none;
    }

    .checkout-page .orders-table li .col:last-child {
        text-align: right;
    }

    .checkout-page .orders-table .total {
        color: rgba({{$title_color[0]}},{{$title_color[1]}},{{$title_color[2]}},{{$title_color[3]}});
    }

    .checkout-page .proceed-btn {
        display: block;
        width: 100%;
    }

    .your-order .coupon-code .form-group {
        position: relative;
        margin-bottom: 0px !important;
        display: table;
        width: 100%;
    }

    .your-order .coupon-code .form-group .field-group {
        display: table-cell;
        vertical-align: middle;
    }

    .your-order .coupon-code .form-group .btn-field {
        padding-left: 15px;
    }

    .your-order .coupon-code .form-group input {
        display: block;
        width: 100%;
        line-height: 24px;
        padding: 10px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 3px;
    }

    .your-order .coupon-code .form-group button {
        display: block;
        width: 100%;
    }
</style>
