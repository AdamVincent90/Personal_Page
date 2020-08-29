@extends('layouts.app')
@extends('components.footer')
@extends('components.appBar')

@section('content')
    <div class="container pt-5 mb-0">
        <h1>Manage Modules and Grades</h1>
        <table class="table table-hover table-dark mt-5 text-center mb-0">
            <thead>
            <tr>
                <th scope="col">Module</th>
                <th scope="col">Grade</th>
                <th scope="col">Learning Outcome</th>
                <th scope="col">University Year</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            @if($grades)
                @foreach($grades as $grade)
                    <tr>
                        <td>{{$grade->module}}</td>
                        <td>{{$grade->grade}}</td>
                        <td>{{$grade->learning_outcome}}</td>
                        <td>{{$grade->year}}</td>
                        <td><a href="{{route('grades.edit', $grade->id)}}" class="btn">Manage</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection