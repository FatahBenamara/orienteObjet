<?php
//#############################################################
//01 decalaration de variables
//02 declaration d'une fonction
//03 faire appel a la fonction pour affichage
$nom="";
$prenom="";
$age="";

$nom1="benamara";
$prenom1="mahmoud";
$age1=60;

$nom2="hamam";
$prenom2="zakia";
$age2=53;

//creer une fonction pour presenter les employés
function introduce($nom,$prenom,$age){
    var_dump("bonjour, je suis $nom $prenom et j'ai $age");
}
introduce($nom1,$prenom1,$age1) ;
echo "<br>";
introduce($nom2,$prenom2,$age2);

// problematique: comment faire pour presenter n personnes?
// solution: gestion de nombre = programmation objet orienté
// ...voir la suite

?>

<?php
//##########################################################""
//01 creer la class
//02 declarer les variable -public
//03 declarer la public function (methode)
//04 creer l'objet (type variable=propreité)
//05 acceder aux instances de la class
//06 faire appel a la function


class employes
{
    public $nom;
    public $prenom;
    public $age;

    public function introduce ($nom, $prenom, $age){
        echo ("bonjour, je suis $nom $prenom et j'ai $age .");
    }

}

$employes1 = new employes();
$employes2 = new employes();

$employes1->nom="benamara";
$employes1->prenom="sofiane";
$employes1->age=30;

$employes2->nom="benamara";
$employes2->prenom="nour";
$employes2->age=29;

echo "<br>";
$employes1->introduce($employes1->nom, $employes1->prenom, $employes1->age);
echo "<br>";
$employes2->introduce($employes2->nom, $employes2->prenom, $employes2->age);


?>
<?php
//##########################################################""

//01 observatio: on a pas de mettre les propreité a l interieur de la methode
//02 observation: on definis une propreité avec la variable ($this)
class employe
{
    public $nom;
    public $prenom;
    public $age;

    // public function introduce ($nom, $prenom, $age){
    //     echo ("bonjour, je suis $nom $prenom et j'ai $age .");
    // }
    public function introduce (){
        echo ("bonjour, je suis $this->nom $this->prenom et j'ai $this->age .");
    }

}

$employes1 = new employe();


$employes1->nom="benamara";
$employes1->prenom="fatah";
$employes1->age=30;



echo "<br>";
//$employes1->introduce($employes1->nom, $employes1->prenom, $employes1->age);
$employes1->introduce();

?>

<?php
//##########################################################""
//01 observation: on sais que l'employé doit avoir toujour un nom, un prenom, un age => notion de __contruct


class employ
{
    public $nom;
    public $prenom;
    public $age;

    // public function introduce ($nom, $prenom, $age){
    //     echo ("bonjour, je suis $nom $prenom et j'ai $age .");
    // }
    // public function introduce (){
    //     echo ("bonjour, je suis $this->nom $this->prenom et j'ai $this->age .");
    // }
    public function __construct ($nom,$prenom,$age){
        
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;


    }
    public function introduce (){
        echo ("bonjour, je suis $this->nom $this->prenom et j'ai $this->age .");
    }

}

$employes1 = new employ("abc", "def",123);

echo "<br>";
//$employes1->introduce($employes1->nom, $employes1->prenom, $employes1->age);
$employes1->introduce();

?>


















