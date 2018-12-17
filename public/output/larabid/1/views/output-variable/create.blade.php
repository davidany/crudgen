@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Output Variables </h1>
        <form method = "post" class = "form-horizontal" action = "output-variable/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "path_id">Path Id</label>
                <input type = "text" class = "form-control" name = "path_id" value = "" id = "path_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "incoming_variable_title">Incoming Variable Title</label>
                <input type = "text" class = "form-control" name = "incoming_variable_title" value = "" id = "incoming_variable_title">
            </div>

            <div class = "form-group">
                <label class = "" for = "outgoing_variable_title">Outgoing Variable Title</label>
                <input type = "text" class = "form-control" name = "outgoing_variable_title" value = "" id = "outgoing_variable_title">
            </div>

            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "" id = "created_at">
            </div>

            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Output Variables</button>
                </div>
            </div>
        </form>
    </div>
@stop