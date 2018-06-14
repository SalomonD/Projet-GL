<div class="modal fade" id="{{$ad['matricule']}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Remboursement</h3>
                    <div class="login-form">
                        <form method="post" action="{{url('adherent/'.$ad->matricule.'/reboursement')}}"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Montant</label>
                                </div>
                                <div class="col-md-6" id="">
                                    <input type="text" name="montantR" placeholder="Montant">
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary" >Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
