@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Attendee Messages </h1>
        <form method = "post" class = "form-horizontal" action = "attendee-message/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $attendeeMessage->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "concert_id">Concert Id</label>
                <input type = "text" class = "form-control" name = "concert_id" value = "{{ $attendeeMessage->concert_id }}" id = "concert_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "subject">Subject</label>
                <input type = "text" class = "form-control" name = "subject" value = "{{ $attendeeMessage->subject }}" id = "subject">
            </div>
            <div class = "form-group">
                <label class = "" for = "message">Message</label>
                <input type = "text" class = "form-control" name = "message" value = "{{ $attendeeMessage->message }}" id = "message">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $attendeeMessage->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $attendeeMessage->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Attendee Messages</button>
                </div>
            </div>
        </form>
    </div>
@stop