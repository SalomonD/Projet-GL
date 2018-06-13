@extends('layouts.homeMaster')

@section('icon_header')
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i> Mon compte
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="#" >Mon Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" style="color: black;">Listes des adherents</a>
            <a class="dropdown-item" href="#" style="color: black;">Adherents defaillants</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" style="color: black;">Repartitions</a>
        </div>
    </li>
@stop

@section('other_menu')
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestion services <span class="fa fa-angle-double-down"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Gestion des emprunts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Listes des adherents</a>
            <a class="dropdown-item" href="#">Adherents defaillants</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Repartitions</a>
        </div>
    </li>
@stop

@section('banner')
    @include('layouts.partials._bannerAfterConn')
@stop
