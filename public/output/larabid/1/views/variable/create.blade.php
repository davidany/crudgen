@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Variables </h1>
        <form method = "post" class = "form-horizontal" action = "variable/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Variables</button>
                </div>
            </div>
        </form>
    </div>
@stop