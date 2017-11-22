<?php
/**
 * Created by PhpStorm.
 * User: loki
 * Date: 02.11.17
 * Time: 09:46
 */


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit'])) {
        if (isset($_POST['email'])) {

            $email = trim($_POST['email']);

            $subject = "Zostań Ambasadorem HTC";
            $msg = "Witaj,<br>            
                    dziękujemy za przesłane zgłoszenie do programu Zostań Ambasadorem HTC.<br>
                    Uprzejmie informujemy, że skontaktujemy się z wybranymi osobami na podany adres e-mail.<br><br>
                    
                    Pozdrawiamy,<br>
                    Zespół HTC";

            mail($email, $subject, $msg);

        }
    }
}

