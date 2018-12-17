@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Tickets </h1>
        <form method = "post" class = "form-horizontal" action = "ticket/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $ticket->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "concert_id">Concert Id</label>
                <input type = "text" class = "form-control" name = "concert_id" value = "{{ $ticket->concert_id }}" id = "concert_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "order_id">Order Id</label>
                <input type = "text" class = "form-control" name = "order_id" value = "{{ $ticket->order_id }}" id = "order_id">
            </div>
            <div class = "form-group">
                <label class = "" for = "reserved_at">Reserved At</label>
                <input type = "text" class = "form-control" name = "reserved_at" value = "{{ $ticket->reserved_at }}" id = "reserved_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "code">Code</label>
                <input type = "text" class = "form-control" name = "code" value = "{{ $ticket->code }}" id = "code">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $ticket->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $ticket->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Tickets</button>
                </div>
            </div>
        </form>
    </div>
@stop