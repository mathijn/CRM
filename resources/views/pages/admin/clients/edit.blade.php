@extends('layouts.admin.default')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">
            Edditing <small>{{ $data['client']['first_name'] }} {{ $data['client']['last_name'] }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-users"></i><a href="{{route('clients.index')}}"> Clients </a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> Edit client
            </li>
        </ol>
    </div>
    <!-- /.row -->
    <div class="container col-sm-11">

        {{ Html::ul($errors->all()) }}

        {{ Form::model($data['client'], ['route' => ['clients.update', $data['client']['id']], 'method' => 'PUT']) }}

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
            {{ Form::label('email', 'E-mail:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('email', Input::old('email'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('phone', 'Phone:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('phone', Input::old('phone'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('company', 'Company:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('company', Input::old('company'), ['class' => 'form-control']) }}
            </div>
        </div>

        <fieldset class="form-group row">
            {{ Form::label('category', 'Category:', ['class' => 'col-sm-2 col-form-label']) }}
        </fieldset>
        <div class="col-sm-10">
            @foreach($data['client_categories'] as $category)
                {!! Form::radio('category_id', $category->id, Input::old('category_id'), ['class'=>'form-check-input']) !!} {{ $category->name }} <br>
            @endforeach
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-10">
                {{ Form::submit('Update', ['class' => 'col-sm-10 btn btn-primary']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>

@stop