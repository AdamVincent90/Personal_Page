@extends('layouts.app')
@extends('components.footer')
@extends('components.appBar')

@section('content')
    <div class="container pt-5 mb-0">
        <h1>Manage Repositories</h1>
        <table class="table table-hover table-dark mt-5 text-center mb-0">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Languages</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            @if($repos)
                @foreach($repos as $repo)
                <tr>
                    <td>{{$repo->name}}</td>
                    <td>{{$repo->languages}}</td>
                    <td>{{$repo->description}}</td>
                    <td>{{$repo->link}}</td>
                    <td><a href="{{route('repositories.edit', $repo->repository_id)}}" class="btn">Manage</a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection