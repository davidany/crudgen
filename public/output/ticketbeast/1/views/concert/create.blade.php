@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Concerts </h1>
        <form method = "post" class = "form-horizontal" action = "concert/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "user_id">User Id</label>
                <input type = "text" class = "form-control" name = "user_id" value = "" id = "user_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "title">Title</label>
                <input type = "text" class = "form-control" name = "title" value = "" id = "title">
            </div>

            <div class = "form-group">
                <label class = "" for = "subtitle">Subtitle</label>
                <input type = "text" class = "form-control" name = "subtitle" value = "" id = "subtitle">
            </div>

            <div class = "form-group">
                <label class = "" for = "additional_information">Additional Information</label>
                <input type = "text" class = "form-control" name = "additional_information" value = "" id = "additional_information">
            </div>

            <div class = "form-group">
                <label class = "" for = "date">Date</label>
                <input type = "text" class = "form-control" name = "date" value = "" id = "date">
            </div>

            <div class = "form-group">
                <label class = "" for = "venue">Venue</label>
                <input type = "text" class = "form-control" name = "venue" value = "" id = "venue">
            </div>

            <div class = "form-group">
                <label class = "" for = "venue_address">Venue Address</label>
                <input type = "text" class = "form-control" name = "venue_address" value = "" id = "venue_address">
            </div>

            <div class = "form-group">
                <label class = "" for = "city">City</label>
                <input type = "text" class = "form-control" name = "city" value = "" id = "city">
            </div>

            <div class = "form-group">
                <label class = "" for = "state">State</label>
                <input type = "text" class = "form-control" name = "state" value = "" id = "state">
            </div>

            <div class = "form-group">
                <label class = "" for = "zip">Zip</label>
                <input type = "text" class = "form-control" name = "zip" value = "" id = "zip">
            </div>

            <div class = "form-group">
                <label class = "" for = "ticket_price">Ticket Price</label>
                <input type = "text" class = "form-control" name = "ticket_price" value = "" id = "ticket_price">
            </div>

            <div class = "form-group">
                <label class = "" for = "ticket_quantity">Ticket Quantity</label>
                <input type = "text" class = "form-control" name = "ticket_quantity" value = "" id = "ticket_quantity">
            </div>

            <div class = "form-group">
                <label class = "" for = "poster_image_path">Poster Image Path</label>
                <input type = "text" class = "form-control" name = "poster_image_path" value = "" id = "poster_image_path">
            </div>

            <div class = "form-group">
                <label class = "" for = "published_at">Published At</label>
                <input type = "text" class = "form-control" name = "published_at" value = "" id = "published_at">
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
                    <button type = "submit" class = "btn btn-primary">Save Concerts</button>
                </div>
            </div>
        </form>
    </div>
@stop