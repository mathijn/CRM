
@extends('pdf.layouts.default')
@section('content')
<?php
/**
* @var \App\Models\Employee $employee
**/
?>
<main>
    <div class="first_page">
        <div class="page">
            <h1>Curriculum Vitae</h1>
            <p>
                {{ $employee->full_name }}
                <br>
                <span class="small">
                    {{ $employee->birth_date->format('d-m-Y') }}
                </span>
            </p>
        </div>
    </div>

    <div class="page-break-after"></div>

    <div class="page">
        <h2 class="title">Personalia</h2>
        <table class="table">
            <tbody>
            <tr>
                <th class="table-column-name">Naam</th>
                <td>{{ $employee->full_name }}</td>
            </tr>
            <tr>
                <th>Woonplaats</th>
                <td>{{ $employee->place }}</td>
            </tr>
            <tr>
                <th>Geboortedatum</th>
                <td>{{ $employee->birth_date->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Rijbewijs</th>
                <td>{{ $employee->driver_license }}</td>
            </tr>
            <tr>
                <th>Functie</th>
                <td>{{ $employee->job_title }}</td>
            </tr>
            </tbody>
        </table>

    </div>
</main>
@stop()