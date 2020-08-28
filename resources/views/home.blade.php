@extends('layouts.app')
@extends('footer')
@extends('appBar')

@section('content')

    <div class="container pt-5 mb-0">
        <h1>My GitHub Repositories</h1>
        <p>Select to view one of the repositories I worked on. Please note, some projects are currently in development and may be incomplete</p>
        <div class="row justify-content-center m-0">
            @if($repos)
                @foreach($repos as $repo)
                    @component('components.git-card')
                        @slot('name')
                            {{$repo['name']}}
                        @endslot
                        @slot('description')
                            {{$repo['description']}}
                        @endslot
                        @slot('languages')
                            {{$repo['languages']}}
                        @endslot
                            @slot('link')
                                {{$repo['link']}}
                            @endslot
                    @endcomponent
                @endforeach
            @endif
        </div>
    </div>
@endsection