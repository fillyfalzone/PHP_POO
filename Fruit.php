<?php
     require_once "common/header.php";
     require_once "common/menu.php";
     require_once "Class/FruitClass.php";
?>
<h1>fruit market</h1>
<h2>buy your fruit</h2>

<?php

    $apple1 = new Fruit(Fruit::APPLE, 5);
    $apple2 = new Fruit(Fruit::APPLE, 12);
    
    $pear1 = new Fruit(Fruit::PEAR, 3);
    
    $orange1 = new Fruit(Fruit::ORANGE, 10);

    $grapes1 = new Fruit(Fruit::GRAPES, 5);
    $grapes2 = new Fruit(Fruit::GRAPES, 6);


    // store static method on a variable
    $listFruits = Fruit::showFruits();

    //loop to show all fruits 
    foreach($listFruits as $fruit){
        echo $fruit; 
    }
?> 

<?php require_once "common/footer.php";?>