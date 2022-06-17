<?php
include("classes/Magasins.class.php");

$magasinA = new Magasins("Gifi", "Rue Antoine Parmentier", 02100, "Saint-Quentin");
$magasinA->addEmploye(new Employe("Pasquet", "Florian", DateTime::createFromFormat("d/m/Y", "15/11/2016"), "Dév", 30000, "Informatique", DateTime::createFromFormat("d/m/Y", "30/11/2022")));
$magasinA->addEmploye(new Employe("Jean", "Miche", DateTime::createFromFormat("d/m/Y", "26/04/2013"), "ELS", 22000, "Vente", DateTime::createFromFormat("d/m/Y", "30/11/2022")));

$magasinB = new Magasins("Action", "Rue de la côte", 44132, "Mont-Henry");
$magasinB->addEmploye(new Employe("Jean", "Bon", DateTime::createFromFormat("d/m/Y", "04/01/2010"), "CEO", 50000, "Bureau", DateTime::createFromFormat("d/m/Y", "30/11/2022")));



foreach (Magasins::$magasins as $magasin) {
    foreach ($magasin->getEmployes() as $employe) {
        echo ("<h1>Information Employées</h1>"
            . "<br>Nom: " . $employe->getNom()
            . "<br>Prénom: " . $employe->getPrenom()
            . "<br>Date d'embauche: " . $employe->getDate()->format("d/m/Y")
            . "<br>Poste: " . $employe->getPoste()
            . "<br>Service: " . $employe->getService()
            . "<br>Salaire: " . $employe->getSalaire()
            . "<br><h1>-------------------------------------------------</h1>"
        );

        $employe->processBonus();

        echo ("<br>Salaire + bonus: " . $employe->getSalaire() . "<br><br><br>");
    }
}
?>
