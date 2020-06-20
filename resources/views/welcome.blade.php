@extends('layout')

@section('content')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">



    <div class="container maincontent bottom_margin">
        <div class="row justify-content-center">
            <h2>Welkom</h2>
        </div>


        <div class="row justify-content-center">
        </div>
    </div>

<script type="text/javascript" src="{{URL::asset('js/welcome.js')}}"></script>

@endsection

