<!-- Je fais une div contenant ma navbar du bas (footer) -->
<?php
$test2 = $_SERVER["PHP_SELF"];

$cheminjs = explode("/", $test2);

if(end($cheminjs)=="index.php")
  {
  $cheminjs = "javascript/main.js";
  }
else
 {
   $cheminjs = "../javascript/main.js";
 }
 ?>


<footer class=" row page-footer brown darken-3">

    <div class="col s4 offset-s1">
      <p> 426 rue Gutenberg à Calais</p>
    </div>

    <div class="col s4">
        <a href="http://www.facebook.fr"><img class="responsive-img" src="../img/divers/facebook.png" alt="icone instagram"></a>
        <a href="http://www.twitter.com"><img class="responsive-img" src="../img/divers/twitter.png" alt="icone instagram"></a>
        <a href="http://www.instagram.fr"><img class="responsive-img"src="../img/divers/instagram.png" alt="icone facebook"></a>
    </div>

    <div class="col s1 offset-s2">
        <?php echo'<medium>&copy; copyright '.date('Y').'</medium>'; ?>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= $cheminjs ?>"></script>

</body>
</html>

