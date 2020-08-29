@extends('layouts.app')
@extends('components.footer')
@extends('components.appBar')

@section('content')
    <div class="container pt-5 mb-0">
        <h1>Manage Hobbies</h1>
        <table class="table table-hover table-dark mt-5 text-center mb-0">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            @if($hobbies)
                @foreach($hobbies as $hobby)
                    <tr>
                        <td>{{$hobby->name}}</td>
                        <td><a href="{{route('about.edit', $hobby->id)}}" class="btn">Manage</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection