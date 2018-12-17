@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Users </h1>
        <form method = "post" class = "form-horizontal" action = "user/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "email">Email</label>
                <input type = "text" class = "form-control" name = "email" value = "" id = "email">
            </div>

            <div class = "form-group">
                <label class = "" for = "password">Password</label>
                <input type = "text" class = "form-control" name = "password" value = "" id = "password">
            </div>

            <div class = "form-group">
                <label class = "" for = "stripe_account_id">Stripe Account Id</label>
                <input type = "text" class = "form-control" name = "stripe_account_id" value = "" id = "stripe_account_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "stripe_access_token">Stripe Access Token</label>
                <input type = "text" class = "form-control" name = "stripe_access_token" value = "" id = "stripe_access_token">
            </div>

            <div class = "form-group">
                <label class = "" for = "remember_token">Remember Token</label>
                <input type = "text" class = "form-control" name = "remember_token" value = "" id = "remember_token">
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
                    <button type = "submit" class = "btn btn-primary">Save Users</button>
                </div>
            </div>
        </form>
    </div>
@stop