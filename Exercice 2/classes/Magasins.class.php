<?php
include("Employe.class.php");

class Magasins
{
    public static $magasins = [];
    private static $ids = 0;
    private $_id;
    private $_nom;
    private $_adresse;
    private $_cp;
    private $_ville;
    public $_employes = [];
    #----------Constructor/Destructor--------
    public function __construct($nom, $adresse, $cp, $ville)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
        $this->_id = Magasins::$ids;
        array_push(Magasins::$magasins, $this);
        Magasins::$ids++;
    }
    function __destruct()
    {
        unset(Magasins::$magasins[$this->_id]);
    }
    #--------Getter/Setter---------
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCP()
    {
        return $this->_cp;
    }
    public function setCP($cp)
    {
        $this->_cp = $cp;
    }

    public function getVille()
    {
        return $this->_ville;
    }
    public function setVille($ville)
    {
        $this->_ville = $ville;
    }
    #----------Employe----------
    public function addEmploye(Employe $emp)
    {
        //$this->_employes->array_push($emp);
        array_push($this->_employes, $emp);
    }
    public function getEmployes() {
        return $this->_employes;
    }
}
