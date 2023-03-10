<?php

// Un nom de classe en PHP s'écrit toujours en commençant avec une majuscule (PascalCase) et le fichier de la class a le même nom que la classe. Une classe = un fichier

class Person {
    public $firstname ; 
    public $lastname ;
    public $age ;
    public $gender ;
    public $size;

    /* Un constructeur c'est une méthode qui va s'exécuter automatiquement à l'instanciation de mon objet */

    
    public function __construct(string $firstname= 'Jean' , string $lastname= 'Dupont', int $age=0, string $gender= "man", int $size = 165)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->gender = $gender;
        $this->size = $size;
    }
    

    public function presentPerson()
    {

        /*
        THIS qu'est-ce que c'est ?
        This est une variable qui s'utilise dans le contexte de l'objet et fait référence à l'objet courant lui-même. Dans le cas ci-dessous, this représentera l'objet qui appelle la méthode. 
        */
        echo 'Salut je m\'appelle'. $this->lastname.'<br>';
        if($this->gender == 'man'){
            echo 'Je suis un homme';
        }else{
            echo 'Je suis une femme';
        }
    }
}