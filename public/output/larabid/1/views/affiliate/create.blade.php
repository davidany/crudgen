@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Affiliates </h1>
        <form method = "post" class = "form-horizontal" action = "affiliate/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "affiliate_cake_id">Affiliate Cake Id</label>
                <input type = "text" class = "form-control" name = "affiliate_cake_id" value = "" id = "affiliate_cake_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "affiliate_name">Affiliate Name</label>
                <input type = "text" class = "form-control" name = "affiliate_name" value = "" id = "affiliate_name">
            </div>

            <div class = "form-group">
                <label class = "" for = "first_name">First Name</label>
                <input type = "text" class = "form-control" name = "first_name" value = "" id = "first_name">
            </div>

            <div class = "form-group">
                <label class = "" for = "last_name">Last Name</label>
                <input type = "text" class = "form-control" name = "last_name" value = "" id = "last_name">
            </div>

            <div class = "form-group">
                <label class = "" for = "email">Email</label>
                <input type = "text" class = "form-control" name = "email" value = "" id = "email">
            </div>

            <div class = "form-group">
                <label class = "" for = "cell">Cell</label>
                <input type = "text" class = "form-control" name = "cell" value = "" id = "cell">
            </div>

            <div class = "form-group">
                <label class = "" for = "username">Username</label>
                <input type = "text" class = "form-control" name = "username" value = "" id = "username">
            </div>

            <div class = "form-group">
                <label class = "" for = "is_active">Is Active</label>
                <input type = "text" class = "form-control" name = "is_active" value = "" id = "is_active">
            </div>

            <div class = "form-group">
                <label class = "" for = "affiliate_code">Affiliate Code</label>
                <input type = "text" class = "form-control" name = "affiliate_code" value = "" id = "affiliate_code">
            </div>

            <div class = "form-group">
                <label class = "" for = "fail_url">Fail Url</label>
                <input type = "text" class = "form-control" name = "fail_url" value = "" id = "fail_url">
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
                    <button type = "submit" class = "btn btn-primary">Save Affiliates</button>
                </div>
            </div>
        </form>
    </div>
@stop