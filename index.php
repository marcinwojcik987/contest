<?php
require 'PHPMailerAutoload.php';

include_once 'database.php';

?>

<!doctype html>
<html lang="en">
<head>
    <title>Zostań ambasadorem HTC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bower_components/iCheck/skins/square/red.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="bower_components/jquery.scrollTo/jquery.scrollTo.min.js"></script>
    <script src="bower_components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="bower_components/jquery-validation/dist/additional-methods.js"></script>
    <script src="bower_components/iCheck/icheck.js"></script>


</head>
<body >
<section id="menu">
    <div class="">
        <div class="top-bar fixed">
            <div class="logo">
                <img src="assets/img/logo.png"/>
            </div>
            <div class="nav row">
                <nav class="navbar navbar-r navbar-expand-lg   col-xl-10">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-right" id="navbarNav">
                        <ul class="navbar-nav navbar-right">
                            <li class="nav-item active">
                                <a id="nav_header" class="nav-link" href="#header">o programie <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_content" class="nav-link" href="#content">zgłoś się</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_contact" class="nav-link" href="#contact">kontakt</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<section id="header">
    <h1>Zostań ambasadorem HTC!</h1>
    <h2>#BrilliantU</h2>
    <p class="paragraph1">Jesteś początkującym influencerem i potrzebujesz<br/>
        dobrego telefonu do realizowania swojej pasji?</p><br>
    <p class="paragraph2">Zgłoś się do nas, zostań Ambasadorem HTC <br />
        i rozwijaj się razem z nami!</p>
    <p class="paragraph3">Rekturacja trwa do  12 listopada 2017!</p>
    <a id="report-btn" class="btn animation" href="#">ZGŁOŚ SIĘ</a>
<!--    <div class="phone-hand"><img src="/assets/img/hand.png" class="phone-hand-img"></div>-->
    <div id="scroll-down"></div>


</section>

<section id="content">
    <h2> Wypełnij formularz:</h2>
    <section id="form-content">
        <div class="content">
            <form id="form" class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
                <div class="form-description">
                    <label>
                        Przedstaw się kreatywnie i napisz dlaczego chciałbyś z nami</br> współpracować?</br>
                        <span>(wpisz maksymalnie 250 znaków, wgraj zdjęcie, pdf lub dodaj link do filmu)</span>
                    </label>
                    <textarea id="textarea" name="description" maxlength="250" rows="3" cols="40" style="overflow:hidden"></textarea>
                    <div class="chars-limit">Pozostało znaków: 250</div>
                    <div class="error-form"></div>
                </div>
                <div class="form-image">
                    <div class="file_size">maksymalny rozmiar pliku 10MB</div>
                    <input type="file" name="file" id="file" accept="image/*" class="inputfile" hidden>
                    <label for="file"><span class="image_add">dodaj plik</span></label>
                    <div id="preview"></div>
                    <span class="image_preview"></span>
                    <div class="error-file"></div>
                </div>
                <div class="form-youtube">
                    <label>lub wklej link YouTube</label>
                    <input class="" type="text" name="youtube">
                </div>
                <div class="form-name form-group">
                    <label for="cname">Imię</label>
                    <input id="cname"  type="text" name="name" ">
                    <div class="error-name"></div>
                </div>
                <div class="form-surname form-group">
                    <label>Nazwisko</label>
                    <input type="text" name="surname" >
                    <div class="error-surname"></div>
                </div>
                <div class="form-birthdate form-group">
                    <label>Data urodzenia</label>
                    <input class="unstyled" type="date" name="birthdate" data-date-inline-picker="true">
                    <div class="error-birthday"></div>
                </div>
                <div class="form-email form-group">
                    <label>Email</label>
                    <input type="text" name="email">
                    <div class="error-email"></div>
                </div>
                <div class="form-year">
                    <label>Podaj rok, w którym rozpocząłeś działalność influencera?</label>
                    <select name="start_year">
                        <option value="default">--wybierz--</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                    </select>
                </div>
                <div class="form-brands">
                    <label> Z jakimi markami pracowałeś/aś w ostatnim roku?<br>
                        <span>(wymień maksymalnie 10)</span>
                    </label>
                    <div class="input_brand_wrap">
                        <input type="text" name="brand[]">
                        <div class="add_field_button_brand" ><img src="/assets/img/icon-plus.png"></div>
                    </div>

                </div>
                <div class="socialgroups">
                    <h5>Twoje strony i portale społecznościowe:</h5>
                    <div class="social-facebook">
                        <img src="assets/img/logo-fb.png">
                        <label>Facebook</label>
                        <input type="text" name="social_facebook" class="social_group">
                    </div>
                    <div class="social-instagram">
                        <img src="assets/img/logo-instagram.png">
                        <label>Instagram</label>
                        <input type="text" name="social_instagram" class="social_group">
                    </div>
                    <div class="social-youtube">
                        <img src="assets/img/logo-youtube.png">
                        <label>YouTube</label>
                        <input type="text" name="social_youtube" class="social_group">
                    </div>
                    <div class="social-blog">
                        <img src="assets/img/logo-blog.png">
                        <label>Blog</label>
                        <input type="text" name="social_blog" class="social_group">
                    </div>
                </div>
                <div class="hobby">
                    <div class="inspirations">
                        <label>Którzy influencerzy są dla Ciebie inspiracją?<br>
                            <span>(wymień maksymalnie 10)</span>
                        </label>
                        <div class="input_fields_wrap">
                            <div><input type="text" name="inspirations[]"></div>
                            <div class="add_field_button" ><img src="/assets/img/icon-plus.png"></div>
                        </div>
                    </div>
                    <div class="hobbies">
                        <label>Twoje zainteresowania<br>
                            <span>(wymień maksymalnie 5)</span>
                        </label>
                        <div class="input_hobby_wrap">
                            <input type="text" name="hobby[]">
                            <div class="add_field_button_hobby" ><img src="/assets/img/icon-plus.png"></div>
                        </div>

                    </div>
                    <div class="phone">
                        <label>Jakiego modelu telefonu używasz obecnie?</label>
                        <select name="phone_model">
                            <option value="default">--wybierz--</option>
                            <option value="HTC">HTC</option>
                            <option value="Iphone">Iphone</option>
                            <option value="Samsung">Samsung</option>
                            <option value="LG">LG</option>
                            <option value="Hauwei">Hauwei</option>
                            <option value="Nokia">Nokia</option>
                            <option value="Lenovo">Lenovo</option>
                            <option value="Sony">Sony</option>
                            <option value="Alcatel">Alcatel</option>
                            <option value="Xiaomi">Xiaomi</option>
                            <option value="inny">inny</option>
                        </select>
                    </div>
                </div>
                    <div class="system">
                        <label>Czy posiadałeś/aś telefon działający na systemie Android?</label>
                        <input type="radio" id="tak_span" name="android" value="tak" class="btn"><span>tak</span></input>
                        <input type="radio" id="nie_span" name="android" value="nie" class="btn"><span>nie</span></input>
