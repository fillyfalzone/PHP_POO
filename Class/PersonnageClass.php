<?php
    // Cretae New Class
      Class Personnage{
        private string $_img;  //Properties of Class
        private string $_name;
        private int $_age;
        private string $_gender;
        private string $_titan;
        private int $_agility;
        private int $_strength;
        private string $_titanImg;
        private static $personnages = []; //Static property of this Class
        
        //Constant value of define properties
        const STRENGTH_MAX = 7;
        const STRENGTH_MED = 5;
        const STRENGTH_MIN = 3;

        const AGILITY_MAX = 7;
        const AGILITY_MED = 5;
        const AGILITY_MIN = 3;

        // Constructor of Class
        public function __construct($img, $name, $age, $gender, $titan, $agility, $strength, $titanImg){
            $this->_img = $img;
            $this->_name = $name;
            $this->_age = $age;
            $this->_gender = $gender;
            $this->_titan = $titan;
            $this->_agility = $agility;
            $this->_strength = $strength;
            $this->_titanImg = $titanImg;
           self::$personnages[] = $this;
        }
        // Getters 
        public function getImg(){return $this->_img;}

        public function getName(){return $this->_name;}

        public function getAge(){return $this->_age;}

        public function getGender(){return $this->_gender;}

        public function getTitan(){return $this->_titan;}

        public function getAgility(){return $this->_agility;}

        public function getStrength(){return $this->_strength;}

        public function getTitanImg(){return $this->_titanImg;}

        //Setters
        public function setImg($img){$this->_img = $img;}

        public function setName($name){$this->_name = $name;}

        public function setAge($age){$this->_age = $age;}

        public function setGender($gender){$this->_genderg = $gender;}

        public function setTitan($titan){$this->_titan = $titan;}

        //setter of constants properties
        public function setAgility($agility){
            if(Personnage::AGILITY_MAX || Personnage::AGILITY_MED|| Personnage::AGILITY_MIN){
                $this->_agility = $agility;
            }
        }
        public function setStrength($strength){
            if(Personnage::STRENGTH_MAX || Personnage::STRENGTH_MED || Personnage::STRENGTH_MIN){
                $this->_strength = $strength;
            }
        }
        
        // method to get private static property out of Class
        public static function getListCharacter(){
            return self::$personnages;
        }

        //method to show Character infos
        public function showInfos(){
            echo "<b>Name : </b>" . $this->_name ."<br/>";
            echo "<b>Age : </b>" . $this->_age ."<br/>";
            echo "<b>Gender : </b>". $this->_gender."<br>";
            echo "<b>Titan : </b>". $this->_titan."<br>";
            echo "<b>Strength : </b>" . $this->_strength ."<br/>";
            echo "<b>Agility : </b>" . $this->_agility ."<br/>";
        }
        //method to show Characters
        public function showCharacter(){
            echo "<div class='left'>";
            echo "<img src = '".$this->_img."' alt = '".$this->_name."'height='150px' />";
            echo "</div>";
            echo "<div class='left'>";
            $this->showInfos();
            echo "</div>";
            echo "<div class='left'>";
            echo "<img src = '".$this->_titanImg."' alt = '".$this->_titan."' width='150px' />";
            echo "</div>";
            echo "<div class='clearB'></div>";
        }   
        
    }
?>

