@extends('adminlte::page')

@section('title', 'Admin - Creare - USERInfo')



@section('content')
<div class="col-md-6">

    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create New UserInfo</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            {!! Form::open(['id'=>'formCreate','method'=>'POST','action' => ['adminController@create']]) !!}

            <div class="form-group">
                {!! Form::label('fnm', 'Firstname') !!}
                {!! Form::text('firstname', null,['class'=>'form-control']) !!}
                <span id="field_error"></span>
            </div>
            <div class="form-group">
                {!! Form::label('mnm', 'Middlename') !!}
                {!! Form::text('middlename', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lnm', 'Lastname') !!}
                {!! Form::text('lastname', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ad1', 'Address1') !!}
                {!! Form::text('address1', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ad2', 'Address2') !!}
                {!! Form::text('address2', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('pin', 'Pincode') !!}
                {!! Form::text('pincode', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('st', 'State') !!}
                {!! Form::text('state', null,['class'=>'form-control']) !!}
            </div>
            {!! Form::label('city', 'City') !!}
            {!! Form::text('city', null,['class'=>'form-control']) !!}
        </div>
        <div class="box-footer">
            {!! Form::button('Create User',['data-toggle'=>'modal','data-target'=>'#modal-primary','class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        <!-- /.box-body -->
    </div>
    <div class="modal modal-primary fade in" id="modal-primary" style="display: none; padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Create New Userinfo</h4>
                </div>
                <div class="modal-body">
                    <p>Are you Sure.....</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                    <button id="crtbtn" type="button" class="btn btn-outline" data-dismiss="modal">Create</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<script>
    $("#crtbtn").click(function() {
        var inputData = $('#formCreate').serialize();
        $.ajax(
                {
                    url: "/admin/create",
                    type: 'POST',
                    data: inputData,
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        $.each(errors, function(key, val) {
                            $("#field_error").text(val).css("color", "red");
                        });
                    }
                });
    });
</script>
</div>
@stop