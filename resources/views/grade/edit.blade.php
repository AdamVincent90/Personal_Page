@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')


@section('content')
    <div class="container">
        <h1 class="pt-5">Edit This Module</h1>
        <form class="pb-3" method="post" action="/grades/{{$grade[0]->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input class="btn-danger float-left" type="submit" value="Delete Module" name="submit">
            {{csrf_field()}}
        </form>
        <form class="form-group" method="post" action="/grades/{{$grade[0]->id}}">
            <input type="hidden" name="_method" value="PUT">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="module" value="{{$grade[0]->module}}">
            <input class="form-control-plaintext bg-light mb-2" maxlength="2" type="text" name="grade" value="{{$grade[0]->grade}}">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="learning_outcome" value="{{$grade[0]->learning_outcome}}">
            <input class="form-control-plaintext bg-light mb-2" type="number" name="year" value="{{$grade[0]->year}}">
            <input class="btn-warning" type="submit" value="Edit Grade" name="submit">
            {{csrf_field()}}
        </form>
    </div>
@endsection