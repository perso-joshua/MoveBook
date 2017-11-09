<?php

Class Location {
    
    //Declaration de la constante
    const PRIX = 9;
    
    //Declaration des attributs
    private static $nombre = 0;
    protected $numero;
    protected $dateDebut;
    private $duree = 1 ;
    
    //Declaration des methodes
    
    public function getNumero() {
        return $this->numero;
    }
    
    public function setNumero($numero) {
            $this->numero = $numero;
    }
    
    public function addNumero(){
        $numero = self::$nombre+1;
        $this->setNumero($numero);
        self::$nombre++;
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut) {
        if($dateDebut==NULL){
            $dateDebut = new DateTime();
            $this->dateDebut = $dateDebut;
        }  else {
            $this->dateDebut = $dateDebut;
        }
    }
    
    public function getDuree() {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }
    
     public function __construct(DateTime $dateDebut = NULL) {
        $this->addNumero();
        $this->setDateDebut($dateDebut);
        //self::ajouterEtat();
    }
	 
    public function getDateFr($date) {
        //$date = $this->getDateDebut();
        return $date->format('d/m/Y');
    }
    
    public function calculerCout(){
        return self::PRIX*$this->getDuree();
    }
    
    public function getDureeAvecUnite(){
        return $this->getDuree()." jours";
    }

    public function __toString(){
        echo'<br />Numero : '.$this->getNumero()
        . '<br />Date de début : '.$this->getDateFr($this->getDateDebut())
        . '<br />Duree : '.$this->getDureeAvecUnite();
    }

    public function estEnAttente(){
        $now = new DateTime();
        $res = True;
        
        if ($now > $this->getDateDebut()){
           $res  = FALSE;
        }
        return res;
    }
    public function estEnCours(){
        $now = new DateTime();
        $res = True;
        
        if ($now > $this->getDateFin()){
           $res  = FALSE;
        }
        return res;
    }
    public function estTerminee(){
        $now = new DateTime();
        $res = True;
        
        if ($now < $this->getDateFin()){
           $res  = FALSE;
        }
        return res;
    }
    
    /*public static function ajouterEtat(){
        $tab = array();
        if ($this->estEnAttente()){
            $enAttente = 'en Attente';
        }  else {
            $enAttente = '';
        }
        if ($this->estEnCours()){
            $enCours = 'en Cours';
        }  else {
            $enCours = '';
        }
        if ($this->estTerminee()){
            $terminee = 'Terminee';
        }  else {
            $terminee = '';
        }        
        
        $tab[self::$nombre] = array_push($enAttente,$enCours,$terminee);
    }
    
    public function afficherEtats() {
        //echo ;
    }*/
}
