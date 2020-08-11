<?php

class humain{

    private $prenom;
    private $nom;

/****************************************************** */
public function __construct($prenom,$nom)
{
    $this->setPrenom($prenom);
    $this->setNom($nom);
}

/************************************************************************** */
public function setPrenom($prenom){
    if (is_string($prenom)) {
        $this->prenom = $prenom;
    }
    
}

public function getPrenom(){
    return $this->prenom;
}
/******************************************************************* */
public function setNom($nom){
    if (is_string($nom)) {
        $this->nom = $nom;
    }
    
}

public function getNom(){
    return $this->nom;
}


    public function presentation(){
        echo" je suis $this->prenom $this->nom .";
    }

}

$humain1 = new humain("ABCD","EFG");


var_dump($humain1);
echo "<br>";
var_dump(get_class_methods($humain1));
echo "<hr>";



$humain1->presentation();