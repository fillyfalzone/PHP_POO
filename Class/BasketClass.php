<?php    
require_once "FruitClass.php";
    // create Basket Class.
    Class Basket {
        private $_basketID;
        private $_articles = []; //Array property to Liste of article in bastket.
        private $_basketWeight;
        private $_basketPrice;
        private static $nextBasketID = 1; // Static property to count basket.

        public function __construct(){
            $this->_basketID += self::$nextBasketID; //Auto encrement of basket id. 
            self::$nextBasketID ++; 
        }

        public function getArticles(){ return $this->_articles;}
        public function getbasketId(){return $this->_basketID;}
        public function getBasketWeight(){return $this->_basketWeight;}
        public function getBasketPrice(){return $this->_basketPrice;}

        public function addFruit(Fruit $fruits){  // add Fruit class in a addFruit method.
            $this->_articles[] = $fruits; 
        }
        //Calculate total of basket weight in relation with each article weight. 
        public function getTotalWeight(){
            $total = 0;
            foreach($this->_articles as $article){
                $total += $article->getWeight(); 
            }
            return $total;
        }
        //Calculate total of basket price in relation with each article price.
        public function getTotalPrice(){
            $total = 0;
            foreach($this->_articles as $article){
                $total += $article->getPrice(); 
            }
            return $total;
        }
        // magic fonction to echo each instance of this class.
        public function __toString(){
            $showBasket = '<hr>';
            $showBasket .= '<strong> Basket id: '. $this->_basketID.'</strong><br>';
            foreach($this->_articles as $article){
                $showBasket .= '<div class="left">'.$article.'</div>';
            }
            $showBasket .= '<div class="clearB">Total Weight : '. $this->getTotalWeight().' kg</div>'; 
            $showBasket .= '<div class="clearB">Total Price : '. $this->getTotalPrice(). ' €</div>';
            return $showBasket;
        }
        
    }
?>