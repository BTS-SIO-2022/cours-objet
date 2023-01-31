# Histoire
 
La POO (programmation orientée objet), ses grands principes que l'on retrouve partout : 
- L'encapsulation
- l'héritage
- le polymorphisme

## Un objet, c'est quoi ?

Une réprésentation d'une entité matérielle ou immatérielle. Cette entité, elle possède des propriétés (= attributs) ou des actions (= méthodes) qui lui sont propres et spécifiques. Exemple : une voiture, une personne, un compte bancaire, une vidéo, une émotion. 

### Un attribut, c'est quoi ?

Caractéristiques propres à mon objet, on peut aussi dire "propriétés". Exemple, une voiture a différents attributs : un prix, un modèle, une marque, une motorisation, un nombre de porte, un nombre de places, etc etc. 

### Méthodes, c'est quoi ?

Une méthode, c'est une action applicable/réalisable par un objet. Exemple la voiture, ça peut rouler, freiner, tourner, klaxonner. Une vidéo ca peut être stopper, accélérer, ralentir, changer la résolution, changer le type d'encodage, etc, etc ... 

## Classe, c'est quoi ?

Une classe c'est un modèle, un moule, le plan de fabrication qui va définir la structure de mon objet = donc définir ses attributs et ses méthodes. Pour créer un objet, je vais instancier un objet à partir sa classe. 

## Visibilité 

La visibilité d'un attribut et d'une méthode permet de définir si on peut lire et écrire dans cet attribut depuis un code externe à la classe.

- public = open bar => autorise l'accès aux attributs et méthodes depuis l'extérieur, à tout le monde, pour faire ce qu'il veut (modifier, supprimer). Attention, le risque est de corrompre sa source de données. 

- private = sécurisé => seul le code à l'intérieur de ma classe peut lire ou modifier ma données. 

- protected = le code à l'intérieur des classes enfants peut lire et accéder aux attributs et méthodes de sa classe parente. 

### Les getter et les setter

Getter = c'est une méthode publique d'une classe permettant de retourner (ou lire) l'attribut ayant une visibilité private

Setter = c'est une méthode publique permettant de modifier un attribut ayant une visibilité private. 