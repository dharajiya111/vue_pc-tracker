{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Laravel</title>--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"--}}
{{--          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
{{--</head>--}}

{{--<body class="antialiased">--}}

{{--<div id="app"></div>--}}

{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}

{{--</html>--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /*html {*/
        /*    position: relative;*/
        /*    min-height: 100%;*/
        /*}*/

        /*body {*/
        /*    font-family: "Muli", sans-serif;*/
        /*    margin: 0;*/
        /*    background: #f2f5fa;*/
        /*    font-size: 15px;*/
        /*    font-weight: 400;*/
        /*    color: #8A98AC;*/
        /*    line-height: 1.5;*/
        /*}*/

        /*.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {*/
        /*    font-weight: 600;*/
        /*    color: #263a5b;*/
        /*}*/
        /*h4 {*/
        /*    font-size: 22px;*/
        /*}*/

        /*h5 {*/
        /*    font-size: 18px;*/
        /*}*/
        /*b {*/
        /*    font-weight: 700;*/
        /*}*/
        /*p {*/
        /*    line-height: 1.3;*/
        /*    margin-bottom: 10px;*/
        /*}*/
        /** {*/
        /*    outline: none !important;*/
        /*}*/

        /*a {*/
        /*    color: #0080ff;*/
        /*}*/
        /*.logobar {*/
        /*    padding: 15px 0;*/
        /*    margin-bottom: 15px;*/
        /*    text-align: center;*/
        /*    border-bottom: 1px solid rgba(0, 0, 0, 0.03);*/
        /*}*/
        /*.logobar .logo img {*/
        /*    width: 128px;*/
        /*}*/

        /*.leftbar {*/
        /*    width: 250px;*/
        /*    height: 100%;*/
        /*    position: fixed;*/
        /*    background: #ffffff;*/
        /*    border-right: 1px solid rgba(0, 0, 0, 0.03);*/
        /*    z-index: 9;*/
        /*    transition: all 0.3s ease;*/
        /*}*/

        /*.rightbar {*/
        /*    margin-left: 250px;*/
        /*    overflow: hidden;*/
        /*    min-height: 500px;*/
        /*    transition: all 0.3s ease;*/
        /*}*/

        /*.contentbar {*/
        /*    padding: 30px;*/
        /*    margin-bottom: 30px;*/
        /*}*/

        /*.footerbar {*/
        /*    position: absolute;*/
        /*    bottom: 0;*/
        /*    right: 0;*/
        /*    left: 250px;*/
        /*    padding: 20px 30px;*/
        /*    text-align: center;*/
        /*    background-color: #ffffff;*/
        /*    background-color: #ffffff;*/
        /*}*/
        /*.navigationbar {*/
        /*    height: calc(100vh - 100px);*/
        /*    overflow: auto;*/
        /*    -webkit-transition: 0.5s;*/
        /*    transition: 0.5s;*/
        /*}*/

        /*::-webkit-scrollbar {*/
        /*    width: 0;*/
        /*}*/

        /*::-webkit-scrollbar-track {*/
        /*    background: transparent;*/
        /*}*/

        /*::-webkit-scrollbar-thumb {*/
        /*    background: transparent;*/
        /*}*/
        /*.m-t-5 {*/
        /*    margin-top: 5px;*/
        /*}*/
        /*.m-b-30 {*/
        /*    margin-bottom: 30px;*/
        /*}*/
        /*.font-10 {*/
        /*    font-size: 10px !important;*/
        /*}*/
        /*.font-13 {*/
        /*    font-size: 13px !important;*/
        /*}*/
        /*.media .media-body {*/
        /*    word-break: break-word;*/
        /*}*/
        /*.fa {*/
        /*    display: inline-block;*/
        /*    font: normal normal normal 14px/1 FontAwesome;*/
        /*    font-size: inherit;*/
        /*    text-rendering: auto;*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    -moz-osx-font-smoothing: grayscale;*/
        /*}*/
        /*.pull-right {*/
        /*    float: right;*/
        /*}*/
        /*.fa-remove:before, .fa-close:before, .fa-times:before {*/
        /*    content: "";*/
        /*}*/
        /*.icon-user, .icon-people, .icon-user-female, .icon-user-follow, .icon-user-following, .icon-user-unfollow, .icon-login, .icon-logout, .icon-emotsmile, .icon-phone, .icon-call-end, .icon-call-in, .icon-call-out, .icon-map, .icon-location-pin, .icon-direction, .icon-directions, .icon-compass, .icon-layers, .icon-menu, .icon-list, .icon-options-vertical, .icon-options, .icon-arrow-down, .icon-arrow-left, .icon-arrow-right, .icon-arrow-up, .icon-arrow-up-circle, .icon-arrow-left-circle, .icon-arrow-right-circle, .icon-arrow-down-circle, .icon-check, .icon-clock, .icon-plus, .icon-minus, .icon-close, .icon-event, .icon-exclamation, .icon-organization, .icon-trophy, .icon-screen-smartphone, .icon-screen-desktop, .icon-plane, .icon-notebook, .icon-mustache, .icon-mouse, .icon-magnet, .icon-energy, .icon-disc, .icon-cursor, .icon-cursor-move, .icon-crop, .icon-chemistry, .icon-speedometer, .icon-shield, .icon-screen-tablet, .icon-magic-wand, .icon-hourglass, .icon-graduation, .icon-ghost, .icon-game-controller, .icon-fire, .icon-eyeglass, .icon-envelope-open, .icon-envelope-letter, .icon-bell, .icon-badge, .icon-anchor, .icon-wallet, .icon-vector, .icon-speech, .icon-puzzle, .icon-printer, .icon-present, .icon-playlist, .icon-pin, .icon-picture, .icon-handbag, .icon-globe-alt, .icon-globe, .icon-folder-alt, .icon-folder, .icon-film, .icon-feed, .icon-drop, .icon-drawer, .icon-docs, .icon-doc, .icon-diamond, .icon-cup, .icon-calculator, .icon-bubbles, .icon-briefcase, .icon-book-open, .icon-basket-loaded, .icon-basket, .icon-bag, .icon-action-undo, .icon-action-redo, .icon-wrench, .icon-umbrella, .icon-trash, .icon-tag, .icon-support, .icon-frame, .icon-size-fullscreen, .icon-size-actual, .icon-shuffle, .icon-share-alt, .icon-share, .icon-rocket, .icon-question, .icon-pie-chart, .icon-pencil, .icon-note, .icon-loop, .icon-home, .icon-grid, .icon-graph, .icon-microphone, .icon-music-tone-alt, .icon-music-tone, .icon-earphones-alt, .icon-earphones, .icon-equalizer, .icon-like, .icon-dislike, .icon-control-start, .icon-control-rewind, .icon-control-play, .icon-control-pause, .icon-control-forward, .icon-control-end, .icon-volume-1, .icon-volume-2, .icon-volume-off, .icon-calendar, .icon-bulb, .icon-chart, .icon-ban, .icon-bubble, .icon-camrecorder, .icon-camera, .icon-cloud-download, .icon-cloud-upload, .icon-envelope, .icon-eye, .icon-flag, .icon-heart, .icon-info, .icon-key, .icon-link, .icon-lock, .icon-lock-open, .icon-magnifier, .icon-magnifier-add, .icon-magnifier-remove, .icon-paper-clip, .icon-paper-plane, .icon-power, .icon-refresh, .icon-reload, .icon-settings, .icon-star, .icon-symbol-female, .icon-symbol-male, .icon-target, .icon-credit-card, .icon-paypal, .icon-social-tumblr, .icon-social-twitter, .icon-social-facebook, .icon-social-instagram, .icon-social-linkedin, .icon-social-pinterest, .icon-social-github, .icon-social-google, .icon-social-reddit, .icon-social-skype, .icon-social-dribbble, .icon-social-behance, .icon-social-foursqare, .icon-social-soundcloud, .icon-social-spotify, .icon-social-stumbleupon, .icon-social-youtube, .icon-social-dropbox, .icon-social-vkontakte, .icon-social-steam {*/
        /*    font-family: "simple-line-icons";*/
        /*    speak: none;*/
        /*    font-style: normal;*/
        /*    font-weight: normal;*/
        /*    font-variant: normal;*/
        /*    text-transform: none;*/
        /*    line-height: 1;*/
        /*    !* Better Font Rendering =========== *!*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    -moz-osx-font-smoothing: grayscale;*/
        /*}*/
        /*.icon-grid:before {*/
        /*    content: "";*/
        /*}*/
        /*.feather {*/
        /*    !* use !important to prevent issues with browser extensions that change fonts *!*/
        /*    font-family: "feather" !important;*/
        /*    speak: none;*/
        /*    font-style: normal;*/
        /*    font-weight: normal;*/
        /*    font-variant: normal;*/
        /*    text-transform: none;*/
        /*    line-height: 1;*/
        /*    !* Better Font Rendering =========== *!*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    -moz-osx-font-smoothing: grayscale;*/
        /*}*/
        /*.icon-airplay:before {*/
        /*    content: "";*/
        /*}*/
        /*.icon-bar-chart:before {*/
        /*    content: "";*/
        /*}*/
        /*.icon-chevron-right:before {*/
        /*    content: "";*/
        /*}*/
        /*.icon-clock:before {*/
        /*    content: "";*/
        /*}*/

        /*.icon-download:before {*/
        /*    content: "";*/
        /*}*/
        /*.icon-grid:before {*/
        /*    content: "";*/
        /*}*/
        /*.icon-image:before {*/
        /*    content: "";*/
        /*}*/
        /*[class^=socicon-], [class*=" socicon-"] {*/
        /*    !* use !important to prevent issues with browser extensions that change fonts *!*/
        /*    font-family: "Socicon" !important;*/
        /*    speak: none;*/
        /*    font-style: normal;*/
        /*    font-weight: normal;*/
        /*    font-variant: normal;*/
        /*    text-transform: none;*/
        /*    line-height: 1;*/
        /*    !* Better Font Rendering =========== *!*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    -moz-osx-font-smoothing: grayscale;*/
        /*}*/
        /*.vertical-menu {*/
        /*    list-style: none;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*}*/

        /*.vertical-menu > li {*/
        /*    position: relative;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*}*/

        /*.vertical-menu > li > a {*/
        /*    padding: 10px 30px;*/
        /*    display: block;*/
        /*    color: #263a5b;*/
        /*}*/

        /*.vertical-menu > li > a > i {*/
        /*    display: inline-block;*/
        /*    width: 30px;*/
        /*    font-size: 16px;*/
        /*    vertical-align: middle;*/
        /*}*/

        /*.vertical-menu > li > a > img {*/
        /*    display: inline-block;*/
        /*    width: 20px;*/
        /*    vertical-align: middle;*/
        /*    margin-right: 10px;*/
        /*    filter: invert(0.6) sepia(1) saturate(1) hue-rotate(185deg);*/
        /*}*/

        /*.vertical-menu > li > a > span {*/
        /*    vertical-align: middle;*/
        /*}*/

        /*.vertical-menu > li > a.active {*/
        /*    color: #0080ff;*/
        /*}*/

        /*.vertical-menu > li > a.active img {*/
        /*    filter: invert(0.7) sepia(1) saturate(14) hue-rotate(195deg);*/
        /*}*/
        /*.vertical-menu > li.active > a {*/
        /*    font-weight: 400;*/
        /*    background-color: transparent;*/
        /*    color: #0080ff;*/
        /*    opacity: 1;*/
        /*}*/

        /*.vertical-menu > li.active > a img {*/
        /*    filter: invert(0.7) sepia(1) saturate(14) hue-rotate(195deg);*/
        /*}*/

        /*.vertical-menu > li.active {*/
        /*    background-color: transparent;*/
        /*}*/
        /*.vertical-menu li > a > .icon-chevron-right {*/
        /*    width: auto;*/
        /*    height: auto;*/
        /*    padding: 0;*/
        /*    font-size: 14px;*/
        /*    line-height: 24px;*/
        /*    -webkit-transition: 0.3s ease-in;*/
        /*    transition: 0.3s ease-in;*/
        /*}*/
        /*.vertical-menu a {*/
        /*    color: #8A98AC;*/
        /*    text-decoration: none;*/
        /*}*/

        /*.vertical-menu .vertical-submenu {*/
        /*    display: none;*/
        /*    list-style: none;*/
        /*    padding-left: 5px;*/
        /*    padding: 5px 0 5px 5px;*/
        /*    margin: 0 1px;*/
        /*    background: transparent;*/
        /*}*/
        /*.topbar-mobile {*/
        /*    display: none;*/
        /*    background-color: #ffffff;*/
        /*    padding: 15px 25px;*/
        /*    border-bottom: 1px solid rgba(0, 0, 0, 0.03);*/
        /*}*/
        /*.topbar {*/
        /*    background-color: #ffffff;*/
        /*    padding: 15px 30px;*/
        /*    position: fixed;*/
        /*    z-index: 1;*/
        /*    left: 250px;*/
        /*    right: 0;*/
        /*    border-bottom: 1px solid rgba(0, 0, 0, 0.03);*/
        /*}*/

        /*.topbar .dropdown-toggle::after {*/
        /*    display: none;*/
        /*}*/
        /*.topbar .togglebar {*/
        /*    display: inline-block;*/
        /*    padding-top: 1px;*/
        /*}*/

        /*.topbar .togglebar li {*/
        /*    margin-right: 0;*/
        /*}*/

        /*.topbar .togglebar .menu-hamburger {*/
        /*    padding: 10px;*/
        /*    border-radius: 3px;*/
        /*}*/

        /*.topbar .togglebar .menu-hamburger img {*/
        /*    filter: invert(0.6) sepia(1) saturate(1) hue-rotate(185deg);*/
        /*    width: 20px;*/
        /*}*/

        /*.topbar .togglebar .menu-hamburger img.menu-hamburger-close {*/
        /*    display: none;*/
        /*}*/
        /*.topbar .infobar {*/
        /*    display: inline-block;*/
        /*    float: right;*/
        /*}*/

        /*.topbar .infobar > ul > li {*/
        /*    margin-left: 0;*/
        /*    margin-right: 0;*/
        /*}*/

        /*.topbar .infobar > ul > li:first-child {*/
        /*    margin-left: 0;*/
        /*}*/

        /*.topbar .infobar .infobar-icon {*/
        /*    color: #0080ff;*/
        /*    border-radius: 3px;*/
        /*    display: flex;*/
        /*    line-height: 40px;*/
        /*    width: 40px;*/
        /*    height: 40px;*/
        /*    padding: 10px;*/
        /*}*/

        /*.topbar .infobar .infobar-icon img {*/
        /*    filter: invert(0.6) sepia(1) saturate(1) hue-rotate(185deg);*/
        /*}.breadcrumbbar {*/
        /*     margin: 100px 30px 0 30px;*/
        /*     padding: 20px;*/
        /*     background-color: #ffffff;*/
        /*     border-radius: 3px;*/
        /* }*/
        /*.breadcrumbbar .widgetbar {*/
        /*    text-align: right;*/
        /*}*/

        /*.notifybar .dropdown-menu {*/
        /*    top: 14px !important;*/
        /*    border-radius: 3px;*/
        /*    padding: 0;*/
        /*}*/

        /*.profilebar a {*/
        /*    padding: 15px 8px 5px;*/
        /*    border-radius: 3px;*/
        /*}*/
        /*.profilebar .dropdown-menu {*/
        /*    top: 15px !important;*/
        /*    border-radius: 3px;*/
        /*    text-align: center;*/
        /*    padding: 0;*/
        /*}*/
        /*.badge {*/
        /*    font-weight: 600;*/
        /*}*/
        /*.badge-primary-inverse {*/
        /*    background-color: rgba(0, 128, 255, 0.1);*/
        /*    color: #0080ff;*/
        /*}*/
        /*.btn-group .btn {*/
        /*    margin-right: 0;*/
        /*}*/
        /*.btn {*/
        /*    border-radius: 3px;*/
        /*    font-size: 14px;*/
        /*    padding: 6px 12px;*/
        /*}*/
        /*.btn-round {*/
        /*    width: 40px;*/
        /*    height: 40px;*/
        /*    padding: 6px 11px;*/
        /*    border-radius: 50%;*/
        /*}*/

        /*.btn-sm {*/
        /*    padding: 4px 18px;*/
        /*}*/
        /*.btn-primary {*/
        /*    color: #ffffff;*/
        /*    background-color: #0080ff;*/
        /*    border-color: #0080ff;*/
        /*    box-shadow: none;*/
        /*}*/
        /*.btn-primary-rgba {*/
        /*    background-color: rgba(0, 128, 255, 0.1);*/
        /*    border: none;*/
        /*    color: #0080ff;*/
        /*}*/
        /*.btn-secondary-rgba {*/
        /*    background-color: rgba(129, 167, 205, 0.1);*/
        /*    border: none;*/
        /*    color: #93b4d4;*/
        /*}*/
        /*.card-header {*/
        /*    border-bottom: 1px solid transparent;*/
        /*    background-color: transparent;*/
        /*}*/

        /*.card-header:first-child {*/
        /*    border-radius: calc(5px - 1px) calc(5px - 1px) 0 0;*/
        /*    padding: 15px 20px;*/
        /*}*/

        /*.card .card-header .card-title {*/
        /*    font-size: 16px;*/
        /*    margin-bottom: 0;*/
        /*}*/

        /*.card .card-header .row .card-title {*/
        /*    font-size: 16px;*/
        /*}*/
        /*canvas {*/
        /*    -moz-user-select: none;*/
        /*    -webkit-user-select: none;*/
        /*    -ms-user-select: none;*/
        /*}*/
        /*.form-control {*/
        /*    background-color: #ffffff;*/
        /*    font-size: 15px;*/
        /*    color: #8A98AC;*/
        /*    border: 1px solid rgba(0, 0, 0, 0.03);*/
        /*    border-radius: 3px;*/
        /*}*/
        /*input[type=range] {*/
        /*    -webkit-appearance: none;*/
        /*    color: rgba(0, 0, 0, 0.03);*/
        /*    background-color: rgba(0, 0, 0, 0.03);*/
        /*    height: 5px;*/
        /*    cursor: default;*/
        /*    padding: initial;*/
        /*    border: initial;*/
        /*    margin: 2px;*/
        /*}*/
        /*.select2-container {*/
        /*    width: 100% !important;*/
        /*}*/
        /*.select2-container .select2-selection--single {*/
        /*    border: none;*/
        /*    height: 38px;*/
        /*}*/

        /*.select2-container .select2-selection--single .select2-selection__rendered {*/
        /*    line-height: 38px;*/
        /*    padding-left: 15px;*/
        /*    color: #8A98AC;*/
        /*}*/
        /*.select2-container--default .select2-selection--single {*/
        /*    background-color: #ffffff;*/
        /*    font-size: 16px;*/
        /*    color: #8A98AC;*/
        /*    border: 1px solid rgba(0, 0, 0, 0.03);*/
        /*    border-radius: 3px;*/
        /*}*/

        /*.select2-container--default .select2-selection--single .select2-selection__arrow {*/
        /*    height: 38px;*/
        /*    width: 30px;*/
        /*    top: 0;*/
        /*    right: 0;*/
        /*}*/
        /*.table {*/
        /*    margin-bottom: 10px;*/
        /*    color: #263a5b;*/
        /*}*/

        /*.table th {*/
        /*    font-size: 14px;*/
        /*    font-weight: 600;*/
        /*    text-transform: capitalize;*/
        /*    border-top: 1px solid rgba(0, 0, 0, 0.03);*/
        /*    padding: 0.7rem;*/
        /*}*/

        /*.table td {*/
        /*    color: #8A98AC;*/
        /*    vertical-align: middle;*/
        /*    border-top: 1px solid rgba(0, 0, 0, 0.03);*/
        /*    padding: 0.6rem;*/
        /*}*/

        /*.table thead th {*/
        /*    vertical-align: bottom;*/
        /*    border-bottom: 2px solid rgba(0, 0, 0, 0.03);*/
        /*}*/
        /*.table-bordered {*/
        /*    border: 1px solid rgba(0, 0, 0, 0.03);*/
        /*}*/

        /*.table-bordered th {*/
        /*    border: 1px solid rgba(0, 0, 0, 0.03);*/
        /*}*/

        /*.table-bordered td {*/
        /*    border: 1px solid rgba(0, 0, 0, 0.03);*/
        /*}*/
        /*.nav-pills .nav-link {*/
        /*    color: #263a5b;*/
        /*}*/
        /*.nav-pills .nav-link.active {*/
        /*    color: #ffffff;*/
        /*    background-color: #0080ff;*/
        /*}*/
        /*.action-icon {*/
        /*    width: 50px;*/
        /*    height: 50px;*/
        /*    line-height: 40px;*/
        /*    font-weight: 600;*/
        /*    border-radius: 3px;*/
        /*    font-size: 20px;*/
        /*    text-align: center;*/
        /*    margin-right: 15px;*/
        /*}*/

        /*.dash-widget .nav-pills .nav-link {*/
        /*    border: 1px solid rgba(0, 0, 0, 0.03);*/
        /*    border-radius: 0;*/
        /*    font-size: 12px;*/
        /*    font-weight: 600;*/
        /*    padding: 3px 10px;*/
        /*}*/

        /*.dash-widget .nav-pills .nav-link.active {*/
        /*    color: #0080ff;*/
        /*    background-color: rgba(129, 167, 205, 0.1);*/
        /*}*/

        body {
            overflow-x: hidden;
        }
        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
            width: 15rem;
        }
        #page-content-wrapper {
            min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }
        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }
            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }
            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
        #wrapper{background-color:#f2f5fa;}
    </style>
</head>
<body>
<!-- Below code will call the vue script -->
<div id="app">
    <example-component></example-component>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
