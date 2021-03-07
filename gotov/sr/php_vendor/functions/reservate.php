<?php
require_once 'class.user.php';
$user_class = new USER();

$name       = $_POST['name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$service    = $_POST['service'];
$space      = $_POST['space'];
$message    = $_POST['message'];
$time       = null;
$sum        = null;
$razlika    = 0;
switch ($service){
    case 1:
        if ($space > 0 && $space <= 50){
            $sum = 199;
            $time = 1;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space >= 51 && $space <= 99){
            $sum = 398;
            $tim = 2;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space >= 100 && $space <= 150){
            $sum = 597;
            $time = 3;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space >= 151 && $space <= 200){
            $sum = 796;
            $time = 4;
            $user_class->returnJSON("OK","Cena za uslugu Hemstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space > 200){
            $user_class->returnJSON("OK","Cena po dogovoru");
            return;
        }
        break;
    case 2:
        if ($space > 0 && $space < 50){
            $sum = 1950;
            $time = 2;
            $user_class->returnJSON("OK","Cena za uslugu Storstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space > 51 && $space < 76){
            $sum = 2300;
            $time = 4;
            $user_class->returnJSON("OK","Cena za uslugu Storstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space >= 76 && $space <= 100){
            $sum = 2500;
            $time = 6;
            $user_class->returnJSON("OK","Cena za uslugu Storstädning za povrsinu " . $space . " m2 je ". $sum ." sek a predvidjeno vreme rada ". $time ." h");
            return;
        }else if ($space > 100){
            $razlika = $space - 100;
            $sum = 2500 + ($razlika * 23);
            $user_class->returnJSON("OK","Cena za uslugu Storstädning za povrsinu " . $space . " m2 je ". $sum ." sek ");
            return;
        }
        break;
    case 3:
        if ($space > 0 && $space < 51){
            $sum = 2000;
            $user_class->returnJSON("OK","Cena za uslugu Flyttstädning za povrsinu " . $space . " m2 je ". $sum ." sek ");
            return;
        }else if ($space >= 51 && $space < 76){
            $sum = 2250;
            $user_class->returnJSON("OK","Cena za uslugu Flyttstädning za povrsinu " . $space . " m2 je ". $sum ." sek ");
            return;
        }else if ($space >= 76 && $space < 100){
            $sum = 2550 ;
            $user_class->returnJSON("OK","Cena za uslugu Flyttstädning za povrsinu " . $space . " m2 je ". $sum ." sek ");
            return;
        }else if ($space >= 100 && $space < 200){
            $razlika = $space - 100;
            $sum = 2750 + ($razlika * 26);
            $user_class->returnJSON("OK","Cena za uslugu Flyttstädning za povrsinu " . $space . " m2 je ". $sum ." sek ");
            return;
        }else if ($space < 200){
            $user_class->returnJSON("OK","Cena po dogovoru");
            return;
        }
        break;
    case 4:
        $sum = $time * 250;
        $time = 1;
        $user_class->returnJSON("OK","Cena za uslugu Fönsterputs privatpersoner za vreme " . $time . " h je ". $sum ." sek");
        return;
        break;
    case 5:
        $sum = $time * 305;
        $time = 1;
        $user_class->returnJSON("OK","Cena za uslugu Fastighetsskötsel za vreme " . $time . " h je ". $sum ." sek + mons" );
        return;
        break;
    case 6:
        $sum = $time * 300;
        $time = 1;
        $user_class->returnJSON("OK","Cena za uslugu Kontorsstädning za vreme " . $time . " h je ". $sum ." sek + mons");
        return;
        break;
    case 7:
        $sum = $time * 350;
        $user_class->returnJSON("OK","Cena za uslugu Fönsterputs för företag za vreme " . $time . " h je ". $sum ." sek + mons");
        return;
        break;
    default:
        break;
}

return;