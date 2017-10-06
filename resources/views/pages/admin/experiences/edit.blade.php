@extends('layouts.admin.default')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">
            Edditing <small>{{ $experience['first_name'] }} {{ $experience['last_name'] }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i><a href="{{route('dashboard')}}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-users"></i><a href="{{route('experiences.index')}}"> Experiences </a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> Edit experience
            </li>
        </ol>
    </div>
    <!-- /.row -->
    <div class="container col-sm-11">

        {{ Html::ul($errors->all()) }}

        {{ Form::model($experience, ['route' => ['experiences.update', $experience['id']], 'method' => 'PUT']) }}

        <div class="form-group row">
            {{ Form::label('subject', 'Subject:', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('subject', Input::old('subject'), ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('body', 'What to do?', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::text('body', Input::old('body'), ['class' => 'form-control']) }}
            </div>
        </div>


        <div class="form-group row">
            {{ Form::label('client_id', 'Which client?', ['class' => 'col-sm-2 col-form-label']) }}
            <div class="col-sm-10">
                {{ Form::select('client_id', App\Models\Client::get()->pluck('full_name', 'id') , null, ['class' => 'form-control', 'placeholder' => 'Choose a client...']) }}
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