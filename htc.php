<?php
/**
 * Created by PhpStorm.
 * User: loki
 * Date: 31.10.17
 * Time: 11:04
 */
//include_once 'database.php';

class Htc {

    private $id = "";
    private $name = "";
    private $surname = "";
    private $birthdate = "";
    private $email = "";
    private $description="";
    private $file = "";
    private $youtube = "";
    private $start_year = "";
    private $brand = "";
    private $social_facebook = "";
    private $social_instagram = "";
    private $social_youtube = "";
    private $social_blog = "";
    private $inspirations = "";
    private $hobby = "";
    private $phone_model = "";
    private $android = "";

    /**
     * Htc constructor.
     * @param string $id
     * @param string $name
     * @param string $surname
     * @param string $birthdate
     * @param string $email
     * @param string $description
     * @param string $file
     * @param string $youtube
     * @param string $start_year
     * @param string $brand
     * @param string $social_facebook
     * @param string $social_instagram
     * @param string $social_youtube
     * @param string $social_blog
     * @param string $inspirations
     * @param string $hobby
     * @param string $phone_model
     * @param string $android
     */
    public function __construct($id, $name, $surname, $birthdate, $email, $description, $file, $youtube, $start_year, $brand, $social_facebook, $social_instagram, $social_youtube, $social_blog, $inspirations, $hobby, $phone_model, $android)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->birthdate = $birthdate;
        $this->email = $email;
        $this->description = $description;
        $this->file = $file;
        $this->youtube = $youtube;
        $this->start_year = $start_year;
        $this->brand = $brand;
        $this->social_facebook = $social_facebook;
        $this->social_instagram = $social_instagram;
        $this->social_youtube = $social_youtube;
        $this->social_blog = $social_blog;
        $this->inspirations = $inspirations;
        $this->hobby = $hobby;
        $this->phone_model = $phone_model;
        $this->android = $android;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * @param string $youtube
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
    }

    /**
     * @return string
     */
    public function getStartYear()
    {
        return $this->start_year;
    }

    /**
     * @param string $start_year
     */
    public function setStartYear($start_year)
    {
        $this->start_year = $start_year;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getSocialFacebook()
    {
        return $this->social_facebook;
    }

    /**
     * @param string $social_facebook
     */
    public function setSocialFacebook($social_facebook)
    {
        $this->social_facebook = $social_facebook;
    }

    /**
     * @return string
     */
    public function getSocialInstagram()
    {
        return $this->social_instagram;
    }

    /**
     * @param string $social_instagram
     */
    public function setSocialInstagram($social_instagram)
    {
        $this->social_instagram = $social_instagram;
    }

    /**
     * @return string
     */
    public function getSocialYoutube()
    {
        return $this->social_youtube;
    }

    /**
     * @param string $social_youtube
     */
    public function setSocialYoutube($social_youtube)
    {
        $this->social_youtube = $social_youtube;
    }

    /**
     * @return string
     */
    public function getSocialBlog()
    {
        return $this->social_blog;
    }

    /**
     * @param string $social_blog
     */
    public function setSocialBlog($social_blog)
    {
        $this->social_blog = $social_blog;
    }

    /**
     * @return string
     */
    public function getInspirations()
    {
        return $this->inspirations;
    }

    /**
     * @param string $inspirations
     */
    public function setInspirations($inspirations)
    {
        $this->inspirations = $inspirations;
    }

    /**
     * @return string
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * @param string $hobby
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    }

    /**
     * @return string
     */
    public function getPhoneModel()
    {
        return $this->phone_model;
    }

    /**
     * @param string $phone_model
     */
    public function setPhoneModel($phone_model)
    {
        $this->phone_model = $phone_model;
    }

    /**
     * @return string
     */
    public function getAndroid()
    {
        return $this->android;
    }

    /**
     * @param string $android
     */
    public function setAndroid($android)
    {
        $this->android = $android;
    }

    public function saveToDB(PDO $conn) {

        $stmt = $conn->prepare('INSERT INTO htc(name, surname, birthdate, email, description, file, youtube, start_year, brand, social_facebook, social_instagram, social_youtube, social_blog, inspirations, hobby, phone_model, android)
                                                VALUES (:name, :surname, :birthdate, :email, :description, :file, :youtube, :start_year, :brand, :social_facebook, :social_instagram, :social_youtube, :social_blog, :inspirations, :hobby, :phone_model, :android)');
        $result = $stmt->execute([

                'name'=>$this->name,
                'surname'=>$this->surname,
                'email'=>$this->email,
                'birthdate'=>$this->birthdate,
                'description'=>$this->description,
                'file'=>$this->file,
                'youtube'=>$this->youtube,
                'brand'=>$this->brand,
                'social_facebook'=>$this->social_facebook,
                'social_instagram'=>$this->social_instagram,
                'social_youtube'=>$this->social_youtube,
                'social_blog'=>$this->social_blog,
                'inspirations'=>$this->inspirations,
                'hobby'=>$this->hobby,
                'phone_model'=>$this->phone_model,
                'android'=>$this->android
            ]);

        if ($result!==false) {
            $this->id = $conn->lastInsertId();
            return true;
        }

    }


}