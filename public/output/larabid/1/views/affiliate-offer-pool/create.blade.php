@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Affiliate Offer Pool </h1>
        <form method = "post" class = "form-horizontal" action = "affiliate-offer-pool/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "affiliate_id">Affiliate Id</label>
                <input type = "text" class = "form-control" name = "affiliate_id" value = "" id = "affiliate_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "offer_pool_id">Offer Pool Id</label>
                <input type = "text" class = "form-control" name = "offer_pool_id" value = "" id = "offer_pool_id">
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
                    <button type = "submit" class = "btn btn-primary">Save Affiliate Offer Pool</button>
                </div>
            </div>
        </form>
    </div>
@stop