<?php
require_once 'class.user.php';
$user_class = new USER();

$name       = $_POST['name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$service    = $_POST['service'];
$space      = $_POST['space'];
$message    = $_POST['message'];
$sum        = null;
$razlika    = 0;
switch ($service){
    case 1:
        if ($space > 0 && $space < 50){
            $sum = $space * 199;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space > 50 && $space < 100){
            $sum = $space * 398;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space >= 100 && $space < 150){
            $sum = $space * 597;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space >= 150 && $space < 200){
            $sum = $space * 796;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space > 200){
            $user_class->returnJSON("OK","Cena po dogovoru");
            return;
        }
        break;
    case 2:
        if ($space > 0 && $space < 50){
            $sum = 1700;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space > 51 && $space < 76){
            $sum = 2050;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space >= 76 && $space < 100){
            $sum = 2250;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }else if ($space >= 100){
            $razlika = $space - 100;
            $sum = 2250 + ($razlika * 19);
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek");
            return;
        }
        break;
    case 3:
        break;
    case 4:
        break;
    case 5:
        break;
    case 6:
        break;
    default:
        break;
}


return;