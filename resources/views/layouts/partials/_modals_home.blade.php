<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Se connecter</h3>
                    <div class="login-form">
                        <form action="/login" method="post">
                        {{ csrf_field() }} 
                        <input type="hidden" name="redirurl" value="{{ $_SERVER['REQUEST_URI'] }}">
                            <input type="text" name="matricule" placeholder="Matricule"  value="{{old('maricule')}}">
                            <input type="password" name="passwd" placeholder="Mot de passe" >
                            <div class="tp">
                                <input type="submit" value="Connexion">
                            </div>
                        </form>
                    </div>
                    <p>Pas encore membre ?<a href="#" data-toggle="modal" data-target="#myModal3" > S'inscrire ici!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal2 -->
<!-- Modal3 -->
<div class="modal fade" id="myModal3" tabindex="-2" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">S'inscrire</h3>
                    <div class="login-form">
                        <form action="{{route('inscription')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="redirurl"  value="{{ $_SERVER['REQUEST_URI'] }}">
                            <input type="text" name="name" placeholder="Nom" required="">
                            <input type="text" name="prename" placeholder="Prénom" required="">
                            <input type="text" name="cni" placeholder="Numero CNI" required="">
                            <input type="text" name="number" placeholder="Numero de telephone" required="">
                            <input type="password" name="passwd" placeholder="Mot de passe" required="">
                            <input type="password" name="confirmpwd" placeholder="Confirmer mot de passe" required="">
                            <input type="submit" value="Enregistrer">
                        </form>
                    </div>
                    <p>Deja membre ?<a href="#" data-toggle="modal" data-target="#myModal2" > Se connecter ici !</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal3 -->