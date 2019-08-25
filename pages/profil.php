<?php $title = "Profil";
include "../Elements/header.php";
include "../Elements/nav.php";
?>

    <main class="row main_admin">
        <div class="col s3 admin_panel">
            <ul class="menu_admin">
                <li><a class="active" href="#infos">Mes Infos</a></li>
                <li><a href="#wishlist">Ma wishlist</a></li>
                <li><a href="#historique">Mon historique</a></li>
            </ul>
        </div>

        <div class="col s8 content active" id="infos">
            <?php if ($infoUsers['photo'] != 'Il y a eut une erreur inconnue, ressayez !') :?>
                <img class="responsive-img" src="../<?= $infoUsers['photo']; ?>">
            <?php endif; ?>

            <h2><?= $infoUsers['nom']." ".$infoUsers['prenom']; ?></h2>
            <p><?= $infoUsers['adresse']; ?></p>
        </div>
        <div class="col s8 content" id="wishlist">
            <h2>Wishlist</h2>

            <?php $infoCars = $voitures->show_cars(["id_cars" => $infoUsers['wishlist']]);
            foreach ($infoCars as $infocars) :?>
                <img src="../<?= $infocars->photo;?>">
                <a href="product.php?slug=<?= $infocars->slug;?>"><p>	Marque : <?= $infocars->marque;?> Model : <?= $infocars->model;?> </p></a>
                <form action="../Elements/handling/wishlisthistorique.php" method="POST">
                    <button class="btn" name="modificationWishlistSlugVoiture" value="<?= $infocars->slug ?>">Supprimer la voiture de la wishlist</button>
                </form>
            <?php endforeach; ?>

            <form action="../Elements/handling/wishlisthistorique.php" method="POST">
                <?php $verifWishlist = $infoUsers['wishlist'];
                if ($verifWishlist!=null) :?>
                    <button class="btn" name="suppressionWishlistIdVoiture" value="<?= $voiture[0]->id ?>">Supprimer les voitures de la wishlist</button>
                <?php endif ?>
            </form>

        </div>
        <div class="col s8 content" id="historique">
            <h2>Historique</h2>
            <?php if (empty($_SESSION['historique'])) { echo '<p>Aucun historique</p>'; }
            else {
                $infoCars = $voitures->show_cars(["id_cars" => $_SESSION['historique']]);
                foreach ($infoCars as $infocars) :?>
                    <img src="../../<?= $infocars->photo;?>">
                    <a href="product.php?slug=<?= $infocars->slug;?>"><p>	Marque : <?= $infocars->marque;?> Model : <?= $infocars->model;?> </p></a>
                <?php endforeach; } ?>
        </div>
    </div>
</main>


<?php include "../Elements/footer.php"?>