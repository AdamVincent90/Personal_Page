<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/theme.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Personal Web Page</title>
</head>
<body>
@yield('appBar')
<div class="bg-dark min-vh-100 mb-0 pt-2">
    @yield('content')
</div>
@yield('footer')
</body>
</html>