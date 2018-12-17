@extends('base')

@section('content')

    <div class = "container">
        <h1>Add Telescope Entries Tags </h1>
        <form method = "post" class = "form-horizontal" action = "telescope-entries-tag/add">

            <div class = "form-group">
                <label class = "" for = "entry_uuid">Entry Uuid</label>
                <input type = "text" class = "form-control" name = "entry_uuid" value = "" id = "entry_uuid">
            </div>

            <div class = "form-group">
                <label class = "" for = "tag">Tag</label>
                <input type = "text" class = "form-control" name = "tag" value = "" id = "tag">
            </div>


            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-primary">Save Telescope Entries Tags</button>
                </div>
            </div>
        </form>
    </div>
@stop