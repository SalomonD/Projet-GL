<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Nouvel Emprunt</h3>
                    <div class="login-form">
                        <form action="#" method="post">
                        {{csrf_field()}}
                            <input type="text" name="matricule" placeholder="Matricule" required="">
                            <input type="text" name="montant" placeholder="Montant" required="">
                            <div class="tp">
                                <input type="submit" value="Verification">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal fade" id="#{{$ad['matricule']}}">
    <div class="modal-dialog">
        <!-- Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Souscription</h3>
                    <div class="login-form">
                        <form method="post" action="{{route('parts.souscription',$ad->matricule)}}"  enctype="multipart/form-data">
                        {{csrf_field()}}
                            <h5 style="text-align: left">Etape 1:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="montantSous" name="montantSous" placeholder = "Montant" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Nombre de Parts:</label>
                                    <span id = "parts">0</span>   
                                </div>
                            </div>
                            <br>
                            <br>
                            <h5 style="text-align: left">Etape 2:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Methode de paiemnet : </h6>
                                </div>
                                <div class="col-md-8">
                                    <select name="modeP" id="modeP">
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                    </select>
                                </div>
                                <br>
                                <br>
                                <br>
                                <h6>Veuillez entrer votre code : </h6>
                                <div class="row">
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                </div>
                            </div>
                            <div class="tp">
                                <input type="submit" value="Verification" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
 <div class="modal fade" id="{{$ad['matricule']}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Souscription</h3>
                    <div class="login-form">
                        <form method="post" action="{{url('adherent/'.$ad->matricule.'/souscription')}}"  enctype="multipart/form-data">
                        {{csrf_field()}}
                            <h5 style="text-align: left">Etape 1:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" id="">
                                    <input type="text" id="montantSous" name="montantSous" placeholder = "Montant" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Nombre de Parts:</label>
                                    <span id = "parts">0</span>   
                                </div>
                            </div>
                            <br>
                            <br>
                            <h5 style="text-align: left">Etape 2:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Methode de paiemnet : </h6>
                                </div>
                                <div class="col-md-8">
                                    <select name="modeP" id="modeP">
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                        <option value="visa">VISA</option>
                                    </select>
                                </div>
                                <br>
                                <br>
                                <br>
                                <h6>Veuillez entrer votre code : </h6>
                                <div class="row">
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                    <div class="col-md-3 signin-form"><input type="text" placeholder="0000"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary" >Enregistrer</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    