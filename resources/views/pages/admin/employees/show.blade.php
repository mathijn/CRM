@extends('layouts.admin.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Employees
                <small style="font-size:0.6em"><a href="{{route('employees.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add employee</a></small>
                <small style="font-size:0.6em"><a target="_blank" href="{{route('pdf', ['id' => $employee->id])}}"><i class="fa fa-id-card-o" aria-hidden="true"></i> generate cv</a></small>
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
            <th>Profile description</th>
            <th>Motivation</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" style="width:10px;"><a href="{{ route('employees.show', ['id' => $employee->id]) }}">{{ $employee->id }}</a></th>
                <th class="col-sm-2"><a href="{{ route('employees.show', ['id' => $employee->id]) }}">{{ $employee->full_name }}</a></th>
                <th class="col-sm-1">{{ $employee->place }}</th>
                <th class="col-sm-1">{{ $employee->birth_date->format('d-m-Y') }}</th>
                <th class="col-sm-1">{{ $employee->driver_license }}</th>
                <th class="col-sm-1">{{ $employee->job_title }}</th>
                <th class="col-sm-3">{{ str_limit($employee->description, $limit = 100, $end = '...') }}</th>
                <th class="col-sm-3">{{ str_limit($employee->motivation, $limit = 100, $end = '...') }}</th>
                <th class="col-sm-1">
                    <a href="{{ route('employees.edit', ['id' => $employee->id]) }}"><i id="edit-btn" class="fa fa-pencil-square-o"></i></a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['employees.destroy', $employee->id], 'id' => 'form-delete-'.$employee->id]) !!}
                    <a href="#" role="submit" class="data-delete" data-form="{{ $employee->id }}"><i id="edit-btn" class="fa fa-times"></i></a>
                    {!! Form::close() !!}
                </th>
            </tr>
        </tbody>
    </table>


    <div id="exTab2">
        <ul class="nav nav-tabs">
            <li class="active">
                <a  href="#1" data-toggle="tab">Experience</a>
            </li>
            <li><a href="#2" data-toggle="tab">Education</a>
            </li>
            <li><a href="#3" data-toggle="tab">Computer skills</a>
            </li>
        </ul>
        <?php //hl TAB 1 --------------------------------------------------------------------------------------------------?>
        <div class="tab-content ">
            <div class="tab-pane active" id="1">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>
                            <small style="font-size:0.6em"><a href="{{route('experiences.create', ['employee_id' => $employee->id])}}"><i class="fa fa-plus" aria-hidden="true"></i> add experience</a></small>
                        </h2>
                    </div>
                </div>
                </br>
                <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Period from</th>
                        <th>Period to</th>
                        <th>The client</th>
                        <th>The assignment</th>
                        <th>Experiences</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Experience::where(['employee_id' => $employee->id])->get() as $experience)
                        <tr>
                            <th scope="row" class="col-sm-1">{{ $experience->id }}</th>
                            <th class="col-sm-1">{{ $experience->period_from->format('d-m-Y') }}</th>
                            <th class="col-sm-1">{{ $experience->period_to->format('d-m-Y') }}</th>
                            <th class="col-sm-1">{{ $experience->company->name }}</th>
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
            </div>
			<?php //hl TAB 2 --------------------------------------------------------------------------------------------------?>
            <div class="tab-pane" id="2">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>
                            <small style="font-size:0.6em"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> add experience XX</a></small>
                        </h2>
                    </div>
                </div>
                </br>
                <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Education</th>
                        <th>School</th>
                        <th>When?</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Education::where(['employee_id' => $employee->id])->get() as $education)
                        <tr>
                            <th scope="row" class="col-sm-1">{{ $education->id }}</th>
                            <th class="col-sm-2">{{ $education->education }}</th>
                            <th class="col-sm-2">{{ $education->school }}</th>
                            <th class="col-sm-1">{{ $education->date->format('Y') }}</th>
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
            </div>
			<?php //hl TAB 3 --------------------------------------------------------------------------------------------------?>
            <div class="tab-pane" id="3">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>
                            <small style="font-size:0.6em"><a href="{{route('employees.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> add experience</a></small>
                        </h2>
                    </div>
                </div>
                </br>
                <table style="font-size: 0.9em" class="table table-hover table-custom" id="table-custom">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Period from</th>
                        <th>Period to</th>
                        <th>The client</th>
                        <th>The assignment</th>
                        <th>Experiences</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Experience::where(['employee_id' => $employee->id])->get() as $experience)
                    <tr>
                        <th scope="row" class="col-sm-1">{{ $experience->id }}</th>
                        <th class="col-sm-1">{{ $experience->period_from->format('d-m-Y') }}</th>
                        <th class="col-sm-1">{{ $experience->period_to->format('d-m-Y') }}</th>
                        <th class="col-sm-1">{{ $experience->company->name }}</th>
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
            </div>
        </div>
    </div>



@stop
