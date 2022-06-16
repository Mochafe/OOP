<?php

class Employe
{
    private $_nom;
    private $_prenom;
    private $_date;
    private $_poste;
    private $_salaire;
    private $_service;
    private DateTime $_dateTransfert;

    //--------Getter/Setter------------
    //Nom
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    //Prenom
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    //Date
    public function setDate(DateTime $date)
    {
        $this->_date = $date;
    }
    public function getDate()
    {
        return $this->_date;
    }
    //Poste
    public function setPoste($poste)
    {
        $this->_poste = $poste;
    }
    public function getPoste()
    {
        return $this->_poste;
    }
    //Salaire
    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }
    public function addSalaire($salaire) {
        $this->_salaire += $salaire;
    }
    public function getSalaire()
    {
        return $this->_salaire;
    }
    //Service
    public function setService($service)
    {
        $this->_service = $service;
    }
    public function getService()
    {
        return $this->_service;
    }
    //Date de transfert de la prime
    public function setTransfert($dateTransfert)
    {
        $this->_dateTransfert = $dateTransfert;
    }
    public function getTransfert()
    {
        return $this->_dateTransfert;
    }

    //---------Fonction---------
    public function yearsFromStart() {
        return date_diff($this->_date, new DateTime())->y;
    }

    public function calculateBonus() {
        return $this->_salaire * (0.05 + 0.02 * $this->yearsFromStart());
    }

    public function processBonus() {
        if($this->_dateTransfert < new DateTime()) {
            echo("<h1>" . $this->calculateBonus() . "€ a était transférer aujourd'hui le " . $this->_dateTransfert->format("d/m/Y H:m") . "</h1>");
            $this->addSalaire($this->calculateBonus());
        } else {
            echo("<h1>" . $this->calculateBonus() . "€ sera transférer le " . $this->_dateTransfert->format("d/m/Y") . "</h1>");
        }
        
    }
}
