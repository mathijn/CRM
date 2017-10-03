@extends('layouts.admin.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Actions
                <small style="font-size:0.6em"><a href="{{route('actions.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add action</a></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-users"></i> Actions
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
        <thead>
        <tr>
            <th>#</th>
            <th>Subject</th>
            <th>What is going on?</th>
            <th>Client</th>
            <th>Deadline</th>
            <th>Finished</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($actions as $action)
            <tr>
                <th scope="row" class="col-sm-1">{{ $action->id }}</th>
                <th class="col-sm-2">{{ $action->subject }}</th>
                <th class="col-sm-3">{{ isset($action->body) ? $action->body : '' }}</th>
                <th class="col-sm-2"><a href="{{ route('clients.show', ['id' => $action->client->id]) }}" >{{ $action->client->full_name }}</a></th>
                <th class="col-sm-2">{{ $action->created_at->format('d-m-Y') }}</th>
                <th class="col-sm-1">{{ $action->finished === 0 ? 'No' : 'Yes' }}</th>
                <th class="col-sm-2">
                    <a href="{{ route('actions.edit', ['id' => $action->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['actions.destroy', $action->id], 'id' => 'form-delete-'.$action->id]) !!}
                        <a href="#" role="submit" class="data-delete" data-form="{{ $action->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                    {!! Form::close() !!}
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
