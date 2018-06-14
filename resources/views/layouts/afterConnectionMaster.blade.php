@extends('layouts.homeMaster')

@section('icon_header')

    @if(Auth::check())

        <li><a class="active" href="#"><i class="fa fa-user" aria-hidden="true"></i>Bienvenue {{session()->get('matricule')}}</a> </li>
        <li><a href="{{url('/logout')}}" ><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnexion</a> </li>
    @else
        <li>{{session()->get('matricule')}}!</li>
        <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Se connecter</a> </li>
        <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> S'inscrire</a> </li>

    @endif

@stop

@section('menu')
    <li><a href="index.html" class="active scroll">Accueil</a></li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestion Adherents <span class="fa fa-angle-double-down"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Liste de adherents</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Adherents Defaillants</a>
        </div>
    </li>
    <li><a href="#about" class="scroll">Gestion des emprunts</a></li>
    <li><a href="#services" class="scroll">Bilan</a></li>
@stop

@section('other_menu')

@stop

@section('banner')
    @include('layouts.partials._bannerAfterConn')
@stop
