<?php 
$test1 = $_SERVER["PHP_SELF"];

$chemin = explode("/", $test1);

$km= [50000,100000,150000,200000];

$color= ['Noir ','Bleu ','Rouge ','Gris '];

$test4=$voitures->show_cars();
$arr_marques = [];
$arr_color = [];
foreach ($test4 as $voiture) {
    if(!in_array($voiture->marque, $arr_marques)){
        $arr_marques[] = $voiture->marque;
    }

    if(!in_array($voiture->couleur, $arr_color)){
        $arr_color[] = $voiture->couleur;
    }

}

?>

<nav>
    <div class="navCat z-depth-3">
        <div class="logo">Occaz-Auto</div>
        <div class="categorieForm col s8">
          <form class="row valign-wrapper menu-form" method="POST" action="../pages/gallerie.php">
            <div class="input-field col s2">
              <select name="marque">
                  <option value="" disabled selected>Marque</option>
                <?php
                for ($i=0; $i<count($arr_marques); $i++){
                    echo "<option value='".$arr_marques[$i]."'>".$arr_marques[$i]."</option>";
                }
                ?>
              </select>
            </div>

            <div class="input-field col s2">
              <select name="km">
                  <option value="" disabled selected>Kilométrage</option>
                <?php

                for ($i=0; $i<count($km); $i++){
                    echo "<option value='".$km[$i]."'> - de ".$km[$i]." km</option>";
                }
                ?>
              </select>
                </div>
                <div class="input-field col s2">
              <select name="couleur">
                  <option value="" disabled selected>Couleur</option>

                  <?php

                for ($i=0; $i<count($color); $i++){
                    echo "<option value='".$arr_color[$i]."'>".$arr_color[$i]."</option>";
                }
                ?>
              </select>
              </div>
              <div class="input-field col s2">
              <select name="carburant">
                  <option value="" disabled selected>Moteur</option>
                  <option value="0">Diesel</option>
                  <option value="1">Essence</option>
                  <option value="2">Hybride</option>
              </select>
            </div>
            <div class='col s2'>
              <button class="btn_rechercher btn" type="submit"/>Rechercher</button>
            </div>
            </form>
        </div>
        <div id ="connexion">
            <div>
                <form action="<?php if(end($chemin)!="index.php"){echo "../"; }?>Elements/handling/redirectioncodeco.php" method="POST">
                    <?php if (isset($_SESSION['idUsers'])):?>
                        <button type="submit" class="bouton" value="deco" name="codeco">Deconnexion</button>
                        </form>
                        <a href="<?php if(end($chemin)=="index.php"){echo "pages/"; }?>profil.php"><button>profil</button></a>
                    <?php else : ?>
                        <button type="submit" class="boutonsucces btn" value="co" name="codeco">Se connecter</button>
                        </form>
                    <?php endif ?>
                <div class="navigation">

                    <a href="<?php if(end($chemin)!="index.php"){echo "../"; }?>index.php"><button class="btn">Accueil</button></a>
                    <a href="<?php if(end($chemin)=="index.php"){echo "pages/"; }?>gallerie.php"><button class="btn">Nos voitures</button></a>
                <?php if (isset($_SESSION['idUsers'])) {
                    $infoUsers = $users->infoUsers($_SESSION['idUsers']);
                    if ($infoUsers['statue']==1) {
                ?>
                <a href="<?php if(end($chemin)=="index.php"){echo "pages/"; }?>admin.php"><button class="btn">Admin</button></a>
                <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</nav>