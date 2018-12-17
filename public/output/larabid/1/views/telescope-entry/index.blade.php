@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Telescope Entries</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Sequence</td>
                            <td scope = "col">Uuid</td>
                            <td scope = "col">Batch Id</td>
                            <td scope = "col">Family Hash</td>
                            <td scope = "col">Should Display On Index</td>
                            <td scope = "col">Type</td>
                            <td scope = "col">Content</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($telescopeEntries)
                            @foreach($telescopeEntries as $telescopeEntry)
                                <tr>
                                    <td>{{$telescopeEntry["sequence"]}}</td>
                                    <td>{{$telescopeEntry["uuid"]}}</td>
                                    <td>{{$telescopeEntry["batch_id"]}}</td>
                                    <td>{{$telescopeEntry["family_hash"]}}</td>
                                    <td>{{$telescopeEntry["should_display_on_index"]}}</td>
                                    <td>{{$telescopeEntry["type"]}}</td>
                                    <td>{{$telescopeEntry["content"]}}</td>
                                    <td>{{$telescopeEntry["created_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/telescope-entry/{{$telescopeEntry['id']}}">Edit</a>

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
