<?php

#PHP - Les formulaires
##Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)


##Exercice 1
##Créer un formulaire demandant le nom et le prénom.
##Ce formulaire doit rediriger vers la page user.php avec la méthode GET.

##Exercice 3
##Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.

echo $_GET ['name']." ";
echo $_GET ['fname'];
echo "<br>";


##Exercice 2
##Créer un formulaire demandant le nom et le prénom.
##Ce formulaire doit rediriger vers la page user.php avec la méthode POST.

##Exercice 4
##Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.

echo $_POST ['nom']." ";
echo $_POST ['fnom'];
echo "<br>";



