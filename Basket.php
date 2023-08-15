<?php
     require_once "common/header.php";
     require_once "common/menu.php";
     require_once "Class/BasketClass.php";
     require_once "Class/FruitClass.php";
?>
<h1>Fruits Basket</h1>
<h2>the contents of the basket</h2>

<?php
      $apple1 = new Fruit(Fruit::APPLE, 5);
      $apple2 = new Fruit(Fruit::APPLE, 12);
      
      $pear1 = new Fruit(Fruit::PEAR, 3);
      
      $orange1 = new Fruit(Fruit::ORANGE, 10);
      $orange2 = new Fruit(Fruit::ORANGE, 13);
  
      $grapes1 = new Fruit(Fruit::GRAPES, 5);
      $grapes2 = new Fruit(Fruit::GRAPES, 6);

      $basket1 = new Basket();
      $basket1->addFruit($apple1);
      $basket1->addFruit($orange1);

      $basket2 = new Basket();
      $basket2->addFruit($grapes1);
      $basket2->addFruit($orange2);
      $basket2->addFruit($apple2);

      $basket3 = new Basket();
      $basket3->addFruit($orange1);
      $basket3->addFruit($apple2);
      $basket3->addFruit($grapes2);

      echo $basket1;
      echo $basket2;
      echo $basket3;
?>


<?php require_once "common/footer.php";?>