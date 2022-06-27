<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionnaire de produit</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="shortcut icon" href={{ asset('img/logo.png') }} type="image/x-icon">
    {{-- font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href= {{ asset('css/produit.css') }}>
    {{--    DATATABLES--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.css"/>
    <title>Liste des produits</title>
</head>

<body>
<div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4" style="background-color: #1AD6DB">
        @if(auth()->check())
            <ul>
                <li class="nav-item">
                    <a href="/" style="color: #1a202c;" class="nav-link" {{ request()->is('accueil') ? 'is-active' : '' }}"><i class="fas fa-home"></i>&nbsp; Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="/ajout" style="color: #1a202c;" class="nav-link" {{ request()->is('ajout') ? 'is-active' : '' }}"><i class="fas fa-plus"></i>&nbsp; Ajouter un Produit</a>
                </li>
                <li class="nav-item">
                    <a href="/liste" style="color: #1a202c;" class="nav-link" {{ request()->is('liste') ? 'is-active' : '' }}"><i class="fas fa-dolly-flatbed"></i>&nbsp; Liste des Produits</a>
                </li>
                <li class="nav-item">
                    <a href="/deconnexion" style="color: #1a202c;" class="nav-link"><i class="fas fa-sign-out-alt"></i>&nbsp; Déconnexion</a>
                </li>
            </ul>
        @else
            <ul>
                <li class="nav-item">
                    <a href="/" style="color: #1a202c;" class="nav-link" {{ request()->is('accueil') ? 'is-active' : '' }}"><i class="fas fa-home"></i>&nbsp; Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="/connexion" style="color: #1a202c;" class="nav-link" {{ request()->is('connexion') ? 'is-active' : '' }}"><i class="fas fa-sign-in-alt"></i>&nbsp; Connexion</a>
                </li>
                <li class="nav-item">
                    <a href="/inscription" style="color: #1a202c;" class="nav-link" {{ request()->is('inscription') ? 'is-active' : '' }}"><i class="fas fa-user-plus"></i>&nbsp; Inscription</a>
                </li>
            </ul>
        @endif
    </div>
</div>
<!-- BARRE DE NAVIGATION -->
<nav class="navbar navbar-light mynavbar">
        <div class="container-fluid">
            <a class="navbar-brand" {{ request()->is('accueil') ? 'is-active' : '' }} href="/">
                <img src={{ asset('img/logo.png') }} width="40" height="40">&nbsp;
                Gestions de produits
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
</nav>

     <div class="container">
         @include('flash::message')

        @yield('contenu')
     </div>



<footer class="footer  text-center text-white" style="color:#ffffff;background-color:#13A4A7;padding:0 ">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
                ></a>

            <!-- Twitter -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
                ></a>

            <!-- Google -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
                ></a>

            <!-- Instagram -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- Linkedin -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
                ></a>
            <!-- Github -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="p-4" style="background-color: #D1E7DD">
        <p style="color:#000000">Projet de DIACK Cheikh Mohamed Tidiane &middot;&middot;&nbsp;&&nbsp;&middot;&middot; MBAYE Ndeye Fatou &copy; LPTI 3 - DAR., &copy; 2020-2021</p>
    </div>
    <!-- Copyright -->
</footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src= {{ asset('js/produit.js') }} ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.js"></script>
    <script>
        $('.mydatatable').DataTable({
            searching:false
        });
    </script>
</body>
</html>


