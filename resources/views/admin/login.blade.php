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
                            <h1 style="margin-left: 400px"><a href="{{ action('test1@home') }}" id="logo">Geetanjali Admin Panel</a></h1>
                        </div>
                    </header>



                </div>
            </div>
            <div id="main-wrapper">
                <div class="wrapper style3">
                    <div class="inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 col-12-medium">

                                    <!-- Article list -->
                                    <section class="box article-list">
                                        <h2 class="icon fa-file-text-o">Admin Login</h2>


                                        <!-- Excerpt -->
                                        <article class="box excerpt">
                                            {!! Form::open(['action'=>'adminController@logincheck']) !!}

                                            {!! Form::label('fnm', 'Firstname') !!}
                                            {!! Form::text('fnm', null,['class'=>'form-control']) !!}

                                            {!! Form::label('lnm', 'Lastname') !!}
                                            {!! Form::text('lnm', null,['class'=>'form-control']) !!}

                                            {!! Form::label('', '') !!}
                                            {!! Form::submit ('Login') !!}
                                            @if(session('success'))
                                            <h1>{{session('success')}}</h1>
                                            @endif
                                            {!! Form::close() !!}
                                        </article>



                                    </section                                        >
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            @include('layouts.footerAdmin')
