@include('layouts.header')
<div id="main-wrapper">
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-12-medium">

                        <!-- Article list -->
                        <section class="box article-list">
                            <h2 class="icon fa-file-text-o">Registeration Form</h2>



                            <!-- Excerpt -->
                            <article class="box excerpt">
                                {!! Form::open(['action'=>'test1@formSubmit']) !!}

                                {!! Form::label('fnm', 'Firstname') !!}
                                {!! Form::text('fnm', null,['class'=>'form-control']) !!}

                                {!! Form::label('mnm', 'Middlename') !!}
                                {!! Form::text('mnm', null,['class'=>'form-control']) !!}

                                {!! Form::label('lnm', 'Lastname') !!}
                                {!! Form::text('lnm', null,['class'=>'form-control']) !!}

                                {!! Form::label('ad1', 'Address1') !!}
                                {!! Form::text('ad1', null,['class'=>'form-control']) !!}

                                {!! Form::label('ad2', 'Address2') !!}
                                {!! Form::text('ad2', null,['class'=>'form-control']) !!}

                                {!! Form::label('pin', 'Pincode') !!}
                                {!! Form::text('pin', null,['class'=>'form-control']) !!}

                                {!! Form::label('st', 'State') !!}
                                {!! Form::text('st', null,['class'=>'form-control']) !!}

                                {!! Form::label('city', 'City') !!}
                                {!! Form::text('city', null,['class'=>'form-control']) !!}

                                {!! Form::label('', '') !!}
                                {!! Form::submit ('Register User') !!}
                                @if(session('success'))
                                <h1>{{session('success')}}</h1>
                                @endif
                                {!! Form::close() !!}
                            </article>



                        </section                                        >
                    </div>
                    <div class="col-4 col-12-medium">

                        <!-- Spotlight -->
                        <section class="box spotlight">
                            <h2 class="icon fa-file-text-o">Spotlight</h2>
                            <article>
                                <a href="#" class="image featured"><img src="{{URL::asset('/asset/images/pic07.jpg')}}" alt=""></a>
                                <header>
                                    <h3><a href="#">N                                            eural Implants</a></h3>
                                    <p>The pros and cons. M                                            ostly cons.</p>
                                </header>
                                <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
                                    quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis ege                                                    t mi quat etiam
                                    lorem. Phasellus quam turpis, feugiat sed et lorem ipsum do                                                    lor consequat dolor feugiat sed
                                    et tempus consequat etiam.</p>
                                <p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
                                    mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
                                <footer>
                                    <a href="#" class="button alt icon fa-file-o">Continue Reading</a>
                                </footer>
                            </article>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@include('layouts.footer')
