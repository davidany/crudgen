@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Visitor Variables </h1>
        <form method = "post" class = "form-horizontal" action = "visitor-variable/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $visitorVariable->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "visitor_id">Visitor Id</label>
                <input type = "text" class = "form-control" name = "visitor_id" value = "{{ $visitorVariable->visitor_id }}" id = "visitor_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "name">Name</label>
                <input type = "text" class = "form-control" name = "name" value = "{{ $visitorVariable->name }}" id = "name">
            </div>
            <div class = "form-group">
                <label class = "" for = "value">Value</label>
                <input type = "text" class = "form-control" name = "value" value = "{{ $visitorVariable->value }}" id = "value">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $visitorVariable->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $visitorVariable->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Visitor Variables</button>
                </div>
            </div>
        </form>
    </div>
@stop