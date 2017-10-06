@extends('layouts.admin.default')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">
            Adding experience for {{ \App\Models\Employee::where(['id' => $_GET['employee_id']])->first()->full_name }}
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-users"></i><a href="{{route('experiences.index')}}"> Experiences </a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> Add experience
            </li>
        </ol>
    </div>

    <!-- /.row -->
    <div class="container col-sm-11">

        {{ Html::ul($errors->all()) }}

        {{ Form::open(['url' => 'experiences']) }}

            {{ Form::hidden('employee_id', $_GET['employee_id']) }}


            <div class="form-group row">
                {{ Form::label('subject', 'Subject:', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::text('subject', Input::old('subject'), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('company_id', 'Which company?', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::select('company_id', App\Models\Company::get()->pluck('name', 'id') , null, ['class' => 'form-control', 'placeholder' => 'Choose a client...']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('date_from', 'From:', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::date('date_from', Input::old('date_from'), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('date_to', 'To:', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::date('date_to', Input::old('date_to'), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('motivation', 'Motivation:', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::text('motivation', Input::old('motivation'), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('description', 'Description:', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::text('description', Input::old('description'), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('experiences', 'Experiences:', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    {{ Form::text('experiences', Input::old('experiences'), ['class' => 'form-control']) }}
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