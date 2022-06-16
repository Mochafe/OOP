<?php
include("classes/Employe.class.php");

$emp = new Employe();
$emp->setNom("Pasquet");
$emp->setPrenom("Florian");
$emp->setDate(new DateTime());
$emp->setPoste("Dév");
$emp->setService("Informatique");
$emp->setSalaire(35000);
$emp->setTransfert((new DateTime())->modify("+1 days"));
$date = new DateTime();

echo("Date: " . date_diff($emp->getDate(), new DateTime)->y);

echo ("<br>Nom: " . $emp->getNom()
    . "<br>Prénom: " . $emp->getPrenom()
    . "<br>Date d'embauche: " . $emp->getDate()->format("d/m/Y")
    . "<br>Poste: " . $emp->getPoste()
    . "<br>Service: " . $emp->getService()
    . "<br>Salaire: " . $emp->getSalaire()
);

$emp->processBonus();

echo("<br>Salaire + bonus: " . $emp->getSalaire());
?>