<!--                        <input type="hidden" name="android" value="" id="android" />-->
                    </div>
                <div class="conditions">
                    <input type="checkbox" class="checkbox1" id="condition1" name="conditions" value="1" onchange="errorString()">
                    <label for="condition1">Akceptuję <a href="regulamin.pdf" target="_blank">regulamin</a></label><br>

                    <input type="checkbox" class="checkbox2" id="condition2" name="conditions" value="1">
                    <label for="condition2">Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z Ustawą z dnia 29 sierpnia 1997 o ochronie danych osobowych (Dz.U. 2016 poz. 922, tekst jednolity) przez firmę Brand Republic Sp. z o.o. Sp. K. z siedzibą w Warszawie, przy Kuratowskiego 2/49, 02-747 Warszawa, dla celów związanych z akcją "Zostań Ambasadorem HTC". Moje dane osobowe udostępniam dobrowolnie oraz wiem, że przysługuje mi prawo żądania ich poprawienia lub usunięcia (podanie danych osobowych jest dobrowolne, z tym że stanowi ono warunek dokonania zgłoszenia i udział w akcji).</label>
                    <div class="error_conditions"></div>
                </div>
                <div class="send">
                    <input class="btn animation" type="submit" value="WYŚLIJ" name="submit">
                </div>
            </form>
        </div>
    </section>
</section>

