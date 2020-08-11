<?php
class vehicule{

    private $tailleReservoir;
    private $nbLitres;

    public function __construct($r,$l){
        $this->setReservoir($r);
        $this->setNbLitres($l);

    }


    public function setReservoir($r){

        if( is_int($r) ){
            return $this->tailleReservoir=$r;
        }else{
            throw new Exception("nb de litres d'essence fixé à 50"); 
        }
    }

    public function getReservoir(){
        return $this->tailleReservoir;
    }

    public function setNbLitres($l){

        if( is_int($l) ){
            return $this->nbLitres=$l;
        }else{
            throw new Exception("nb de litres d'essence fixé à 5 litres pour le vehicule1"); 
        }
    }

    public function getNbLitres(){
        return $this->nbLitres;
    }


    public function afficherVehicule(){
        echo ("Mon véhicule 01 a $this->nbLitres litres dans son réservoir qui peut en contenir $this->tailleReservoir litres");
    }

}

$vehicule1 = new vehicule(50,5);
$vehicule1->afficherVehicule();
// ##########################
echo "<hr>";
// #############################

class pompe {

    private $tailleReservoir;
    private $nbLitres;

    public function __construct($r,$l){
        $this->setReservoir($r);
        $this->setNbLitres($l);

    }


    public function setReservoir($r){

        if( is_int($r) ){
            return $this->tailleReservoir=$r;
        }else{
            throw new Exception("Attribuer une taille de réservoir (800l)"); 
        }
    }

    public function getReservoir(){
        return $this->tailleReservoir;
    }

    public function setNbLitres($l){

        if( is_int($l)){
            return $this->nbLitres=$l;
        }else{
            throw new Exception("nb de litres d'essence fixé à 800"); 
        }
    }

    public function getNbLitres(){
        return $this->nbLitres;
    }


    public function delivrerEssence(Vehicule $v){
        // $v désigne le véhicule, $this désigne la pompe
        $quantite_a_delivrer = ($v->getReservoir() ) - ($v->getNbLitres());
        // Si la pompe contient moins d'essence, elle ajuste la valeur à ce qui lui reste
        if($this->getNbLitres() < $quantite_a_delivrer){
            $quantite_a_delivrer = $this->getNbLitres();
        }
        // Ajouter l'essence au véhicule
        $v->setNbLitres( $v->getNbLitres() + $quantite_a_delivrer );
        // Retirer l'essence à la pompe
        $this->setNbLitres( $this->getNbLitres() - $quantite_a_delivrer);
    }

    public function afficherPompe(){
        echo (" La pompe a $this->nbLitres litres dans son réservoir qui peut en contenir $this->tailleReservoir litres");
    }

}

$pompe1 = new pompe(800,800);
$pompe1->afficherPompe();



// Simuler le passage du véhicule
echo "<br>";
$pompe1->delivrerEssence($vehicule1);
echo "Après passage :<br>";
echo "Mon véhicule 1 a ".$vehicule1->getNbLitres()." litres dans son réservoir qui peut en contenir ".$vehicule1->getReservoir()."<br>";
echo "La pompe a ".$pompe1->getNbLitres()." litres dans son réservoir qui peut en contenir ".$pompe1->getReservoir()."<br>";

// $vehicule2 = new Vehicule(70,20);
// $pompe->delivrerEssence($vehicule2);
// echo "Après passage :<br>";
// echo "Mon véhicule 2 a ".$vehicule2->getNbLitres()." litres dans son réservoir qui peut en contenir ".$vehicule2->getReservoir()."<br>";
// echo "La pompe a ".$pompe->getNbLitres()." litres dans son réservoir qui peut en contenir ".$pompe->getReservoir()."<br>";













