@extends('layouts.afterConnectionMaster')

@section('menu')
    <li><a href="index.html" class="active scroll">Accueil</a></li>
    <li><a href="#about" class="scroll">Liste des emprunts</a></li>
    <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2">Somme deposee</a></li>

    {{-- Mettre un if pour l'afficher a la fin de la de l'exercice --}}
    <li><a class="active" href="#" data-toggle="modal" data-target="#myModal3">Interets Genere</a></li>
    @include('layouts.partials._modalSommeDep_IntG')
@stop

@section('content')
    <div class="row page-titles" style="margin-top: 20px; margin-left: 20px;">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Liste des emprunts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Liste emprunts en cours</li>
            </ol>
        </div>
    </div>

    {{--<div id="compte_a_rebours"><noscript>Fin des souscriptions le 1er juillet 2018.</noscript></div>--}}
    <div class="row" style="margin-top: 20px; margin-left: 20px; margin-right: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><div class="btn btn-danger"><i class="fa fa-book"></i>  <a> Emprunts en cours </a> </div></div>
                    <div class="row" style="float: right;">
                        <div class="signin-form">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="table-responsive" >
                        <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 600px;">Matricule</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 600px;">Nom</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 600px;">Prenom</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 600px;">Numero CNI</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 600px;">Telephone</th>
                            </tr>
                            </thead>
                            <tbody>

                            @include('layouts.partials._modalsExc_Susp')

                            @foreach($adherents as $ad)
                                <tr role="row" class="odd" id="">
                                    <td class="sorting_1">{{$ad['matricule']}}</td>
                                    <td class="sorting_1">{{$ad['nom']}}</td>
                                    <td class="sorting_1">{{$ad['prenom']}}</td>
                                    <td class="sorting_1">{{$ad['numCni']}}</td>
                                    <td class="sorting_1">{{$ad['telephone']}}</td>
                                    {{--@include('layouts.partials._modalsSous_Emp')--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop