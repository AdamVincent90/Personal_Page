@section('appBar')

    <nav class="navbar navbar-expand-lg">
        @if($_SESSION['email'])<h1>FALSE</h1> @endif
        <a class="navbar-brand" href="#">Adam Vincent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons">menu</i>
        </button>
        <div class="collapse navbar-collapse mb-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about"><i class="fas fa-coffee">  About Me!</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/repositories"><i class="fab fa-github" style="font-size: inherit">  GitHub Repositories</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/grades"><i class="fas fa-book">  University Modules</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact"><i class="fas fa-phone">  Contact and Resume</i></a>
                </li>
            </ul>
            <div class="text-center mr-0 my-2 my-lg-0">
                <a class="ml-6" href="https://www.linkedin.com/in/adamvincentuk/"><i class="fab fa-linkedin"></i></a>
                <a class="ml-3 mr-3" href="https://www.facebook.com/Judduuk/"><i class="fab fa-facebook"></i></a>
                <a class="mr-6" href="https://github.com/AdamVincent90"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </nav>


@endsection