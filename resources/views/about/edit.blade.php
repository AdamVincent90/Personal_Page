@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')


@section('content')
    <div class="container">
        <h1 class="pt-5">Manage This Hobby</h1>
        <form class="pb-3" method="post" action="/about/{{$hobby[0]->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input class="btn-danger float-left" type="submit" value="Delete Hobby" name="submit">
            {{csrf_field()}}
        </form>
        <form class="form-group" method="post" action="/about/{{$hobby[0]->id}}">
            <input type="hidden" name="_method" value="PUT">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="name" value="{{$hobby[0]->name}}">
            <input class="btn-warning" type="submit" value="Edit Hobby" name="submit">
            {{csrf_field()}}
        </form>
    </div>
@endsection