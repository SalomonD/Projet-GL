<!-- listAdherents.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des Adhérents</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div id="compte_a_rebours"><noscript>Fin des souscriptions le 1er juillet 2018.</noscript></div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Télephone</th>
        <th>Date d'Adhésion </th>
        <th>Etat</th>
        <th>Actionnaire</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($adherents as $ad)
      @php
        /*$date=date('Y-m-d', $ad['dateAdhesion']);*/

        if($ad['estActionnaire']==0){
          $act='Non';
        }else{
          $act='Oui';
        }
        if($ad['etat']==0){
          $etat='Non Actif';
        }else{
          $etat='Actif';
        }
        @endphp
      <tr>
        <td>M {{$ad['matricule']}}</td>
        <td>{{$ad['nom']}}</td>
        <td> {{$ad['prenom']}}</td>
        <td>{{$ad['telephone']}}</td>
        <td>{{$ad['dateAdhesion']}}</td>
        <td>{{$etat}}</td>
        <td>{{$act}}</td>
        
        <td><a data-target="#{{$ad['matricule']}}" data-toggle="modal" class="btn btn-primary">Souscription</a></td>
        <div class="modal fade" id="{{$ad['matricule']}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Nouvelle Souscription</h4>
                </div>
                <form method="post" action="#"  enctype="multipart/form-data">
                  {{csrf_field()}}
                <div class="modal-body">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label for="prename">Montant:</label>
                    <input type="text" class="form-control" name="montant" id="montant" value="{{ old('montant') }}" >
                    <span id = "msg_prenom"></span>
                  </div>
                </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
               </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
        <td><a href="{{action('NewAdherentController@edit', $ad['matricule'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('NewAdherentController@destroy', $ad['matricule'])}}" method="post">
          {{csrf_field()}} 
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <script type="text/javascript">
    var compte_a_rebours = document.getElementById("compte_a_rebours");
  </script>
  <script>
           /* $(document).ready(function(){
                $('#bouton').click(function(){
                    $("#souscription").modal();
                     var id = $(this).attr('id');
                     $("#montant").val(id);
                   return false;
                });
            });*/
</script>
<script src="{{asset('js/adherent.js')}}"></script>
  </body>
</html>