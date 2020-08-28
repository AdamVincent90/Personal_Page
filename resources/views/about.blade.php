@extends('layouts.app')
@extends('footer')
@extends('appBar')

@section('content')
    <div class="container" style="margin-bottom: 0">
        <div class="row text-center">
            <x-profile/>
        </div>
        <h1>The things I like &#128522</h1>
        <div class="row">
        @if($hobbies)
            @foreach($hobbies as $hobby)
                @component('components.hobby')
                    @slot('name')
                        {{$hobby['name']}}
                        @endslot
                    @endcomponent
             @endforeach
        @endif
        </div>
        <div class="row mb-0">
            <div class="col col-lg-2 col-sm-1 col-xs-1 bg-dark border-bottom align-self-center"></div>
        <div class="text-center mb-0 pb-2 col col-lg-8 col-xs-10">
                <img class="w-100 shadow img-fluid" src="{{asset('static/football.jpg')}}" alt="Football Hobby Image"/>
        </div>
            <div class="col col-lg-2 col-sm-1 col-xs-1 bg-dark border-bottom align-self-center"></div>
        </div>
    </div>

@endsection