@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')


@section('content')
<div class="container">
    <h1 class="pt-5">Create A Repository</h1>
    <form class="form-group" method="post" action="/repositories">
        <input class="form-control-plaintext bg-light mb-2" type="text" name="name" placeholder="Name of Repository">
        <input class="form-control-plaintext bg-light mb-2" type="text" name="languages" placeholder="Main Language">
        <input class="form-control-plaintext bg-light mb-2" type="text" name="description" placeholder="Repository Description">
        <input class="form-control-plaintext bg-light mb-2" type="text" name="link" placeholder="Link to Repository">
        <input class="btn" type="submit" value="Add Repository" name="submit">
        {{csrf_field()}}
    </form>
</div>
    @endsection