@extends('layouts.admin.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Clients
                <small style="font-size:0.6em"><a href="{{route('clients.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add client</a></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-users"></i> Clients
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data['clients'] as $client)
            <tr>
                <th scope="row" class="col-sm-1"><a href="{{ route('clients.show', ['id' => $client->id]) }}">{{ isset($client->id) ? $client->id : '' }}</a></th>
                <th class="col-sm-2"><a href="{{ route('clients.show', ['id' => $client->id]) }}">{{ isset($client->first_name) ? $client->first_name : '' }}</a></th>
                <th class="col-sm-2"><a href="{{ route('clients.show', ['id' => $client->id]) }}a">{{ isset($client->last_name) ? $client->last_name : '' }}</a></th>
                <th class="col-sm-2">{{ isset($client->company) ? $client->company : '' }}</th>
                <th class="col-sm-1">{{ isset($client->email) ? $client->email : '' }}</th>
                <th class="col-sm-1">{{ isset($client->phone) ? $client->phone : '' }}</th>
                <th class="col-sm-1">
                    <a href="{{ route('clients.edit', ['id' => $client->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['actions.destroy', $client->id], 'id' => 'form-delete-' . $client->id]) !!}
                        <a href="" class="data-delete" data-form="{{ $client->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                    {!! Form::close() !!}
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
