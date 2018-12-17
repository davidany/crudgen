@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Offers</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Offer Pool Id</td>
                            <td scope = "col">Name</td>
                            <td scope = "col">Code</td>
                            <td scope = "col">Url</td>
                            <td scope = "col">Api</td>
                            <td scope = "col">Cost Per Click</td>
                            <td scope = "col">Is Active</td>
                            <td scope = "col">Priority</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($offers)
                            @foreach($offers as $offer)
                                <tr>
                                    <td>{{$offer["id"]}}</td>
                                    <td>{{$offer["offer_pool_id"]}}</td>
                                    <td>{{$offer["name"]}}</td>
                                    <td>{{$offer["code"]}}</td>
                                    <td>{{$offer["url"]}}</td>
                                    <td>{{$offer["api"]}}</td>
                                    <td>{{$offer["cost_per_click"]}}</td>
                                    <td>{{$offer["is_active"]}}</td>
                                    <td>{{$offer["priority"]}}</td>
                                    <td>{{$offer["created_at"]}}</td>
                                    <td>{{$offer["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/offer/{{$offer['id']}}">Edit</a>

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
