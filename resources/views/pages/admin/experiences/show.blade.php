@extends('layouts.admin.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Experiences
                <small style="font-size:0.6em"><a href="{{route('clients.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add experience</a></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-users"></i><a href="{{route('clients.index')}}"> Experiences </a>
                </li>
                <li class="active">
                    <i class="fa fa-user"></i> {{ $client->first_name }} {{ $client->last_name }}
                </li>
            </ol>

            <h1 style="font-size: 1.6em">{{ $client->full_name }} <small style="font-size: 0.8em"><b> ~ {{ $client->company }}</b></small> </h1>

            <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Company</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Added at</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="col-sm-1"><a href="{{ route('clients.show', ['id' => $client->id]) }}">{{ isset($client->id) ? $client->id : '' }}</a></th>
                        <th class="col-sm-2"><a href="{{ route('clients.show', ['id' => $client->id]) }}">{{ isset($client->first_name) ? $client->first_name : '' }}</a></th>
                        <th class="col-sm-2">{{ isset($client->company) ? $client->company : '' }}</th>
                        <th class="col-sm-1">{{ isset($client->email) ? $client->email : '' }}</th>
                        <th class="col-sm-1">{{ isset($client->phone) ? $client->phone : '' }}</th>
                        <th class="col-sm-2">{{ isset($client->created_at) ? $client->created_at->format('d-m-Y') : '' }}</th>
                        <th class="col-sm-1">
                            <a href="{{ route('clients.edit', ['id' => $client->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['actions.destroy', $client->id], 'id' => 'form-delete-' . $client->id]) !!}
                            <a href="" class="data-delete" data-form="{{ $client->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                            {!! Form::close() !!}
                        </th>
                    </tr>
                </tbody>
            </table>

            </br>
            <div class="row">
                <div class="col-lg-12">
                    <h2><small>Actions for this experience</small></h2>
                </div>
            </div>
            </br>

            <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>What is going on?</th>
                    <th>Deadline</th>
                    <th>Finished</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Action::where(['client_id' => $client->id])->get() as $action)
                    <tr>
                        <th scope="row" class="col-sm-1">{{ $action->id }}</th>
                        <th class="col-sm-2">{{ $action->subject }}</th>
                        <th class="col-sm-3">{{ isset($action->body) ? $action->body : '' }}</th>
                        <th class="col-sm-2">{{ $action->created_at->format('d-m-Y') }}</th>
                        <th class="col-sm-1">{{ $action->finished === 0 ? 'No' : 'Yes' }}</th>
                        <th class="col-sm-1">
                            <a href="{{ route('actions.edit', ['id' => $action->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['actions.destroy', $action->id], 'id' => 'form-delete-' . $action->id]) !!}
                            <a href="" class="data-delete" data-form="{{ $action->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                            {!! Form::close() !!}
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- /.row -->

@stop
