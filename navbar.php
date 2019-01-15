<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><h3>Boris Vian</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="mediateque.php">Mediateque <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php if(empty($_COOKIE['id'])) { ?>

        <form class="form-inline my-2 my-lg-0" role="form" method="post" action="Traitement/traitementConnexion.php">
            <div class="form-group">
                <input type="email" class="form-control" name="mail" placeholder="Adresse mail" required>
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="btn btn-default"><font size=2>Connexion</font></button>
        </form>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inscription.php">Inscription <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        <?php } elseif(isset($_COOKIE['id'])) {
            include("APP/connexionPDO.php");
            $id = $_COOKIE['id'];
            $req = $bdd->prepare('SELECT * FROM information WHERE id= :id');
            $req-> execute(array('id'=>$id));
            $donnees= $req->fetch();
            echo $donnees['mail'];
            echo '<a href="Traitement/traitementDeconnexion.php">Deconnexion</a>';
        } ?>
    </div>
</nav>