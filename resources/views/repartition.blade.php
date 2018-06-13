@extends('layouts.afterConnectionMaster')

@section('content')
    <div class="row page-titles" style="margin-top: 20px; margin-left: 20px;">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Repartitions</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Repartitions</li>
            </ol>
        </div>
    </div>

    <div class="row" style="margin-top: 20px; margin-left: 20px; margin-right: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Interet Global: <span style="font-size: 30px">1 200 000 FCFA</span></div>
                    <div class="row" style="float: right;">
                        <div class="signin-form">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="table-responsive" >
                        <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Nom: activate to sort column descending" aria-sort="ascending" style="width: 498px;">Nom Adherent</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 329px;">Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Depot: activate to sort column ascending" style="width: 308px;">Interet</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 308px;">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 308px;">C.N.A.P</th>
                                </tr>
                            </thead>
                            <tbody>

                            @include('layouts.partials._modalsSous_Emp')

                            @include('layouts.partials._modalsExc_Susp')
                            <?php $noms = [
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ],
                                ['nom' => 'Airi Satou',
                                    'date' => '2008/11/28',
                                    'interet' => '$162,700',
                                    'statut' => '$162,700',
                                    'CNAP' => '$162,700'
                                ]


                            ]?>

                            @foreach($noms as $nom)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$nom['nom']}}</td>
                                    <td>{{$nom['date']}}</td>
                                    <td>{{$nom['interet']}}</td>
                                    <td>{{$nom['statut']}}</td>
                                    <td>{{$nom['CNAP']}}</td>
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