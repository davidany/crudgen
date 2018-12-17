@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Path Variables </h1>
        <form method = "post" class = "form-horizontal" action = "path-variable/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "path_id">Path Id</label>
                <input type = "text" class = "form-control" name = "path_id" value = "" id = "path_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "input_variable">Input Variable</label>
                <input type = "text" class = "form-control" name = "input_variable" value = "" id = "input_variable">
            </div>

            <div class = "form-group">
                <label class = "" for = "output_variable">Output Variable</label>
                <input type = "text" class = "form-control" name = "output_variable" value = "" id = "output_variable">
            </div>

            <div class = "form-group">
                <label class = "" for = "input_alias">Input Alias</label>
                <input type = "text" class = "form-control" name = "input_alias" value = "" id = "input_alias">
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
                    <button type = "submit" class = "btn btn-primary">Save Path Variables</button>
                </div>
            </div>
        </form>
    </div>
@stop