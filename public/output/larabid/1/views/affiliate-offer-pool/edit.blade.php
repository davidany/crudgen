@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Affiliate Offer Pool </h1>
        <form method = "post" class = "form-horizontal" action = "affiliate-offer-pool/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $affiliateOfferPool->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "affiliate_id">Affiliate Id</label>
                <input type = "text" class = "form-control" name = "affiliate_id" value = "{{ $affiliateOfferPool->affiliate_id }}" id = "affiliate_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "offer_pool_id">Offer Pool Id</label>
                <input type = "text" class = "form-control" name = "offer_pool_id" value = "{{ $affiliateOfferPool->offer_pool_id }}" id = "offer_pool_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $affiliateOfferPool->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $affiliateOfferPool->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Affiliate Offer Pool</button>
                </div>
            </div>
        </form>
    </div>
@stop