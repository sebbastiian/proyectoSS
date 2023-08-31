<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="/css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="/css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="/css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="/css/style.css"/>

        {{-- MY CUSTOM --}}
        <link rel="stylesheet" href="/css/infotop.css">
        <link rel="stylesheet" href="/css/searchbar.css">
 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

</head>
<body>
            <!-- HEADER -->
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container espacioingresar">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +57 320 328 2358</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> distrimapale@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Bosa Brasilia, Bogotá DC</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->
    
    
        <!-- MAIN HEADER -->
        <div id="header" class="displayheader">
            <div class="container">
                <div class="row displayheader">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="./img/logomd.png" alt="" style="width: 100px">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
    
                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-searchh">
                            <input class="inputsrch" placeholder="Busca aquí">
                            <button class="search-botn"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
    
                    <!-- ACCOUNT -->
                    <div class="col-md-4 clearfix">
                        <div class="header-ctn">
                            <div>
                                <a href="#">
                                    <i class="fa fa-map-o"></i>
                                    <span>Ubicación</span>
                                </a>
                            </div>
    
                            <!-- Wishlist -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Favoritos</span>
                                    <div class="qty">2</div>
                                </a>
                                <!-- ... Resto del código de Favoritos ... -->
                            </div>
                            <!-- /Wishlist -->
    
                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Carrito</span>
                                    <div class="qty">3</div>
                                </a>
                                <!-- ... Resto del código del Carrito ... -->
                            </div>
                            <!-- /Cart -->
    
                            <!-- Menu Toggle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toggle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
            </div>
        </div>


        <!-- /MAIN HEADER -->
<x-app-layout>    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Profile') }}
    </h2>
</x-slot></x-app-layout>




</body>
</html>

<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')

            <x-section-border />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-section-border />
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>

            <x-section-border />
        @endif

        <div class="mt-10 sm:mt-0">
            @livewire('profile.logout-other-browser-sessions-form')
        </div>

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        @endif
    </div>
</div>