@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Concerts</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">User Id</td>
                            <td scope = "col">Title</td>
                            <td scope = "col">Subtitle</td>
                            <td scope = "col">Additional Information</td>
                            <td scope = "col">Date</td>
                            <td scope = "col">Venue</td>
                            <td scope = "col">Venue Address</td>
                            <td scope = "col">City</td>
                            <td scope = "col">State</td>
                            <td scope = "col">Zip</td>
                            <td scope = "col">Ticket Price</td>
                            <td scope = "col">Ticket Quantity</td>
                            <td scope = "col">Poster Image Path</td>
                            <td scope = "col">Published At</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($concerts)
                            @foreach($concerts as $concert)
                                <tr>
                                    <td>{{$concert["id"]}}</td>
                                    <td>{{$concert["user_id"]}}</td>
                                    <td>{{$concert["title"]}}</td>
                                    <td>{{$concert["subtitle"]}}</td>
                                    <td>{{$concert["additional_information"]}}</td>
                                    <td>{{$concert["date"]}}</td>
                                    <td>{{$concert["venue"]}}</td>
                                    <td>{{$concert["venue_address"]}}</td>
                                    <td>{{$concert["city"]}}</td>
                                    <td>{{$concert["state"]}}</td>
                                    <td>{{$concert["zip"]}}</td>
                                    <td>{{$concert["ticket_price"]}}</td>
                                    <td>{{$concert["ticket_quantity"]}}</td>
                                    <td>{{$concert["poster_image_path"]}}</td>
                                    <td>{{$concert["published_at"]}}</td>
                                    <td>{{$concert["created_at"]}}</td>
                                    <td>{{$concert["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/concert/{{$concert['id']}}">Edit</a>

                                        </div>
                                        <a class = "btn btn-sm btn-danger" href = "#">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop
