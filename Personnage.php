<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
    require_once "Class/PersonnageClass.php";
?>
   
<h1>Personnage</h1>
<h2>create a character class and display their informations</h2>

<?php

  
    // New instance of Personnage class
    $p1 = new Personnage("imgs/pokko.jpg", "Pokko", "17", "Male","The Jaw Titan", Personnage::AGILITY_MAX, Personnage::STRENGTH_MIN, "imgs/machoire.jpg");

    $p2 = new Personnage("imgs/peak.jpg", "Peak", "16", "Female","The Cart Titan", Personnage::AGILITY_MED, Personnage::STRENGTH_MED, "imgs/charette.jpg");

    $p3 = new Personnage("imgs/eren.jpg", "Eren", "17", "Male","The Attacking titan", Personnage::AGILITY_MED, Personnage::STRENGTH_MED, "imgs/assaillant.jpg");

    $persos = Personnage::getListCharacter();

    foreach($persos as $perso){
        echo $perso->showCharacter();
    }   

?>

<?php require_once "common/footer.php";?>
  