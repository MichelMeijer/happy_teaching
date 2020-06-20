@extends('layout')

@section('content')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <div class="container maincontent bottom_margin">
        <div class="row justify-content-center">
            <h2>Export</h2>
        </div>

        <form class="export" method="POST" action="/export">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf

                <h2>Cursussen</h2>
                <br>
                <input type="checkbox" id="inkt" name="creatief-inkt" value="Creatief met inkt">
                <span id="creatief-text">Creatief met inkt</span>
                <br>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">
        </div>
    </div>

    <script type="text/javascript" src="{{URL::asset('js/welcome.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/export.js')}}"></script>


@endsection
