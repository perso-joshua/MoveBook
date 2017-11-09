<?php

class LocationLongueDuree extends Location {
	
    //Declaration de la constante
    const PRIX = 7;
    
    //Declaration des attributs
    private $duree;
    
    //Declaration des methodes
    
    
    public function getDuree() {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }
	
	public function __construct( $dateDebut, $duree) {
		parent::__construct($dateDebut);
		$this->duree= $duree;
    }
    
	public function calculerCout(){
        return $this->getDuree()*self::PRIX;
    }
	
	public function calculerDateFin(){
		$date = $this->getDateDebut();
		$interval = $this->getDuree();
		$date->add(new DateInterval('P'.$interval.'D'));
		return $date;
	}
	
	public function getDureeAvecUnite(){
        return $this->getDuree()." jours";
    }
	
	public function __toString(){
        echo'<br />Numero : '.  $this->getNumero()
        . '<br />Date de début : '.  $this->getDateFr($this->getDateDebut())
        . '<br />Duree : '.$this->getDureeAvecUnite();
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
