@extends('layout')

@section('content')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <div class="container maincontent bottom_margin">
        <div class="row justify-content-center">
            <h2>Overzicht</h2>
        </div>

        <table id="beoordelingen">
            <tr>
                <th>Naam</th>
                <th>Geslacht</th>
                <th>Leeftijd</th>
                <th>Cursus</th>
                <th>Beoordeling</th>
                <th>Suggesties</th>
            </tr>

        @foreach ($beoordelingen as $beoordeling)
                <tr>
                    <td>{{ $beoordeling->naam }} </td>
                    <td>{{ $beoordeling->geslacht }}</td>
                    <td>{{ $beoordeling->leeftijd }}</td>
                    <td>{{ $beoordeling->cursus }}</td>
                    <td>{{ $beoordeling->beoordeling }}</td>
                    <td>{{ $beoordeling->suggestie }}</td>
                </tr>
        @endforeach
        </table>


        <div class="row justify-content-center">
        </div>
    </div>

    <script type="text/javascript" src="{{URL::asset('js/welcome.js')}}"></script>

@endsection
