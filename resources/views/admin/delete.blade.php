@include('layouts.headerAdmin')

<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">Delete UserInfo</h2>

                        <!-- Excerpt -->
                        <article class="box excerpt">
                            {{--
                            {!! Form::model($data,['method'=>'DELETE','action' => ['adminController@destroy',$data->id],'onSubmit'=>'return confirm("Are You Sure?  Please check twice before taking any action....")']) !!}
                            --}}
                            {!! Form::model($data,['id'=>'formDelete','method'=>'DELETE','action' => ['adminController@destroy',$data->id]]) !!}
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
                            {!! Form::button ('Register User',['data-id' => $data->id,'id'=>'deleteRec']) !!}
                            @if(session('success'))
                            <h1>{{session('success')}}</h1>
                            @endif
                            {!! Form::close() !!}
                        </article>


                        <div id="dialog" title="Delete Confirmation">
                            <p>Are You Sure you want to delete this record.</p>
                        </div>

                    </section>

                    <script>
                        $("#dialog").dialog({
                            autoOpen: false,
                            width: 400,
                            buttons: [
                                {
                                    text: "Ok",
                                    click: function() {
                                        var inputData = $('#formDelete').serialize();
                                        var id = $('#deleteRec').attr("data-id");
                                        $.ajax(
                                                {
                                                    url: "/admin/destroy/" + id,
                                                    type: 'POST',
                                                    data: inputData,
                                                    success: function()
                                                    {
                                                        $(this).dialog("close");
                                                    }
                                                });
                                        console.log("It failed");
                                    }
                                },
                                {
                                    text: "Cancel",
                                    click: function() {
                                        $(this).dialog("close");
                                    }
                                }
                            ]
                        });

                        $("#deleteRec").click(function(event) {
                            $("#dialog").dialog("open");
                            event.preventDefault();
                        });
                    </script>

                </div>

            </div>
        </div>
    </div>
</div>
</div>




@include('layouts.footerAdmin')
