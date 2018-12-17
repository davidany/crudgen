@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Project </h1>
        <form method = "post" class = "form-horizontal" action = "project/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "name">Name</label>
                <input type = "text" class = "form-control" name = "name" value = "" id = "name">
            </div>

            <div class = "form-group">
                <label class = "" for = "directory">Directory</label>
                <input type = "text" class = "form-control" name = "directory" value = "" id = "directory">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Project</button>
                </div>
            </div>
        </form>
    </div>
@stop