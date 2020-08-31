<style>

    div {
        color: #e6fae6;
    }
</style>

@section('footer')
    <footer class="card-footer bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center">© 2020 Copyright: Adam Vincent</div>
        <p class="text-center mt-0 pt-0">Developed with
            <a href="https://getbootstrap.com/">Bootstrap</a>
            and <a href="https://laravel.com/">Laravel!</a></p>
        @if(isset(\Illuminate\Support\Facades\Auth::user()->email))
            <a class="float-right p-0 m-0 text-white-50" href="/login/logout">Logout</a>
        @else
            <a class="float-right text-white" href="/login">Login</a>
        @endif
    </footer>
@endsection