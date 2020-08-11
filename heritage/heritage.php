<?php

class stagiaire{

public $nom;
public $prenom;
private $age;


    public function __construct($nom, $prenom, $age){
        $this->nom= $nom;
        $this->prenom=$prenom;
        $this->setAge($age);
        
    }
    public function setAge($age){
        if( is_int($age) && $age<62 && $age>=18){
            return $this->age=$age;
        }else{
            throw new Exception("l'age du stagiaire est un entier entre 18 et 62 ans"); //AFFICHER UN MSG ERR
        }
    }

    public function getAge(){
        return $this->age;
    }


    function presentation(){
        echo "je suis $this->nom $this->prenom et j'ai $this->age";
    }

}

$stagiaire1=new stagiaire("benamara","fatah",19);
$stagiaire1->presentation();
echo "<br>";



//##################################################

class patron extends  stagiaire{

    private $voiture;


        public function __construct($nom, $prenom, $age, $voiture){

            parent::__construct($nom, $prenom, $age);
            $this->voiture=$voiture;
            
        }


        public function rouler(){
            echo "je roule avec ma $this->voiture";
        }

}

$patron1= new patron("hamam","zakia",50, "mercedes");
$patron1->presentation();
echo "<br>";
$patron1->rouler();
echo "<br>";

