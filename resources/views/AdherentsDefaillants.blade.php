@extends('layouts.afterConnectionMaster')

@section('content')
    <div class="row page-titles" style="margin-top: 20px; margin-left: 20px;">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Adherents Defaillants</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Adherents Defaillants</li>
            </ol>
        </div>

    </div>

    <div class="row" style="margin-top: 20px; margin-left: 20px; margin-right: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 600px;">
                                    Nom
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="2" aria-label="Date: activate to sort column ascending" style="width: 50px;">
                                    Decision
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('layouts.partials._modalsExc_Susp')
                            <?php $noms = ['Airi Satou',
                                'Angelica Ramos',
                                'Ashton Cox',
                                'Bradley Greer',
                                'Brenden Wagner',
                                'Brielle Williamson',
                                'Bruno Nash',
                                'Caesar Vance',
                                'Cara Stevens',
                                'Cedric Kelly',]?>

                            @foreach($noms as $nom)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$nom}}</td>
                                    <td>
                                        <div class="btn btn-info" alt="default" data-toggle="modal" data-target="#myModal1">Suspendre</div>
                                    </td>
                                    <td>
                                        <div class="btn btn-info" alt="default" data-toggle="modal" data-target="#myModal2">Exclure</div>
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