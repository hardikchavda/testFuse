@include('layouts.headerAdmin')

<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">UserData</h2>



                        <!-- Excerpt -->
                        <article class="box excerpt">
                            {!! Form::model($data, ['method'=>'PATCH','action' => ['adminController@update',$data->id]]) !!}

                            {!! Form::label('fnm', 'Firstname') !!}
                            {!! Form::text('firstname', null,['class'=>'form-control']) !!}

                            {!! Form::label('mnm', 'Middlename') !!}
                            {!! Form::text('middlename', null,['class'=>'form-control']) !!}

                            {!! Form::label('lnm', 'Lastname') !!}
                            {!! Form::text('lastname', null,['class'=>'form-control']) !!}

                            {!! Form::label('ad1', 'Address1') !!}
                            {!! Form::text('address1', null,['class'=>'form-control']) !!}

                            {!! Form::label('ad2', 'Address2') !!}
                            {!! Form::text('address2', null,['class'=>'form-control']) !!}

                            {!! Form::label('pin', 'Pincode') !!}
                            {!! Form::text('pincode', null,['class'=>'form-control']) !!}

                            {!! Form::label('st', 'State') !!}
                            {!! Form::text('state', null,['class'=>'form-control']) !!}

                            {!! Form::label('city', 'City') !!}
                            {!! Form::text('city', null,['class'=>'form-control']) !!}

                            {!! Form::label('', '') !!}
                            {!! Form::submit ('Register User',['class'=>'form-submit']) !!}
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


<script>
    $('.form-submit').click(function() {
        alert();
    });
</script>

@include('layouts.footerAdmin')
