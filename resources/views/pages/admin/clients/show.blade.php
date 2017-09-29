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
                <li>
                    <i class="fa fa-users"></i><a href="{{route('clients.index')}}"> Clients </a>
                </li>
                <li class="active">
                    <i class="fa fa-user"></i> {{ $data['client']['first_name'] }} {{ $data['client']['last_name'] }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    HERE WILL ALL THE DATA BE DISPAYED: <br>
    {{ $data['client'] }}
@stop
