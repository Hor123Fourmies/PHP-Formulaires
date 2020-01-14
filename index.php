<?php

/*
##Exercice 5
##Créer un formulaire sur la page index.php avec :

Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.
*/
/*
##Exercice 6
##Avec le formulaire de l'exercice 5, si des données sont passées en POST ou en GET,
le formulaire ne doit pas être affiché.
Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.
*/
echo $_POST ['civilites']." ";
echo $_POST ['nom']." ";
echo $_POST ['fnom'];
echo "<br>";




##Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
##vérifier que le fichier transmis est bien un fichier pdf.

/*
Note :
 2 recherches à faire :
- Comment envoyer un fichier depuis un formulaire (partie front)
- Comment traiter un fichier envoyé en php (et sécuriser ce traitement)
*/