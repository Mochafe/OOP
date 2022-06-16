<?php
    include("classes/Personnage.class.php");

    $perso = new Personnage();
    $perso->setPrenom("Florian");
    $perso->setNom("Pasquet");
    $perso->setAge(22);
    $perso->setSexe("Homme");

    echo("Nom: " . $perso->getNom() . "<br>Prénom: " . $perso->getPrenom() . "<br>Age: " . $perso->getAge() . "<br>Sexe: " . $perso->getSexe());

?>