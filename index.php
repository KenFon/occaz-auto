<?php
$title='Bienvenue';
require_once 'class/Cars.php';
include "Elements/header.php";
$test = $voitures->show_cars();
//voiture->photo ça me donne le chemin de la photo correspondant a la voiture.
//voiture->marque ça me donne la marque de la voiture correspondant.
?>

<?php include "Elements/nav.php"?>


        <main class="main_index brown darken-3">
         <section class="carousel " >
            <div class="owl-carousel owl-theme">
               <?php foreach ($test as $voiture) :?>
                  <div style="background-image:url(<?=$voiture->photo?>)">
                     <a href="pages/product.php?slug=<?=$voiture->slug?>" class="t1"><?=$voiture->marque ?> - <?=$voiture->model?> - <?= $voiture->km ?> Km</a>
                  </div>
               <?php endforeach ?>
            </div>
         </section>

         </main>

         

<?php include "Elements/footer.php" ?>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            nav: true,
            autoplay: true,
            loop: true,
        });
    });
</script>