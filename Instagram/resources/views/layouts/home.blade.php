@extends('layouts.app')

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Instagram
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('create') }}">Subir Imagen</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-right"></i> Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                        <a class="dropdown-item" href="">
                                            <i class="bi bi-person-circle"></i> Perfil
                                        </a>
                                        <a class="dropdown-item" href="{{ route('config') }}">
                                            <i class="bi bi-gear"></i> Ajustes
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="container__avatar">
                                    @include('includes.avatar')
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                @include('includes.message')

                @foreach ($images as $image)
                    <div class="card mb-3">
                        <div class="card-header">

                            @if ($image->user->image)
                                <img src="{{ route('avatar', $image->user->image) }}" alt="Avatar" class="rounded-circle">
                            @endif

                            <div class="data-user">
                                {{ $image->user->name. ' '. $image->user->surname }}
                                <span class="text-black-50">| {{ '@'.$image->user->nick }} </span>
                            </div>
                        </div>


                        <div class="card-body">
                            <img src="{{ route('avatar.image', $image->image_path) }}" alt="Avatar" class="rounded-circle">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>