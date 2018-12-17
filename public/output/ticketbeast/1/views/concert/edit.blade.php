@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Concerts </h1>
        <form method = "post" class = "form-horizontal" action = "concert/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $concert->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "user_id">User Id</label>
                <input type = "text" class = "form-control" name = "user_id" value = "{{ $concert->user_id }}" id = "user_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "title">Title</label>
                <input type = "text" class = "form-control" name = "title" value = "{{ $concert->title }}" id = "title">
            </div>
            <div class = "form-group">
                <label class = "" for = "subtitle">Subtitle</label>
                <input type = "text" class = "form-control" name = "subtitle" value = "{{ $concert->subtitle }}" id = "subtitle">
            </div>
            <div class = "form-group">
                <label class = "" for = "additional_information">Additional Information</label>
                <input type = "text" class = "form-control" name = "additional_information" value = "{{ $concert->additional_information }}" id = "additional_information">
            </div>
            <div class = "form-group">
                <label class = "" for = "date">Date</label>
                <input type = "text" class = "form-control" name = "date" value = "{{ $concert->date }}" id = "date">
            </div>
            <div class = "form-group">
                <label class = "" for = "venue">Venue</label>
                <input type = "text" class = "form-control" name = "venue" value = "{{ $concert->venue }}" id = "venue">
            </div>
            <div class = "form-group">
                <label class = "" for = "venue_address">Venue Address</label>
                <input type = "text" class = "form-control" name = "venue_address" value = "{{ $concert->venue_address }}" id = "venue_address">
            </div>
            <div class = "form-group">
                <label class = "" for = "city">City</label>
                <input type = "text" class = "form-control" name = "city" value = "{{ $concert->city }}" id = "city">
            </div>
            <div class = "form-group">
                <label class = "" for = "state">State</label>
                <input type = "text" class = "form-control" name = "state" value = "{{ $concert->state }}" id = "state">
            </div>
            <div class = "form-group">
                <label class = "" for = "zip">Zip</label>
                <input type = "text" class = "form-control" name = "zip" value = "{{ $concert->zip }}" id = "zip">
            </div>
            <div class = "form-group">
                <label class = "" for = "ticket_price">Ticket Price</label>
                <input type = "text" class = "form-control" name = "ticket_price" value = "{{ $concert->ticket_price }}" id = "ticket_price">
            </div>
            <div class = "form-group">
                <label class = "" for = "ticket_quantity">Ticket Quantity</label>
                <input type = "text" class = "form-control" name = "ticket_quantity" value = "{{ $concert->ticket_quantity }}" id = "ticket_quantity">
            </div>
            <div class = "form-group">
                <label class = "" for = "poster_image_path">Poster Image Path</label>
                <input type = "text" class = "form-control" name = "poster_image_path" value = "{{ $concert->poster_image_path }}" id = "poster_image_path">
            </div>
            <div class = "form-group">
                <label class = "" for = "published_at">Published At</label>
                <input type = "text" class = "form-control" name = "published_at" value = "{{ $concert->published_at }}" id = "published_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $concert->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $concert->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Concerts</button>
                </div>
            </div>
        </form>
    </div>
@stop