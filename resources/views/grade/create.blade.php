@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')


@section('content')
    <div class="container">
        <h1 class="pt-5">Create A Grade</h1>
        <form class="form-group" method="post" action="/grades">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="module" placeholder="Module Name">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="grade" placeholder="Grade" maxlength="2">
            <input class="form-control-plaintext bg-light mb-2" type="number" name="year" placeholder="University Year (1, 2, 3)">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="learning_outcome" placeholder="What was learned?">
            <input class="btn" type="submit" value="Add Grade" name="submit">
            {{csrf_field()}}
        </form>
    </div>
@endsection