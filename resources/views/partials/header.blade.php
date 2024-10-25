<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
@php
    $routes = [
    [
        'method' => 'GET',
        'path' => '/',
        'controller' => 'Closure',
        'action' => 'return view(\'welcome\', [\'comics\' => config(\'comics\')]);'
    ],
    [
        'method' => 'GET',
        'path' => '/chi-siamo',
        'controller' => 'MainController',
        'action' => 'about',
        'name' => 'chi-siamo'
    ],
    [
        'method' => 'GET',
        'path' => '/comics',
        'controller' => 'ComicController',
        'action' => 'index'
],
    [
        'method' => 'GET',
        'path' => '/exit',
        'controller' => 'exitController',
        'action' => 'about'
    ]
];

@endphp






<header>
   
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                   
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('chi-siamo') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('exit') }}">  over comics</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
