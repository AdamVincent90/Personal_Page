@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')
@extends('auth.checkSession')


@section('content')
    <div class="container">
        <h1 class="pt-5">Create A Hobby</h1>
        <form class="form-group" method="post" action="/about">
            <input class="form-control-plaintext bg-light mb-2" type="text" name="name" placeholder="Name of Hobby">
            <input class="btn" type="submit" value="Add Hobby" name="submit">
            {{csrf_field()}}
        </form>
    </div>
@endsection