<!DOCTYPE HTML>
<html>
    <head>
        <title>Geetanjali</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{URL::asset('asset/css/main.css')}}" />
    </head>

    <body class="homepage is-preload">
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header-wrapper">
                <div class="container">

                    <!-- Header -->
                    <header id="header">
                        <div class="inner">

                            <!-- Logo -->
                            <h1><a href="{{ action('adminController@alldata') }}" id="logo">Geetanjali Admin Panel</a></h1>

                            <!-- Nav -->
                            <nav id="nav">
                                <ul>
                                    <li>
                                        @if(!Auth::guest())
                                    <li>

                                    </li>
                                    <li>
                                        <a href="#">{{Auth::user()->name}}</a>
                                        <ul>
                                            <li><a href="{{ action('adminController@logout')}}">Logout</li>
                                        </ul>
                                    </li>
                                    @else
                                    <li> <a href="{{ action('adminController@login') }}">Login
                                            @endif
                                        </a></li>
                                </ul>
                            </nav>

                        </div>
                    </header>



                </div>
            </div>