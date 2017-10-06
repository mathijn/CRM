@extends('layouts.admin.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Employees
                <small style="font-size:0.6em"><a href="{{route('employees.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add employee</a></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-users"></i> Employees
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Place</th>
            <th>Birth day</th>
            <th>Drivers license</th>
            <th>Job Title</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\Models\Employee::all() as $employee)
            <tr>
                <th scope="row" class="col-sm-1"><a href="{{ route('employees.show', ['id' => $employee->id]) }}">{{ $employee->id }}</a></th>
                <th class="col-sm-2"><a href="{{ route('employees.show', ['id' => $employee->id]) }}">{{ $employee->full_name }}</a></th>
                <th class="col-sm-1">{{ $employee->place }}</th>
                <th class="col-sm-1">{{ $employee->birth_date->format('d-m-Y') }}</th>
                <th class="col-sm-1">{{ $employee->driver_license }}</th>
                <th class="col-sm-1">{{ $employee->job_title }}</th>
                <th class="col-sm-2">
                    <a href="{{ route('employees.edit', ['id' => $employee->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['employees.destroy', $employee->id], 'id' => 'form-delete-'.$employee->id]) !!}
                        <a href="#" role="submit" class="data-delete" data-form="{{ $employee->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                    {!! Form::close() !!}
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
