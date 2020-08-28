@section('appBar')

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Adam Vincent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons">menu</i>
        </button>
        <div class="collapse navbar-collapse mb-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-coffee">About Me!</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home"><i class="fas fa-home">GitHub Repositories</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grades"><i class="fas fa-book">University Grades</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact"><i class="fas fa-phone">Contact and Resume</i></a>
                </li>
            </ul>
            <div class="mr-2 my-2 my-lg-0">
                <a class="mr-2" href="https://www.linkedin.com/in/adamvincentuk/"><i class="fab fa-linkedin"></i></a>
                <a class="mr-2" href="https://www.facebook.com/Judduuk/"><i class="fab fa-facebook"></i></a>
                <a class="mr-2" href="https://github.com/AdamVincent90"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </nav>


@endsection