<section id="contact">
    <div class="contact">
        <address>
            <h2>KONTAKT</h2>
            <h3>Biuro promocji</h3><br>
            ul. Fajna 26<br><br>
            00-111 Nowy York<br><br>
            <a href="mailto:kontakt@htcu.pl">kontakt@kontakt.pl</a><br><br>
            tel.: +48 500 600 400
        </address>
    </div>
    <?php

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
var_dump($_FILES);


    if ($_SERVER['REQUEST_METHOD']==='POST') {
        if (isset($_POST['submit']) && isset($_POST['conditions']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthdate']) && isset($_POST['email']) &&
            (isset($_POST['description']) || isset($_POST['youtube'])) && isset($_POST['start_year']) &&
            (isset($_POST['social_facebook']) || isset($_POST['social_instagram']) || isset($_POST['social_youtube']) || isset($_POST['social_blog']))  &&
            isset($_POST['phone_model']) && isset($_POST['android'])) {

            if ($_FILES)
            {
                /** @var TYPE_NAME $photo_name */
                $photo_name = $_FILES['file']['name'];
                $type = $_FILES['file']['type'];
                $size = $_FILES['file']['size'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $error = $_FILES['file']['error'];


//
                $target_dir ="" ;
                $target_path = $target_dir . ($_FILES['file']['name']);

                //file must be smaller than 10mb
                if ($_FILES['file']['size'] > 10485760) {
                    echo "Sorry, your file is to large";
                    return false;
                }
                //nie uploaduje sie do katalogu uploads
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
                    echo "The file ".  $photo_name . " has been uploaded";
                } else{
                    echo "There was an error uploading the file, please try again!";
                }

            }

            if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthdate']) && isset($_POST['email']) &&
                isset($_POST['description'])  && isset($_POST['youtube']) && isset($_POST['start_year']) &&
                isset($_POST['brand']) && isset($_POST['social_facebook']) && isset($_POST['social_instagram']) && isset($_POST['social_youtube']) &&
                isset($_POST['social_blog']) && isset($_POST['inspirations']) && isset($_POST['hobby']) && isset($_POST['phone_model']) && isset($_POST['android']))
            {

                var_dump($_POST);
                $name = test_input($_POST['name']);
                $surname = test_input($_POST['surname']);
                $birthdate = test_input($_POST['birthdate']);
                $email = test_input($_POST['email']);
                $description= test_input($_POST['description']);
                $file = $_FILES['file']['name'];
                $youtube = test_input($_POST['youtube']);
                $start_year = test_input($_POST['start_year']);
                $brand = test_input($_POST['brand']);
                $social_facebook = test_input($_POST['social_facebook']);
                $social_instagram = test_input($_POST['social_instagram']);
                $social_youtube = test_input($_POST['social_youtube']);
                $social_blog = test_input($_POST['social_blog']);
                $inspirations = test_input($_POST['inspirations']);
                $hobby = test_input($_POST['hobby']);
                $phone_model = test_input($_POST['phone_model']);
                $android = test_input($_POST['android']);

//                $brand = implode(",", $brand);
//                $inspirations = implode(",", $inspirations);
//                $hobby = implode(",", $hobby);

                //// check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)||(!preg_match("/^[a-zA-Z ]*$/", $surname))) {
                    $nameErr = "Only letters and white space allowed";
                    echo $nameErr;
                    return false;
                }

                ////check if e-mail address is well-formated
                if( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    echo $emailErr;
                    return false;
                }


                ////check if URL address syntax is valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $social_facebook)||
                    !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $social_blog)||
                    !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $social_instagram)||
                    !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $social_youtube)||
                    !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $youtube)) {
                    $websiteErr = "Invalid URL";
                    echo $websiteErr;
                    return false;
                }



                $stmt = $conn->prepare('INSERT INTO htc(name, surname, birthdate, email, description, file, youtube, start_year, brand, social_facebook, social_instagram, social_youtube, social_blog, inspirations, hobby, phone_model, android)
                                                VALUES (:name, :surname, :birthdate, :email, :description, :file, :youtube, :start_year, :brand, :social_facebook, :social_instagram, :social_youtube, :social_blog, :inspirations, :hobby, :phone_model, :android)');
                $result = $stmt->execute([

                    'name'=>$name,
                    'surname'=>$surname,
                    'birthdate'=>$birthdate,
                    'email'=>$email,
                    'description'=>$description,
                    'file'=>$file,
                    'youtube'=>$youtube,
                    'start_year'=>$start_year,
                    'brand'=>$brand,
                    'social_facebook'=>$social_facebook,
                    'social_instagram'=>$social_instagram,
                    'social_youtube'=>$social_youtube,
                    'social_blog'=>$social_blog,
                    'inspirations'=>$inspirations,
                    'hobby'=>$hobby,
                    'phone_model'=>$phone_model,
                    'android'=>$android
                ]);

                if ($result!==false) {
                    $this->id = $conn->lastInsertId();
                    return true;
                }


                // cos nie dziala wysylanie
                $subject = "Zostań Ambasadorem HTC";
                $msg = "Witaj,\n           
                    dziękujemy za przesłane zgłoszenie do programu Zostań Ambasadorem HTC.\n
                    Uprzejmie informujemy, że skontaktujemy się z wybranymi osobami na podany adres e-mail.\n\n
                    
                    Pozdrawiamy,\n
                    Zespół HTC";


                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'localhost';
                $mail->SMTPAuth = true;
                $mail->Username = null;
                $mail->Password = null;
                $mail->SMTPSecure = null;
                $mail->Port = 25;

                $mail->setFrom('kontakt@htcu.pl');
                $mail->addAddress($email);
                $mail->CharSet = 'UTF-8';

                $mail->isHTML(false);

                $mail->Subject = $subject;
                $mail->Body = $msg;

                if (!$mail->send()) {
                    return false;
                }
            }

        }

    }
    else {
        echo "brak wymaganych danych";
        var_dump($_FILES);
    }

    ?>
</section>

<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->


<script src="assets/js/app.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>