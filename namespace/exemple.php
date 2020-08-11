<?php

    function maFonction(){

    }
//function maFonction(){} je ne peux pas créer une fonction du même nom

    class A{
        
    }
// class A{} je ne peux pas déclarer une classe du même nom
// j'ai déclaré 2 namespaces avec une fonction du même nom


namespace EquipeA{

    function ville(){
        return "Paris";
    }
}

namespace EquipeB{

    function ville(){
        return 'Lyon';
    }
}