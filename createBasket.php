<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   <h1>Create a new basket</h1>

<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
    require_once "Class/BasketClass.php";
    require_once "Class/FruitClass.php";


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
    

    $baskets = [$basket1, $basket2, $basket3];

    echo'<form action="#" method="POST">',
            '<fieldset> <legend> Create a basket</legend>',
                '<label for="selectFruit">Select fruit :</label> ',
                '<select name="selectFruit" id="selectFruit">',
                    '<option value="apple">Apple</option>',
                    '<option value="pear">Pear</option>',
                    '<option value="grappes">Grappes</option>',
                '</select> ',
                '<label for="addWeight">Add Weight :</label> ',
                '<input type="number" name="addWeight" id="addWeight" step="any" min="0" required > ',
                '<label for="selectBasket"> Choose basket : </label> ',
                '<select name="selectBasket" id="selectBasket">',
                    '<option value="newBasket">New basket</option> ';
                    foreach($baskets as $basket){
                        echo'<option value="'.$basket->getbasketId().'">Basket'.$basket->getbasketId().'</option>';
                    } 
    echo        '</select>',
                ' <input type="submit" value="Submit">',
            '</fieldset>',
          
        '</form>';

    if(isset($_POST['selectFruit']) && isset($_POST['selectBasket']) && $_POST['addWeight'] > 0){
        // input filter
        $filterSelectFruit = filter_var($_POST['selectFruit'], FILTER_SANITIZE_SPECIAL_CHARS);
        $filterAddWeight = filter_var($_POST['addWeight'], FILTER_VALIDATE_FLOAT);
        $filterSelectBasket = filter_var($_POST['selectBasket'], FILTER_SANITIZE_SPECIAL_CHARS);

        $selectFruit = $filterSelectFruit;
        $addWeight = $filterAddWeight;
        $selectBasket = $filterSelectBasket;

        switch($selectFruit) {
            case 'apple':
                $fruitName = Fruit::APPLE;
                return $fruitName;
            case 'pear':
                $fruitName = Fruit::PEAR;
                return $fruitName;
            case 'grappes':
                $fruitName = Fruit::GRAPPES;
                return $fruitName;
        }

        $creatFruit = new Fruit($fruitName, $addWeight); 

        if($selectBasket === "newBasket"){
            $basket = [];
            $newBasket = new Basket();
            $newBasket->addFruit($fruitName);
            $basketIndex = $newBasket->getBasketId();

            $basket[$basketIndex] = $newBasket;
            $baskets[] = $basket[$basketIndex];
            return  $baskets;

        } else{

            foreach($baskets as $basket){
                if($basket->getBasketId() == $selectBasket->getBasketId()){
                    $basket->addFruit($fruitName);
                    return $basket;
                }
            }   
        }
    }
?>
    <form action="#" method="POST">
        <fieldset> <legend> Select basket</legend>
            <label for="basket"> Select basket to show : </label>
            <select name="basket" id="basket" onChange="submit()">
                <option value=""></option>
                    <?php foreach($baskets as $basket){
                        echo'<option value="'.$basket->getbasketId().'">Basket'.$basket->getbasketId().'</option>';
                    }?>
            </select>
        </fieldset>
    </form>

<?php

    if(isset($_POST['basket'])){
        $showBasket = getBasketById((int)$_POST['basket']); //(int) is use to convert string to int 
        echo 'Show basket selected '.$_POST['basket'];
        echo $showBasket;
    }

    function getBasketById($id){
        global $baskets;
        foreach($baskets as $basket){
            if($basket->getbasketId() === $id){
                return $basket;
            }
        }
    }     
?>
<?php require_once "common/footer.php";?>

