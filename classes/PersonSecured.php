<?php


class PersonSecured {

    /*
    Dans cet exemple, mes attributs ont une visibilité privée donc pour accéder à la valeur de mon attribut en LECTURE j'ai besoin d'un GETTER et pour y accéder en MODIFICATION, j'ai besoin d'un setter
    */

    private $firstname ; 
    private $lastname ;
    private $age ;
    private $gender ;
    private $size;

    
    public function __construct(string $firstname= 'Jean' , string $lastname= 'Dupont', int $age=0, string $gender= "man", int $size = 165)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->gender = $gender;
        $this->size = $size;
    }
    // Je peux créer des getters et des setters individuellement pour chacun de mes attributs. Mais je peux aussi créer un get et un setter dit "généraliste"

    
    public function __get($attribut){
        return $this->$attribut;
    }

    public function __set($attribut, $newValue){
        return $this->$attribut = $newValue;
    }



    /*
    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname(string $newName){
        $this->firstname = $newName;
    }

    public function getLastname(){
        return $this->lastname;
    }
    
    public function getAge(){
        return $this->age;
    }

    /**
     * Get the value of gender
     */ 
    /*
    public function getGender()
    {
        return $this->gender;
    }
    */

    /**
     * Get the value of size
     */
    /* 
    public function getSize()
    {
        return $this->size;
    }
    */

    public function presentPerson()
    {

        echo 'Salut je m\'appelle'. $this->lastname.'<br>';
        if($this->gender == 'man'){
            echo 'Je suis un homme';
        }else{
            echo 'Je suis une femme';
        }
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
}

