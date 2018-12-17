@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Attendee Messages</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Concert Id</td>
                            <td scope = "col">Subject</td>
                            <td scope = "col">Message</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($attendeeMessages)
                            @foreach($attendeeMessages as $attendeeMessage)
                                <tr>
                                    <td>{{$attendeeMessage["id"]}}</td>
                                    <td>{{$attendeeMessage["concert_id"]}}</td>
                                    <td>{{$attendeeMessage["subject"]}}</td>
                                    <td>{{$attendeeMessage["message"]}}</td>
                                    <td>{{$attendeeMessage["created_at"]}}</td>
                                    <td>{{$attendeeMessage["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/attendee-message/{{$attendeeMessage['id']}}">Edit</a>

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
