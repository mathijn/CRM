@extends('layouts.admin.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Experience
                <small style="font-size:0.6em"><a href="{{route('experiences.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add experience</a></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-users"></i> Experience
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
        <thead>
        <tr>
            <th>#</th>
            <th>Employee</th>
            <th>Period from</th>
            <th>Period to</th>
            <th>The client</th>
            <th>The assignment</th>
            <th>Experiences</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($experiences as $experience)
            <tr>
                <th scope="row" class="col-sm-1">{{ $experience->id }}</th>
                <th scope="row" class="col-sm-1">{{ $experience->employee->full_name }}</th>
                <th class="col-sm-1">{{ $experience->period_from->format('d-m-Y') }}</th>
                <th class="col-sm-1">{{ $experience->period_to->format('d-m-Y') }}</th>
                <th class="col-sm-1"><a href="{{ route('clients.show', ['id' => $experience->client->id]) }}">{{ $experience->client->company }}</a></th>
                <th class="col-sm-3">{{ $experience->description }}</th>
                <th class="col-sm-1">{{ $experience->experiences }}</th>
                <th class="col-sm-1">
                    <a href="{{ route('experiences.edit', ['id' => $experience->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['experiences.destroy', $experience->id], 'id' => 'form-delete-'.$experience->id]) !!}
                        <a href="#" role="submit" class="data-delete" data-form="{{ $experience->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                    {!! Form::close() !!}
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
