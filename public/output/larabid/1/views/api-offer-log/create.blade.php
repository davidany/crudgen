@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Api Offer Logs </h1>
        <form method = "post" class = "form-horizontal" action = "api-offer-log/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "api_success">Api Success</label>
                <input type = "text" class = "form-control" name = "api_success" value = "" id = "api_success">
            </div>

            <div class = "form-group">
                <label class = "" for = "network">Network</label>
                <input type = "text" class = "form-control" name = "network" value = "" id = "network">
            </div>

            <div class = "form-group">
                <label class = "" for = "var1">Var1</label>
                <input type = "text" class = "form-control" name = "var1" value = "" id = "var1">
            </div>

            <div class = "form-group">
                <label class = "" for = "var2">Var2</label>
                <input type = "text" class = "form-control" name = "var2" value = "" id = "var2">
            </div>

            <div class = "form-group">
                <label class = "" for = "var3">Var3</label>
                <input type = "text" class = "form-control" name = "var3" value = "" id = "var3">
            </div>

            <div class = "form-group">
                <label class = "" for = "cid">Cid</label>
                <input type = "text" class = "form-control" name = "cid" value = "" id = "cid">
            </div>

            <div class = "form-group">
                <label class = "" for = "cid2">Cid2</label>
                <input type = "text" class = "form-control" name = "cid2" value = "" id = "cid2">
            </div>

            <div class = "form-group">
                <label class = "" for = "cid3">Cid3</label>
                <input type = "text" class = "form-control" name = "cid3" value = "" id = "cid3">
            </div>

            <div class = "form-group">
                <label class = "" for = "posted_url">Posted Url</label>
                <input type = "text" class = "form-control" name = "posted_url" value = "" id = "posted_url">
            </div>

            <div class = "form-group">
                <label class = "" for = "error_code">Error Code</label>
                <input type = "text" class = "form-control" name = "error_code" value = "" id = "error_code">
            </div>

            <div class = "form-group">
                <label class = "" for = "error_description">Error Description</label>
                <input type = "text" class = "form-control" name = "error_description" value = "" id = "error_description">
            </div>

            <div class = "form-group">
                <label class = "" for = "visitor_id">Visitor Id</label>
                <input type = "text" class = "form-control" name = "visitor_id" value = "" id = "visitor_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "api_offer_id">Api Offer Id</label>
                <input type = "text" class = "form-control" name = "api_offer_id" value = "" id = "api_offer_id">
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
                    <button type = "submit" class = "btn btn-primary">Save Api Offer Logs</button>
                </div>
            </div>
        </form>
    </div>
@stop