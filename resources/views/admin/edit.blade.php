@extends('adminlte::page')

@section('title', 'Admin - Edit - USER')



@section('content')
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit UserInfo</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            {!! Form::model($data, ['id'=>'formDelete','method'=>'PATCH','action' => ['adminController@update',$data->id]]) !!}

            <div class="form-group">
                {!! Form::label('fnm', 'Firstname') !!}
                {!! Form::text('firstname', null,['class'=>'form-control']) !!}
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
            {!! Form::submit ('Edit User',['class'=>'btn btn-primary']) !!}
            {!! Form::button('Delete User',['data-toggle'=>'modal','data-target'=>'#modal-danger','data-id' => $data->id,'id'=>'deleteRec','class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}

        <!-- /.box-body -->
    </div>
    <div class="modal modal-danger fade in" id="modal-danger" style="display: none; padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Delete Userinfo</h4>
                </div>
                <div class="modal-body">
                    <p>Are you Sure.....</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                    <button id="delbtn" type="button" class="btn btn-outline" data-dismiss="modal">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<script>
    $("#delbtn").click(function() {
        var inputData = $('#formDelete').serialize();
        var id = $('#deleteRec').attr("data-id");
        $.ajax(
                {
                    url: "/admin/destroy/" + id,
                    type: 'DELETE',
                    data: inputData,
                });
    });
</script>
</div>
@stop