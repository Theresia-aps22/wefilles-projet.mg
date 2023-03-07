<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeFilles</title>

    <link rel="stylesheet" href="{{asset('entreprise')}}/css/entreprise.css">
    <link rel="stylesheet" type="text/css" href="{{asset('blank')}}/css/blank.css">
    <link rel="stylesheet" type="text/css" href="{{asset('blank')}}/css/app.css">
</head>
<body>
    <div class="pill-nav">
        <ul class="pill-nav">
            <li>
                <a href="/actualite">Actualité</a>
            </li>
            <li>
                <a href="">Entreprise</a>
            </li>
            <li>
                <a href="/offre">Offre d'emploi</a>
            </li>  
            <li>
                <a href="#">Forum</a>
            </li>  
            <li>
                <a href="/Formation">Formation</a>
            </li> 

            <li>   
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                  </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
        </ul>
    </div>
    @yield('content')
    <script src="{{asset('entreprise')}}/js/entreprise.js"></script>
</body>
</html>