<?php $title = "Galerie";
include "../Elements/header.php";
include "../Elements/nav.php";
if(!isset($_POST)){
    $voitures = $voitures->show_cars();
}else{
    if(isset ($_POST['km'])){
        $_POST['km'] = intval($_POST['km']);
    }
    if(isset($_POST['carburant'])){
        $_POST['carburant'] = intval($_POST['carburant']);
    }
    $voitures = $voitures->show_cars($_POST);
}

?>


  <main class="row container main_galerie">

<?php foreach ($voitures as $voiture) :?>
    <div class="row col m3 s12 card_voiture">
      <div class="col s12">
        <div class="card">
          <div class="card-image">
            <img src="../<?=$voiture->photo?>">
            <a class="btn-floating halfway-fab waves-effect waves-light" href='product.php?slug=<?= $voiture->slug?>'><i class="material-icons button">+</i></a>
          </div>
          <div class="card-content perso">
              <span class="card-title"><?= $voiture->marque ?> - <?=$voiture->model?></span>
            <p><?= mb_strimwidth($voiture->description, 0, 30, '...')?></p>
          </div>
            <div class="card-action center-align brown darken-3">
                <a href="product.php?slug=<?= $voiture->slug?>"><?= $voiture->prix?> € </a>
            </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</main>

<script>


</script>
<?php include "../Elements/footer.php"?>
