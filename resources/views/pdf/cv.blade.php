
@extends('pdf.layouts.default')
@section('content')
<?php
/**
 * @var \App\Models\Employee $employee
 * @var \App\Models\Experience $experience
**/
?>
<main>
    <div class="page">
        <div class="page_element">
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
            <h2 class="title">Profiel</h2>
            <p>
                {{ $employee->description }}
            </p>

            <h3 class="title">Persoonlijke motivatie</h3>
            <p>
                {{ $employee->motivation }}
            </p>
        </div>
    </div>

    <div class="page-break-after"></div>

    <div class="page">
        <div class="page_element">
            <h2 class="title">Overzicht opdrachten</h2>
            @foreach($employee->experiences as $experience)
                <div id="table">
                    <table class="table full-width">
                        <tbody>
                        <tr>
                            <th class="table-column-name"></th>
                            <td> <h3>{{ $experience->subject }}</h3> </td>
                        </tr>
                        <tr>
                            <th>Periode</th>
                            <td class="col-sm-10">{{ $experience->period_from->format('d-m-Y') }} tot {{ $experience->period_to->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <th>Opdrachtgever:</th>
                            <td> {{ $experience->company->name }}</td>
                        </tr>
                        <tr>
                            <th>Werkzaamheden</th>
                            <td>{{ $experience->description }}</td>
                        </tr>
                        <tr class="last_row">
                            <th>Methoden & technieken</th>
                            <td>{{ $experience->experiences }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br/>
            @endforeach
        </div>
    </div>

</main>
@stop()