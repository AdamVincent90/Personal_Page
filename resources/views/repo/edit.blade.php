@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')


@section('content')
    <div class="container">
        <h1 class="pt-5">Edit This Repository</h1>
        <form class="pb-3" method="post" action="/repositories/{{$repo[0]->repository_id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input class="btn-danger float-left" type="submit" value="Delete Repository" name="submit">
            {{csrf_field()}}
        </form>
        <form class="form-group" method="post" action="/repositories/{{$repo[0]->repository_id}}">
            <input type="hidden" name="_method" value="PUT">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="name" value="{{$repo[0]->name}}">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="languages" value="{{$repo[0]->languages}}">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="description" value="{{$repo[0]->description}}">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="link" value="{{$repo[0]->link}}">
            <input class="btn-warning" type="submit" value="Edit Repository" name="submit">
            {{csrf_field()}}
        </form>
    </div>
@endsection