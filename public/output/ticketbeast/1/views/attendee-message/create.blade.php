@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Attendee Messages </h1>
        <form method = "post" class = "form-horizontal" action = "attendee-message/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "concert_id">Concert Id</label>
                <input type = "text" class = "form-control" name = "concert_id" value = "" id = "concert_id">
            </div>

            <div class = "form-group">
                <label class = "" for = "subject">Subject</label>
                <input type = "text" class = "form-control" name = "subject" value = "" id = "subject">
            </div>

            <div class = "form-group">
                <label class = "" for = "message">Message</label>
                <input type = "text" class = "form-control" name = "message" value = "" id = "message">
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
                    <button type = "submit" class = "btn btn-primary">Save Attendee Messages</button>
                </div>
            </div>
        </form>
    </div>
@stop