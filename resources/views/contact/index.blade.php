@extends('layouts.app')
@extends('components.footer')
@extends('components.appBar')

@section('content')
    <div class="container pt-5 contact">
        <h1>My Contact Details</h1>
        <p>Below are my contact details if you would like to get in touch!</p>
        <div class="row text-center pt-2 mb-0">
            <div class="col col-12">
                <i class="fas fa-envelope"> Email Address</i>
                <li class="nav-link"><a href="mailto: Adam.J.Vincent90@gmail.com">Adam.J.Vincent90@gmail.com</a></li>
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
        <a href="https://app.testdome.com/cert/6161b5ddf59140dba30b5575d8cac127" class="testdome-certificate-stamp gold"><span class="testdome-certificate-name">Adam Vincent</span><span class="testdome-certificate-test-name">PHP </span><span class="testdome-certificate-card-logo">TestDome<br />Certificate</span></a><script>var stylesheet = "https://app.testdome.com/content/source/stylesheets/embed.css", link = document.createElement("link"); link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);</script>
    </div>
@endsection