@extends('layouts.admin.default')
@section('content')


    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Clients
                            <small style="font-size:0.6em"><a href='add_client.php'"><i class="fa fa-plus" aria-hidden="true"></i> add client</a></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="dashboard.php"> Dashboard</a>
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
                        <th>Date</th>
                        <th></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>

@stop
