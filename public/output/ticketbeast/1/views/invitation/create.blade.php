@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Invitations </h1>
        <form method = "post" class = "form-horizontal" action = "invitation/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "user_id">User Id</label>
                <input type = "text" class = "form-control" name = "user_id" value = "" id = "user_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "email">Email</label>
                <input type = "text" class = "form-control" name = "email" value = "" id = "email">
            </div>

            <div class = "form-group">
                <label class = "" for = "code">Code</label>
                <input type = "text" class = "form-control" name = "code" value = "" id = "code">
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
                    <button type = "submit" class = "btn btn-primary">Save Invitations</button>
                </div>
            </div>
        </form>
    </div>
@stop