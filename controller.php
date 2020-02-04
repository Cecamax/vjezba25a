<?php

require 'model.php';

//Definisanje dvije prazne varijable
$class = $user_status = "";


switch($status){
    case 1:
        //obije variable dobijaju istu vrijednost
        $class = $user_status = "administrator";
    break;
    case 2:
        $class = $user_status = "coordinator";
    break;
    case 3:
        $class = $user_status = "user";
    break;
    default:
        $class = "unknown";
        $user_status = "Unknown user";
    break;
}

//Kada korisnik nije nepoznad stavi welcome, a kada jeste stavi warning
$message = ($class != 'unknown') ? 'Welcome' : 'Warning';

//Izlaz  iz controller-a
$user_status = "<span class='{$class}'> {$message} {$user_status} </span>";


?>