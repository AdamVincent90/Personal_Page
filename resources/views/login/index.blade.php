@extends('layouts.app')
@extends('components.appBar')
@extends('components.footer')

@section('content')
    <div class="container">
        <h1 class="pt-5">Login</h1>
        <div class="text-center container w-50 shadow pt-5">
            @if($message = \Illuminate\Support\Facades\Session::get('error'))
                    <strong>{{$message}}</strong>
                @endif
            <form action="{{url('/login/validation')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-form-label">Email</label>
                    <input class="form-control" type="email" name="dni" placeholder="email">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <input class="btn mb-5" type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
@endsection