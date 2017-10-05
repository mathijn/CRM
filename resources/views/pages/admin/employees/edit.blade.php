@extends('layouts.admin.default')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">
            Edditing <small>{{ $employee['first_name'] }} {{ $employee['last_name'] }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-users"></i><a href="{{route('employees.index')}}"> Employees </a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> Edit employee
            </li>
        </ol>
    </div>
    <!-- /.row -->
    <div class="container col-sm-11">

        {{ Html::ul($errors->all()) }}

        {{ Form::model($employee, ['route' => ['employees.update', $employee['id']], 'method' => 'PUT']) }}

        <div class="form-group row">
            {{ Form::label('first_name', 'First name:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('first_name', Input::old('first_name'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('last_name', 'Last name:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('last_name', Input::old('last_name'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('place', 'Place:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('place', Input::old('place'), ['class' => 'form-control']) }}
            </div>
        </div>
    <?php
        ?>
        <div class="form-group row">
            {{ Form::label('birth_date', 'Birth date:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('birth_date', $employee->birth_date->format('d-m-Y') , ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('job_title', 'Job title:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('job_title', Input::old('job_title'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('description', 'Description:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('description', Input::old('description'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('driver_license', 'Driver license', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::select('driver_license', ['B' => 'B','None' => 'None'] , 'B', ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-10">
                {{ Form::submit('Save', ['class' => 'col-sm-10 btn btn-primary']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>

@stop