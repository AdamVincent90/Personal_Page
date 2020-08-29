@extends('layouts.app')
@extends('components.footer')
@extends('components.appBar')

@section('content')
    <div class="container pt-5 mb-0">
        <h1>University Modules and grades</h1>
        <p>Below are a list of my University modules that demonstrate some of the skills I developed during University</p>
        <table class="table table-hover table-dark mt-5 text-center mb-0">
            <thead>
            <tr>
                <th scope="col">Module</th>
                <th scope="col">Grade</th>
                <th scope="col">Year</th>
                <th scope="col">Learning Outcome(s)</th>
            </tr>
            </thead>
            <tbody>

            @if($grades)
                @foreach($grades as $grade)
            <tr>
                <th>{{$grade['module']}}</th>
                <td>{{$grade['grade']}}</td>
                <td>{{$grade['year']}}</td>
                <td class="text-left">{{$grade['learning_outcome']}}</td>
            </tr>
            @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection