@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Api Offer Logs </h1>
        <form method = "post" class = "form-horizontal" action = "api-offer-log/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $apiOfferLog->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_success">Api Success</label>
                <input type = "text" class = "form-control" name = "api_success" value = "{{ $apiOfferLog->api_success }}" id = "api_success">
            </div>
            <div class = "form-group">
                <label class = "" for = "network">Network</label>
                <input type = "text" class = "form-control" name = "network" value = "{{ $apiOfferLog->network }}" id = "network">
            </div>
            <div class = "form-group">
                <label class = "" for = "var1">Var1</label>
                <input type = "text" class = "form-control" name = "var1" value = "{{ $apiOfferLog->var1 }}" id = "var1">
            </div>
            <div class = "form-group">
                <label class = "" for = "var2">Var2</label>
                <input type = "text" class = "form-control" name = "var2" value = "{{ $apiOfferLog->var2 }}" id = "var2">
            </div>
            <div class = "form-group">
                <label class = "" for = "var3">Var3</label>
                <input type = "text" class = "form-control" name = "var3" value = "{{ $apiOfferLog->var3 }}" id = "var3">
            </div>
            <div class = "form-group">
                <label class = "" for = "cid">Cid</label>
                <input type = "text" class = "form-control" name = "cid" value = "{{ $apiOfferLog->cid }}" id = "cid">
            </div>
            <div class = "form-group">
                <label class = "" for = "cid2">Cid2</label>
                <input type = "text" class = "form-control" name = "cid2" value = "{{ $apiOfferLog->cid2 }}" id = "cid2">
            </div>
            <div class = "form-group">
                <label class = "" for = "cid3">Cid3</label>
                <input type = "text" class = "form-control" name = "cid3" value = "{{ $apiOfferLog->cid3 }}" id = "cid3">
            </div>
            <div class = "form-group">
                <label class = "" for = "posted_url">Posted Url</label>
                <input type = "text" class = "form-control" name = "posted_url" value = "{{ $apiOfferLog->posted_url }}" id = "posted_url">
            </div>
            <div class = "form-group">
                <label class = "" for = "error_code">Error Code</label>
                <input type = "text" class = "form-control" name = "error_code" value = "{{ $apiOfferLog->error_code }}" id = "error_code">
            </div>
            <div class = "form-group">
                <label class = "" for = "error_description">Error Description</label>
                <input type = "text" class = "form-control" name = "error_description" value = "{{ $apiOfferLog->error_description }}" id = "error_description">
            </div>
            <div class = "form-group">
                <label class = "" for = "visitor_id">Visitor Id</label>
                <input type = "text" class = "form-control" name = "visitor_id" value = "{{ $apiOfferLog->visitor_id }}" id = "visitor_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_offer_id">Api Offer Id</label>
                <input type = "text" class = "form-control" name = "api_offer_id" value = "{{ $apiOfferLog->api_offer_id }}" id = "api_offer_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $apiOfferLog->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $apiOfferLog->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Api Offer Logs</button>
                </div>
            </div>
        </form>
    </div>
@stop