@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Api Offers </h1>
        <form method = "post" class = "form-horizontal" action = "api-offer/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $apiOffer->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_code">Api Code</label>
                <input type = "text" class = "form-control" name = "api_code" value = "{{ $apiOffer->api_code }}" id = "api_code">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_name">Api Name</label>
                <input type = "text" class = "form-control" name = "api_name" value = "{{ $apiOffer->api_name }}" id = "api_name">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_url">Api Url</label>
                <input type = "text" class = "form-control" name = "api_url" value = "{{ $apiOffer->api_url }}" id = "api_url">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_user_name">Api User Name</label>
                <input type = "text" class = "form-control" name = "api_user_name" value = "{{ $apiOffer->api_user_name }}" id = "api_user_name">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_password">Api Password</label>
                <input type = "text" class = "form-control" name = "api_password" value = "{{ $apiOffer->api_password }}" id = "api_password">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_key">Api Key</label>
                <input type = "text" class = "form-control" name = "api_key" value = "{{ $apiOffer->api_key }}" id = "api_key">
            </div>
            <div class = "form-group">
                <label class = "" for = "api_hash_key">Api Hash Key</label>
                <input type = "text" class = "form-control" name = "api_hash_key" value = "{{ $apiOffer->api_hash_key }}" id = "api_hash_key">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $apiOffer->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $apiOffer->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Api Offers</button>
                </div>
            </div>
        </form>
    </div>
@stop