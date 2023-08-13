<?php
    Class Fruit {
        private string $_name;
        private float $_weight;
        private $_image;
        private $_price;
        private static $fruits = []; 
        // define basic name and price 
        const APPLE = "Apple";
        const PEAR = "Pear";
        const ORANGE = "Orange";
        const GRAPES = "Grapes";
        
        const APPLE_PRICE = 2.3;
        const PEAR_PRICE = 1.5;
        const ORANGE_PRICE = 1.8;
        const GRAPES_PRICE = 2;

        public function __construct(string $name, float $weight){
            $this->_name = $name;
            $this->_weight = $weight;
            $this->_image = $this->getImage($name); // Image and price in relation of constants 
            $this->_price = $this->getPrice($name);
            self::$fruits[] = $this; 
        }

        //Getters
        public function getName(){return $this->_name;}
        public function getWeight(){return $this->_weight;}

         //define the price of fruit in relation to the name and weight  
        private function getPrice($name){
            switch($name){
                case self::APPLE :
                    $this->_price = self::APPLE_PRICE * $this->_weight;
                    return $this->_price;
                
                case self::PEAR :
                    $this->_price = self::PEAR_PRICE * $this->_weight;
                    return $this->_price;
               
                case self::ORANGE :
                    $this->_price = self::ORANGE_PRICE * $this->_weight;
                    return $this->_price;

                case self::GRAPES :
                    $this->_price = self::GRAPES_PRICE * $this->_weight;
                    return $this->_price;
                
                default:
                    echo "unknow price";
                break;
            }
        }

         //define the image of fruit in relation to the name and weight  
        private function getImage($name){
            switch($name){
                case self::APPLE :
                    return $this->_image = "imgs/apple.jpg";
                
                case self::PEAR :
                    return $this->_image = "imgs/pear.jpg";
                
                case self::ORANGE :
                    return $this->_image = "imgs/orange.jpg";
                
                case self::GRAPES :
                    return $this->_image = "imgs/grapes.jpg";
                
                default:
                    echo "unknow fruit";
                break;
            }
        }

        public static function  showFruits(){
            return self::$fruits;
        }

        
        //Setters
        public function setName($name){$this->_name = $name;}
        public function setWeight($weight){$this->_weight = $weight;}
        public function setImage($image){$this->_image = $image;}
        
        // method to display fruit's informations
        public function __toString(){
            $show = '<img src="'.$this->_image.'" alt="'. $this->_name .'" width="100px"><br>';
            $show .= "Name : ". $this->_name. "<br>";
            $show .= "Weight : ". $this->_weight. " kg<br>";
            $show .= "Price : ". $this->_price. " €<br>";

            return $show;
        }
        
    }
?>