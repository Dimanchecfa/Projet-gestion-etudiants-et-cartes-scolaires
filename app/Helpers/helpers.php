<?php


use Illuminate\Support\Str;


define("PAGELIST", "liste");
define("PAGECREATEFORM", "create");
define("PAGEEDITFORM", "edit");

define("DEFAULTPASSWORD" , "password");

function userFullName(){
    return auth()->user()->nom . ' ' . auth()->user()->prenom;
};

//la fonction qui ecoute pour savoir l'etatde chaque classe
function contains($container , $contenu){
    return Str::contains($container, $contenu);
}

//la fonction qui controle et active les liens lorsqu'elles sont actives
function setMenuClass($route, $classe){
    $routeActuels = request()->route()->getName();
   if(contains($routeActuels, $route)){
       return $classe;
    }
    return "";
};


function setMenuActive($route){
    $routeActuels = request()->route()->getName();
   if($routeActuels === $route){
       return 'active';
    }
    return "";
};

// function getRolesName(){
//     $rolesName = "";
//     $i = 0;
//     foreach(auth()->user()->roles as $role){
//         $rolesName .= $role->nom;

//         //
//         if($i < sizeof(auth()->user()->roles) - 1 ){
//             $rolesName .= ",";
//         }

//         $i++;

//     }

//     return $rolesName;

// }

// creons des constante define("nom" , ""valeur)
// define("PAGELISTE" , "liste");
// define("PAGECREATEFORM" , "create");
// define("PAGEEDITFORM" , "edit");


