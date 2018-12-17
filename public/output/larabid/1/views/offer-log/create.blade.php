@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Offer Logs </h1>
        <form method = "post" class = "form-horizontal" action = "offer-log/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "path_id">Path Id</label>
                <input type = "text" class = "form-control" name = "path_id" value = "" id = "path_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "offer_pool_id">Offer Pool Id</label>
                <input type = "text" class = "form-control" name = "offer_pool_id" value = "" id = "offer_pool_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "offer_id">Offer Id</label>
                <input type = "text" class = "form-control" name = "offer_id" value = "" id = "offer_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "visitor_id">Visitor Id</label>
                <input type = "text" class = "form-control" name = "visitor_id" value = "" id = "visitor_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "email">Email</label>
                <input type = "text" class = "form-control" name = "email" value = "" id = "email">
            </div>

            <div class = "form-group">
                <label class = "" for = "ip_address">Ip Address</label>
                <input type = "text" class = "form-control" name = "ip_address" value = "" id = "ip_address">
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
                    <button type = "submit" class = "btn btn-primary">Save Offer Logs</button>
                </div>
            </div>
        </form>
    </div>
@stop