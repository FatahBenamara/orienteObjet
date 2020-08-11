<?php

class Animal{
    public $deplace;
    public $mange;

    public function deplacement(){
        echo $this->deplace;
    }
    public function manger(){
        echo $this->mange;
    }
}


class chat extends Animal{

    public function quiSuisJe(){
        echo "je suis un chat $this->deplace et $this->mange";
    }

}

$chat1 = new chat;

$chat1->deplace ="je me déplace sur quatre pattes";
$chat1->mange ="je mange une fois par jour";


$chat1->manger();
echo "<br>";
$chat1->deplacement();
echo "<br>";
$chat1->quiSuisJe();