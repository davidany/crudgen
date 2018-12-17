@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Orders </h1>
        <form method = "post" class = "form-horizontal" action = "order/add">

            <div class = "form-group">
                <label class = "" for = "id">Id</label>
                <input type = "text" class = "form-control" name = "id" value = "" id = "id">
            </div>

            <div class = "form-group">
                <label class = "" for = "confirmation_number">Confirmation Number</label>
                <input type = "text" class = "form-control" name = "confirmation_number" value = "" id = "confirmation_number">
            </div>

            <div class = "form-group">
                <label class = "" for = "amount">Amount</label>
                <input type = "text" class = "form-control" name = "amount" value = "" id = "amount">
            </div>

            <div class = "form-group">
                <label class = "" for = "email">Email</label>
                <input type = "text" class = "form-control" name = "email" value = "" id = "email">
            </div>

            <div class = "form-group">
                <label class = "" for = "card_last_four">Card Last Four</label>
                <input type = "text" class = "form-control" name = "card_last_four" value = "" id = "card_last_four">
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
                    <button type = "submit" class = "btn btn-primary">Save Orders</button>
                </div>
            </div>
        </form>
    </div>
@stop