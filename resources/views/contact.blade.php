@extends('layouts.app')
@extends('footer')
@extends('appBar')

@section('content')
    <div class="container pt-5 contact">
        <h1>My Contact Details</h1>
        <p>Below are my contact details if you would like to get in touch!</p>
        <div class="row text-center pt-2 mb-0">
            <div class="col col-12">
                <i class="fas fa-envelope"> Email Address</i>
                <li class="nav-link"><a href="mailto: juddulat@gmail.com">juddulat@gmail.com</a></li>
            </div>

            <div class="col col-12">
                <i class="fa fa-phone"> Contact Number</i>
                <li class="nav-link">07903016783</li>
            </div>
        </div>
        <div class="row text-center">
            <a class="col col-4" href="https://www.linkedin.com/in/adamvincentuk/"><i class="fab fa-linkedin"></i></a>
            <a class="col col-4" href="https://www.facebook.com/Judduuk/"><i class="fab fa-facebook"></i></a>
            <a class="col col-4" href="https://github.com/AdamVincent90"><i class="fab fa-github"></i></a>
        </div>
        <div class="col col-12 text-center">
            <a class="btn" href="https://www.dropbox.com/s/ognh4szjb99q6zz/AdamVincentCV.docx?dl=0">View my resume!</a>
        </div>
    </div>
@endsection