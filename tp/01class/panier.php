<?php

class panier{

    public $produits;
    public $nbproduitsAjouter;
    public $nbproduitssupprimer;
   

    public function ajouterProduit(){
        echo "$this->nbproduitsAjouter article(s) de $this->produits (s) ajouter";
    }
    public function supprimerProduit(){
        echo " $this->nbproduitssupprimer article(s) $this->produits (s) supprimer";
    }
 

}

$panier1= new panier();
var_dump($panier1);
echo "<br>";
var_dump(get_class_methods($panier1));
echo "<br>";

$panier1->produits=("pomme");
$panier1->nbproduitsAjouter=6;
$panier1->ajouterProduit();
echo "<br>";

$panier1->produits=("banane");
$panier1->nbproduitssupprimer=9;
$panier1->supprimerProduit();
echo "<br>";






