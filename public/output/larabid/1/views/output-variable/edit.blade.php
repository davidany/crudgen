@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Output Variables </h1>
        <form method = "post" class = "form-horizontal" action = "output-variable/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $outputVariable->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "path_id">Path Id</label>
                <input type = "text" class = "form-control" name = "path_id" value = "{{ $outputVariable->path_id }}" id = "path_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "incoming_variable_title">Incoming Variable Title</label>
                <input type = "text" class = "form-control" name = "incoming_variable_title" value = "{{ $outputVariable->incoming_variable_title }}" id = "incoming_variable_title">
            </div>
            <div class = "form-group">
                <label class = "" for = "outgoing_variable_title">Outgoing Variable Title</label>
                <input type = "text" class = "form-control" name = "outgoing_variable_title" value = "{{ $outputVariable->outgoing_variable_title }}" id = "outgoing_variable_title">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $outputVariable->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $outputVariable->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Output Variables</button>
                </div>
            </div>
        </form>
    </div>
@stop