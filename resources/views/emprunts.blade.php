@extends('layouts.afterConnectionMaster')

@section('content')

    <div class="row page-titles" style="margin-top: 20px; margin-left: 20px;">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Liste des Emprunts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Liste des Emprunts</li>
            </ol>
        </div>
    </div>

    <div class="row" style="margin-top: 20px; margin-left: 20px; margin-right: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row" style="float: right;">
                        <div class="signin-form">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="table-responsive" >
                        <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Matricule</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nom</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Prenom</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Numero CNI</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Telephone</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="3" aria-label="Date: activate to sort column ascending" style="width: 100px;">Decision</th>
                            </thead>
                            <tbody>

                            @foreach($adherents as $ad)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$ad['matricule']}}</td>
                                    <td class="sorting_1">{{$ad['nom']}}</td>
                                    <td>{{$ad['prenom']}}</td>
                                    <td>{{$ad['numCni']}}</td>
                                    <td>{{$ad['telephone']}}</td>
                                    <td> <div class="btn btn-primary" alt="default" data-toggle="modal" data-target="#{{$ad['matricule']}}" onclick = "modal()">Rembourser</div> </td>
                                    @include('layouts.partials._partial_retour')

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