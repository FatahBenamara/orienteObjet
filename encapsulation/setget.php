<?php
// securisé le code

class stagiaire{

public $nom;
public $prenom;

// securisé l'age
// 01 mettre l'age en private
private $age;


    public function __construct($nom, $prenom, $age){
        $this->nom= $nom;
        $this->prenom=$prenom;
        // $this->age=$age;

        // 03 faire appel a setAge
        $this->setAge($age);
        
    }

    //02 faire appel a public function set et get

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






