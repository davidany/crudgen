@extends('base')

@section('content')

    <div class = "container">
        <h1>Edit Orders </h1>
        <form method = "post" class = "form-horizontal" action = "order/update">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "{{ $order->id }}" id = "id">
            </div>
            <div class = "form-group">
                <label class = "" for = "confirmation_number">Confirmation Number</label>
                <input type = "text" class = "form-control" name = "confirmation_number" value = "{{ $order->confirmation_number }}" id = "confirmation_number">
            </div>
            <div class = "form-group">
                <label class = "" for = "amount">Amount</label>
                <input type = "text" class = "form-control" name = "amount" value = "{{ $order->amount }}" id = "amount">
            </div>
            <div class = "form-group">
                <label class = "" for = "email">Email</label>
                <input type = "text" class = "form-control" name = "email" value = "{{ $order->email }}" id = "email">
            </div>
            <div class = "form-group">
                <label class = "" for = "card_last_four">Card Last Four</label>
                <input type = "text" class = "form-control" name = "card_last_four" value = "{{ $order->card_last_four }}" id = "card_last_four">
            </div>
            <div class = "form-group">
                <label class = "" for = "created_at">Created At</label>
                <input type = "text" class = "form-control" name = "created_at" value = "{{ $order->created_at }}" id = "created_at">
            </div>
            <div class = "form-group">
                <label class = "" for = "updated_at">Updated At</label>
                <input type = "text" class = "form-control" name = "updated_at" value = "{{ $order->updated_at }}" id = "updated_at">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Orders</button>
                </div>
            </div>
        </form>
    </div>
@stop