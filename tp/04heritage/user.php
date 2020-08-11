<?php
class membre{

    public $pseudo;
    public $mdp;

        public function connexion(){
            echo "tu es connecté. ";
        }

        public function inscription(){
            echo "je suis inscrit. ton pseudo est: $this->pseudo et ton mot de passe est: $this->mdp .";
        }
}

class admin extends membre{

    // public $pseudo;
    // public $mdp;

        // public function connexion(){
        //     echo "tu es connecté. ";
        // }

        // public function inscription(){
        //     echo "je suis inscrit. ton pseudo est: $this->pseudo et ton mot de passe est: $this->mdp .";
        // }

        public function bannir(){
            echo "je bannis l'utilisateur $this->pseudo .";
        }
}

$user=new membre;
$admin1=new admin;

$user->pseudo="fatahBenamara";
$user->mdp="ceci est un mot de passe";

$admin1->pseudo="fatahBenamara";

//  var_dump($user);
 echo "<br>";
$user->connexion();
echo "<br>";
$user->inscription();
echo "<br>";
$admin1->bannir();




