<?php
/**
 * Created by PhpStorm.
 * User: loki
 * Date: 31.10.17
 * Time: 12:28
 */
//include "index.php";
//include "htc.php";
//include "database.php";


if ($_SERVER['REQUEST_METHOD']==='POST') {
    if (isset($_POST['submit'])) {

        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthdate']) && isset($_POST['email']) &&
            isset($_POST['description']) && isset($_POST['file']) && isset($_POST['youtube']) && isset($_POST['start_year']) &&
            isset($_POST['brand']) && isset($_POST['social_facebook']) && isset($_POST['social_instagram']) && isset($_POST['social_youtube']) &&
            isset($_POST['social_blog']) && isset($_POST['inspirations']) && isset($_POST['hobby']) && isset($_POST['phone_model']) &&
            isset($_POST['android'])) {


             $name = trim($_POST['name']);
             $surname = trim($_POST['surname']);
             $birthdate = trim($_POST['birthdate']);
             $email = trim($_POST['email']);
             $description= trim($_POST['description']);
             $file = trim($_POST['file']);
             $youtube = trim($_POST['youtube']);
             $start_year = trim($_POST['start_year']);
             $brand = trim($_POST['brand']);
             $social_facebook = trim($_POST['social_facebook']);
             $social_instagram = trim($_POST['social_instagram']);
             $social_youtube = trim($_POST['social_youtube']);
             $social_blog = trim($_POST['social_blog']);
             $inspirations = trim($_POST['inspirations']);
             $hobby = trim($_POST['hobby']);
             $phone_model = trim($_POST['phone_model']);
             $android = trim($_POST['android']);

            $stmt = $conn->prepare('INSERT INTO htc(name, surname, birthdate, email, description, file, youtube, start_year, brand, social_facebook, social_instagram, social_youtube, social_blog, inspirations, hobby, phone_model, android)
                                                VALUES (:name, :surname, :birthdate, :email, :description, :file, :youtube, :start_year, :brand, :social_facebook, :social_instagram, :social_youtube, :social_blog, :inspirations, :hobby, :phone_model, :android)');
            $result = $stmt->execute([

//                'name'=>$this->name,
//                'surname'=>$this->surname,
//                'email'=>$this->email,
//                'birthdate'=>$this->birthdate,
//                'description'=>$this->description,
//                'file'=>$this->file,
//                'youtube'=>$this->youtube,
//                'brand'=>$this->brand,
//                'social_facebook'=>$this->social_facebook,
//                'social_instagram'=>$this->social_instagram,
//                'social_youtube'=>$this->social_youtube,
//                'social_blog'=>$this->social_blog,
//                'inspirations'=>$this->inspirations,
//                'hobby'=>$this->hobby,
//                'phone_model'=>$this->phone_model,
//                'android'=>$this->android

                'name'=>$name,
                'surname'=>$surname,
                'email'=>$email,
                'birthdate'=>$birthdate,
                'description'=>$description,
                'file'=>$file,
                'youtube'=>$youtube,
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
        }

    }

//       $newhtc = new Htc();
//       $newhtc->setName($_POST['name']);
//       $newhtc->setSurname($_POST['surname']);
//       $newhtc->setBirthdate($_POST['birthdate']);
//       $newhtc->setEmail($_POST['email']);
//       $newhtc->setDescription($_POST['description']);
//       $newhtc->setFile($_POST['file']);
//       $newhtc->setYoutube($_POST['youtube']);
//       $newhtc->setStartYear($_POST['start_year']);
//       $newhtc->setBrand($_POST['brand']);
//       $newhtc->setSocialFacebook($_POST['$social_facebook']);
//       $newhtc->setSocialInstagram($_POST['$social_instagram']);
//       $newhtc->setSocialYoutube($_POST['$social_youtube']);
//       $newhtc->setSocialBlog($_POST['$social_blog']);
//       $newhtc->setInspirations($_POST['inspirations']);
//       $newhtc->setHobby($_POST['hobby']);
//       $newhtc->setPhoneModel($_POST['phone_model']);
//       $newhtc->setAndroid($_POST['android']);
//       $newhtc->saveToDB($conn);

    }
    else {
        echo "Nie dziala";
    }
