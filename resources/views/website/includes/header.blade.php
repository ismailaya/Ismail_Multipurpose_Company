<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zanzibar City Council</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon" />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Rubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.6.1'
        media='all' />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-responsive.css')}}" type="text/css" media="screen">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type=" text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/kstyle.css') }}">

    <style>
        ul {
            list-style-type: none !important;
        }

        a {
            text-decoration: none !important;
        }

        .social a {
            font-size: 25px;
            background-color: white;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 40px;
        }
    </style>

</head>

<body class="main">
    <div id="main">
        <div class="top-bar">
            <ul class="social">
                @if ($global_setting->linkedin)
                    <li>
                        <a href="{{$global_setting->linkedin}}" title="" target="_blank" class="text-primary">
                            <span class="icon fa fa-linkedin"></span>
                        </a>
                    </li>
                @endif
                @if ($global_setting->telegram)
                    <li>
                        <a href="{{$global_setting->telegram}}" title="" target="_blank" class="text-info">
                            <span class="icon fa fa-telegram"></span>
                        </a>
                    </li>
                @endif
                @if ($global_setting->youtube)
                    <li>
                        <a href="{{$global_setting->youtube}}" title="" target="_blank" class="text-danger">
                            <span class="icon fa fa-youtube"></span>
                        </a>
                    </li>
                @endif
                @if ($global_setting->instagram)
                    <li>
                        <a href="{{$global_setting->instagram}}" title="" target="_blank" class="text-danger">
                            <span class="icon fa fa-instagram"></span>
                        </a>
                    </li>
                @endif
                @if ($global_setting->twitter)
                    <li>
                        <a href="{{$global_setting->twitter}}" title="" target="_blank" class="text-info">
                            <span class="icon fa fa-twitter"></span>
                        </a>
                    </li>
                @endif
                @if ($global_setting->facebook)
                    <li>
                        <a href="{{$global_setting->facebook}}" title="" target="_blank">
                            <span class="icon fa fa-facebook"></span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="app-bar container-fluid" style="position: relative;">
            <img src="{{ asset('assets/images/logo.png')}}" alt="" class="jiji-logo">
            <div class="text-center" style="position: absolute;top: 15px;left: 150px;right:170px;">
                <h4 class="p-0 non-responsive"> OFISI YA RAIS</h4>
                <h4 class="p-1 non-responsive"> TAWALA ZA MIKOA NA IDARA MAALUM ZA SMZ</h4>
                <h5 class="p-1 text-primary">BARAZA LA JIJI LA ZANZIBAR</h6>
            </div>
            <img src="{{ asset('assets/images/smzlogo.png')}}" alt="" class="smz-logo">
        </div>

        @include("website.includes.navbar")

