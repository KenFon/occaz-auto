<?php
$title = 'produit';
include "../Elements/header.php";
include "../Elements/nav.php";

$slug =(isset($_GET['slug'])? $_GET['slug'] : false);
$voiture = $voitures->show_cars(['slug' => $slug]);
$historique = $users->historique($voiture[0]->id);
?>

  <main class="container main_product z-depth-3">

    <div class="row center-align">
      <div class="col s8 offset-s2">

        <img class="materialboxed" width="650" src="../<?=$voiture[0]->photo?>">

      </div>
      <div class="col s12">
          <h1><?=$voiture[0]->marque?> - <?=$voiture[0]->model?></h1>
      </div>
      <div class='col s12'>
          <?=$voiture[0]->description?>
      </div>
      <div>

        <table class="striped">
        <thead>
          <tr>
              <th>Informations supplémentaires</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Marque</td>
            <td><?=$voiture[0]->marque?></td>
          </tr>
          <tr>
            <td>Modèle</td>
            <td><?=$voiture[0]->model?></td>
          </tr>
          <tr>
            <td>Prix</td>
            <td><?=$voiture[0]->prix?> €</td>
          </tr>
          <tr>
            <td>Garantie</td>
            <td><?=$voiture[0]->garantie?> Mois</td>
          </tr>
          <tr>
            <td>Nombre de chevaux</td>
            <td><?=$voiture[0]->nbchevaux?> ch</td>
          </tr>
          <tr>
            <td>Kilomètrage</td>
            <td><?=$voiture[0]->km?> km</td>
          </tr>
          <tr>
            <td>Couleur</td>
            <td><?=$voiture[0]->couleur?></td>
          </tr>
          <tr>
            <td>Type</td>
            <td><?=$voiture[0]->type?></td>
          </tr>
          <tr>
            <td>Carburant</td>
            <td><?=$voiture[0]->carburant?></td>
          </tr>
          <tr>
            <td>Année</td>
            <td><?=$voiture[0]->annee?></td>
          </tr>
        </tbody>
      </table>

      </div>

    </div>

    <form action="../Elements/handling/wishlisthistorique.php" method="POST">
    <?php
    $wishlist = explode(",", $infoUsers['wishlist']);
    $verifWishlist = in_array($voiture[0]->id, $wishlist);
    if ($verifWishlist==0) :?>
      <button name="ajoutWishlistIdVoiture" value="<?= $voiture[0]->id ?>">Ajouter la voiture a la wishlist</button>
    <?php else :?>
      <button name="modificationWishlistIdVoiture" value="<?= $voiture[0]->id ?>">Supprimer la voiture de la wishlist</button>
    <?php endif ?>
    </form>

</main>

<?php include "../Elements/footer.php"?>

