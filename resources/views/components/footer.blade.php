<style>

    div {
        color: #e6fae6;
    }
</style>

@section('footer')
    <footer class="card-footer font-small blue bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center">© 2020 Copyright: Adam Vincent
            @if(isset(\Illuminate\Support\Facades\Auth::user()->email))
                <a class="float-right m-0 p-0" href="/login/logout">Logout</a>
                @else
                <a class="float-right m-0 p-0" href="/login">Login</a>
                @endif
        </div>
        <p  class="text-center mt-0 mr-5">Developed with <a href="https://getbootstrap.com/">Bootstrap</a> and <a href="https://laravel.com/">Laravel!</a></p>
    </footer>
    @endsection