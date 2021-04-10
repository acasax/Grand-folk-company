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


if (!isset($_POST['data'])) {
    $user_class->returnJSON(
        "ERROR",
        "Du har inte accepterat sekretesspolicyn!",
        "acceptera sekretesspolicyn att skicka en begäran om offert"
    );
    return;
}

switch ($service) {
    case 1:
        if ($space > 0 && $space <= 50) {
            $sum = 199;
            $time = 1;
            $user_class->returnJSON(
                "OK",
                "Pris för Hämstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 110 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space >= 51 && $space <= 99) {
            $sum = 398;
            $time = 2;
            $user_class->returnJSON(
                "OK",
                "Pris för Hämstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 110 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space >= 100 && $space <= 150) {
            $sum = 597;
            $time = 3;
            $user_class->returnJSON(
                "OK",
                "Pris för Hämstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 110 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space >= 151 && $space <= 200) {
            $sum = 796;
            $time = 4;
            $user_class->returnJSON(
                "OK",
                "Pris för Hämstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 110 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space > 200) {
            $user_class->returnJSON(
                "OK",
                "•	200 m²- uppåt / offereras",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 110 sek/tillfälle"
            );
            send_email();
            return;
        }
        break;
    case 2:
        if ($space > 0 && $space < 50) {
            $sum = 1950;
            $time = 2;
            $user_class->returnJSON(
                "OK",
                "Pris för Storstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 290 sek/tillfälle."
            );
            send_email();
            return;
        } else if ($space > 51 && $space < 76) {
            $sum = 2300;
            $time = 4;
            $user_class->returnJSON(
                "OK",
                "Pris för Storstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 290 sek/tillfälle."
            );
            send_email();
            return;
        } else if ($space >= 76 && $space <= 100) {
            $sum = 2500;
            $time = 6;
            $user_class->returnJSON(
                "OK",
                "Pris för Storstädning-tjänsten för " . $space . " m2  är " . $sum . " sek och den beräknade arbetstiden är " . $time . " h",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 290 sek/tillfälle."
            );
            send_email();
            return;
        } else if ($space > 100) {
            $razlika = $space - 100;
            $sum = 2500 + ($razlika * 23);
            $user_class->returnJSON(
                "OK",
                "100- uppåt m² 2500 sek + 23sek/m² som överstiger 100 m²",
                "Större bostäder offereras. Extremt nersmutsade bostäder offereras. Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 290 sek/tillfälle."
            );
            send_email();
            return;
        }
        break;
    case 3:
        if ($space > 0 && $space < 51) {
            $sum = 2000;
            $user_class->returnJSON(
                "OK",
                "Pris för Flyttstädning-tjänsten för " . $space . " m2  är " . $sum . " sek ",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag.Framkörningsavgift tillkommer med 250 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space >= 51 && $space < 76) {
            $sum = 2250;
            $user_class->returnJSON(
                "OK",
                "Pris för Flyttstädning-tjänsten för " . $space . " m2  är " . $sum . " sek ",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag.Framkörningsavgift tillkommer med 250 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space >= 76 && $space < 100) {
            $sum = 2550;
            $user_class->returnJSON(
                "OK",
                "Pris för Flyttstädning-tjänsten för " . $space . " m2  är " . $sum . " sek ",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag.Framkörningsavgift tillkommer med 250 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space >= 100 && $space < 200) {
            $razlika = $space - 100;
            $sum = 2750 + ($razlika * 26);
            $user_class->returnJSON(
                "OK",
                "Pris för Flyttstädning-tjänsten för " . $space . " m2  är " . $sum . " sek ",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag.Framkörningsavgift tillkommer med 250 sek/tillfälle"
            );
            send_email();
            return;
        } else if ($space < 200) {
            $user_class->returnJSON(
                "OK",
                "•	200 m²- uppåt / offereras",
                "Alla priser än inklusive mervärdesskatt och skatteavdrag.Framkörningsavgift tillkommer med 250 sek/tillfälle"
            );
            send_email();
            return;
        }
        break;
    case 4:
        $sum =  250;
        $time = 1;
        $user_class->returnJSON(
            "OK",
            "Pris för Fönsterputs-tjänsten för privatpersoner per timme är " . $sum . " sek",
            "Alla priser än inklusive mervärdesskatt och skatteavdrag. Framkörningsavgift tillkommer med 135 sek/tillfälle."
        );
        send_email();
        return;
        break;
    case 5:
        $sum =  305;
        $time = 1;
        $user_class->returnJSON(
            "OK",
            "Pris för Fastighetsskötsel-tjänsten per timme är " . $sum . " sek + mons",
            "Framkörningsavgift tillkommer med 126 sek/tillfälle"
        );
        send_email();
        return;
        break;
    case 6:
        $sum =  300;
        $time = 1;
        $user_class->returnJSON(
            "OK",
            "Pris för Kontorsstädning-tjänsten per timme är " . $sum . " sek + mons",
            "Framkörningsavgift tillkommer med 135 sek/tillfälle"
        );
        send_email();
        return;
        break;
    case 7:
        $sum =  350;
        $time = 1;
        $user_class->returnJSON(
            "OK",
            "Pris för Fönsterputs-tjänsten för företag per timme är " . $sum . " sek + mons",
            "Framkörningsavgift tillkommer med 135 sek/tillfälle"
        );
        send_email();
        return;
        break;
    default:
        break;
}

function send_email()
{
    if (isset($_REQUEST['recaptcha_response'])) {

        // Build POST request:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LdgWqQaAAAAAK_C-dF_yMcRjRnwzr7cXIEC3pVQ';
        $recaptcha_response = $_POST['recaptcha_response'];

        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        // echo $recaptcha;
        $recaptcha = json_decode($recaptcha);


        // Take action based on the score returned:
        if ($recaptcha->score >= 0.5) {
            if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['phone']) && isset($_REQUEST['service']) && isset($_REQUEST['space'])) {

                $email_to = "info@gladafolkisverige.se";
                $email_subject = "Book mote från webbplatsen";


                $name       = $_REQUEST['name'];
                $email      = $_REQUEST['email'];
                $phone      = $_REQUEST['phone'];
                $service    = $_REQUEST['service'];
                switch ($service) {
                    case 1:
                        $service = "Hemstädning";
                        break;
                    case 2:
                        $service = "Storstädning";
                        break;
                    case 3:
                        $service = "Flyttstädning";
                        break;
                    case 4:
                        $service = "Fönsterputs privatpersoner";
                        break;
                    case 5:
                        $service = "Fastighetsskötsel";
                        break;
                    case 6:
                        $service = "Kontorsstädning";
                        break;
                    case 7:
                        $service = "Fönsterputs för företag";
                        break;
                }

                $space      = $_REQUEST['space'];



                function clean_string($string)
                {
                    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                    return str_replace($bad, "", $string);
                }

                $email_message = "Ime: " . clean_string($name) . "\n";
                $email_message .= "E-mail: " . clean_string($email) . "\n";
                $email_message .= "Telefon: " . clean_string($phone) . "\n";
                $email_message .= "Usluga: " . clean_string($service) . "\n";
                $email_message .= "Površina: " . clean_string($space) . "\n m2";

                if (isset($_REQUEST['space'])) {
                    $message    = $_REQUEST['message'];
                    $email_message .= "Poruka: " . clean_string($message) . "\n";
                }



                $headers = 'From: ' . $email . "\r\n" .
                    'Reply-To: ' . $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                if (@mail($email_to, $email_subject, $email_message, $headers)) {
                    //$user_class->returnJSON("OK","Tack för att du kontaktade vår.", 
                    //"Vi svarar dig så snart som möjligt.");
                    return;
                } else {
                    // $user_class->returnJSON("ERROR","Något är fel.", 
                    // "Vänligen försök igen senare");
                    return;
                };
            } else {
                //echo "nije sve setovanoi";
                // $user_class->returnJSON("ERROR","Något är fel.", 
                // "Du har inte fyllt i alla fält");
                return;
            }
        } else {
            // echo "error with recaptcha";
            // $user_class->returnJSON("ERROR","Något är fel.", 
            //  "Problem med recaptcha");
            return;
        }
    } else {
        //echo "error with recaptcha_response";
        // $user_class->returnJSON("ERROR","Något är fel.", 
        // "Problem med recaptcha_response");
        return;
    }
}

return;
