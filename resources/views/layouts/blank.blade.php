<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeFilles</title>

    <link rel="stylesheet" href="{{asset('entreprise')}}/css/entreprise.css">
    <link rel="stylesheet" type="text/css" href="{{asset('blank')}}/css/blank.css">
</head>
<body>
    <div class="pill-nav">
        <a href="#">Actualité</a>
        <a href="{{route('entreprise.index')}}">Entreprise</a>
        <a href="#">Offre d'emploi</a>
        <a href="#">Forum</a>
        <a href="#">Déconnexion</a>
    </div>
    @yield('content')
    <script src="{{asset('entreprise')}}/js/entreprise.js"></script>
</body>
</html>