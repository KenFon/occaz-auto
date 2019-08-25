<?php $title = "Inscription";
include "../Elements/header.php";
include "../Elements/nav.php";
?>
<main class="main_inscription container">
    <div class="z-depth-3 form_inscription">
        <h1 class="center-align">Inscription</h1>
        <form action="../Elements/handling/creationusers.php" method="POST" name="inscription" enctype="multipart/form-data">
            <div class="input-field col s4">
                <input placeholder="Nom" id="nom" type="text" class="validate" name="nom">
                <label for="marque">Nom</label>
            </div>

            <div class="input-field col s4">
                <input placeholder="Prénom" id="nom" type="text" class="validate" name="prenom">
                <label for="marque">Prenom</label>
            </div>


            <div class="input-field col s6">
                <h6>Photo de profil</h6>
                <input id="img" type="file" class="validate" name="photo">
            </div>

            <div class="input-field col s4">
                <input placeholder="Adresse" id="adresse" type="text" class="validate" name="adresse">
                <label for="adresse">Adresse</label>
            </div>

            <div class="input-field col s4">
                <input placeholder="Email" id="email" type="text" class="validate" name="email">
                <label for="email">Adresse Mail</label>
            </div>

            <div class="input-field col s4">
                <input placeholder="Votre mot de passe" id="mdp" type="password" class="validate" name="mdp">
                <label for="mdp">Mot de passe</label>
            </div>

            <button class="btn btn_admin" type="submit" value="créer un compte" >Créer un Compte</button>
            <p><?php if (isset($_SESSION['erreur'])) { echo $_SESSION['erreur']; } ?></p>
        </form>
    </div>
</main>

<?php include "../Elements/footer.php"?>