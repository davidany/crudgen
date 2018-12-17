@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Migrations </h1>
        <form method = "post" class = "form-horizontal" action = "migration/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "migration">Migration</label>
                <input type = "text" class = "form-control" name = "migration" value = "" id = "migration">
            </div>

            <div class = "form-group">
                <label class = "" for = "batch">Batch</label>
                <input type = "text" class = "form-control" name = "batch" value = "" id = "batch">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Migrations</button>
                </div>
            </div>
        </form>
    </div>
@stop