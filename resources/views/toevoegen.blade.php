@extends('layout')

@section('content')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">



    <div class="container maincontent bottom_margin">
        <div class="row justify-content-center">
            <h2 class="beoordeling">Beoordeling</h2>
        </div>


        <div class="row justify-content-center">
            <form class="post_beoordeling_form" method="POST" action="/beoordeling_form">
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

                <div class="row">
                    <div class="field col-lg-6 col-md-6 mb-12">
                        <label class="label" for="title">Naam</label>
                        <div class="control">
                            <input type="text" class="input" name="naam" value="naam">
                        </div>
                    </div>

                    <div class="field col-lg-6 col-md-6 mb-12">
                        <label class="label" for="country">Cursus</label>
                        <div class="control">
                            <input type="text" class="input" id="cursus_input" aria-label="Text input with dropdown button" name="cursus" value="Cursus">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kies cursus</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" onclick="chooseCourse(this)" href="#">Creatief met inkt</a>
                                <a class="dropdown-item" onclick="chooseCourse(this)" href="#">1 liter in 30 seconden</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="field col-lg-6 col-md-6 mb-12">
                        <label class="label" for="geslacht">Geslacht</label>
                        <div class="control">
                            <input type="text" class="input" id="gender_input" aria-label="Text input with dropdown button" name="geslacht" value="geslacht">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kies Geslacht</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" onclick="chooseGender(this)" href="#">Man</a>
                                <a class="dropdown-item" onclick="chooseGender(this)" href="#">Vrouw</a>
                            </div>
                        </div>
                    </div>

                    <div class="field col-lg-6 col-md-6 mb-12">
                        <label class="label" for="beoordeling">Beoordeling</label>
                        <div class="control">
                            <input type="text" class="input" id="beoordeling_input" aria-label="Text input with dropdown button" name="beoordeling" value="beoordeling">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beoordeling</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" onclick="chooseBeoordeling(this)" href="#">Geweldig</a>
                                <a class="dropdown-item" onclick="chooseBeoordeling(this)" href="#">Goed</a>
                                <a class="dropdown-item" onclick="chooseBeoordeling(this)" href="#">Gewoon</a>
                                <a class="dropdown-item" onclick="chooseBeoordeling(this)" href="#">Slecht</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class ="row">
                    <div class="field col-lg-6 col-md-6 mb-12">
                        <label class="label" for="leeftijd">Leeftijd</label>
                        <div class="control">
                            <input type="number" class="input" name="leeftijd" value=>
                        </div>
                    </div>

                    <div class="field col-lg-6 col-md-6 mb-12">
                        <label class="label" for="suggesties">Suggesties</label>
                        <div class="control">
                            <textarea name="suggesties" class="textarea">Geef hier uw suggesties op</textarea>
                        </div>
                    </div>
                </div>




                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{URL::asset('js/welcome.js')}}"></script>

@endsection

