<div class="modal fade" id="{{$ad['matricule']}}" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Suspendre ...?</h3>
                    <div class="login-form">
                        <a href="{{action('NewAdherentController@show',$ad['matricule'])}}" class="btn btn-info">Oui</a>
                        <a class="btn btn-danger" >Non</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Exclure ...?</h3>
                    <div class="login-form">
                        <a herf="{{action('NewAdherentController@create',$ad['matricule'])}}" class="btn btn-info">Oui</div>
                        <a class="btn btn-danger" data-dismiss="modal">Non</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>