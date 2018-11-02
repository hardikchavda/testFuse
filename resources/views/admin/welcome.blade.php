@extends('adminlte::page')

@section('title', 'Admin - USER')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Middlname</th>
                            <th>Lastname</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        @forelse($data as $userData)
                        <tr>
                            <td style="padding: 5px; ">{{$userData->id}}</td>
                            <td style="padding: 5px; ">{{$userData->firstname}}</td>
                            <td style="padding: 5px">{{$userData->middlename}}</td>
                            <td style="padding: 5px">{{$userData->lastname}}</td>
                            <td><a class="btn btn-primary btn-xs" href="/admin/{{$userData->id}}/edit">Edit</a></td>

                        </tr>
                        @empty
                        Nothing In List
                        @endforelse

                    </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
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
                    <button id="delbtn" type="button" class="btn btn-outline">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<script>
    $("#delbtn").click(function() {
        //var inputData = $('#formDelete').serialize();
        var id = $('#del').attr("data-id");
        $.ajax(
                {
                    url: "/admin/destroy/" + id,
                    type: 'DELETE',
                    //data: inputData,
                    success: function()
                    {
                        $(this).dialog("close");
                    }
                });
    });
</script>
@stop