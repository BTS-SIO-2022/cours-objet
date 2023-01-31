<?php

$articleUn = [
    'titre' => 'Comment dresser son chien ?',
    'contenu' => 'Lorem ipsum',
    'autheur' => 'Mathilde Renversade',
    'date-publication' => '12.01.2023',
];

$articleDeux = [
    'titre' => 'Quelle est la meilleure marque de croquettes ?',
    'contenu' => 'Lorem ipsum',
    'autheur' => 'Marie Chevalier',
    'date-publication' => '.25.07.2022',
];

function donneTitreArticle(array $article){
    echo $article['titre'];
};

donneTitreArticle($articleDeux);

$personneUn = [
    "lastname" => 'Renversade',
    "firstname" => 'Mathilde', 
    "age" =>  36,
    "gender" => "woman",
    "size" => 160,
];

$personneDeux = [
    "lastname" => 'Dupont',
    "firstname" => 'Jerôme', 
    "age" =>  20,
    "gender" => "man",
    "size" => 172,
];

function presentPerson(array $person){
    echo 'Je m\'appelle '.$person['firstname'].'<br>';
    if($person['gender']=='man'){
        echo 'Je suis un homme';
    }else{
        echo 'Je suis une femme';
    }
}

presentPerson($personneDeux);

// Maintenant on va faire exactement la même chose en objet. Pour cela, première chose à faire créer mon moule soit ma classe. 

/*Pour pouvoir créer des objets de type Person dans mon fichier de script index.php, nous avons besoin que mon script "connaisse" l'existence de ma classe. Pour cela, je vais utiliser la fonction require ou include de php, qui fait comme un "copié/collié" du code contenu dans le fichier spécifié. 
Lien documentation : 
require : https://www.php.net/manual/fr/function.require.php
include : https://www.php.net/manual/fr/function.include.php
La différence entre les fonctions, c'est que si jamais le fichier n'a pas été correctement importé, require me déclenche une erreur et stop le script tandis qu'include déclenche un warning et continu.  
*/

require 'classes/Person.php';

// Maintenant que j'ai crée ma classe et que j'ai inclue mon fichier de classe dans mon script, je créé mon objet
$personPaul = new Person('Paul', 'Verrier', 38, 'man', 180);

//var_dump($personPaul);

$personMarie = new Person('Marie', 'Chevalier', 26, 'woman', 163);

//var_dump($personMarie);

var_dump($personPaul, $personMarie);
