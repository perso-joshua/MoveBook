<?php

class LocationCourteDuree extends Location {
	
    //Declaration de la constante
    const PRIX = 3;
    
    //Declaration des attributs
    protected $heureDebut;
    private $duree;
    
    //Declaration des methodes
    
	public function getHeureDebut() {
        return $this->heureDebut;
    }

    public function setHeureDebut($heureDebut) {
        if($heureDebut==NULL){
            $heureDebut = new DateTime();
            $this->heureDebut = $heureDebut->format('h:i');
        }  else {
            $this->heureDebut = $heureDebut->format('h:i');
        }
    }
    
    public function getDuree() {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }
	
	public function __construct($dateDebut, $heureDebut = NULL, $duree) {		
		parent::__construct($dateDebut);
		$this->duree= $duree;
		$this->setHeureDebut($heureDebut);
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
        return $this->getDuree()." heures";
    }
	
	public function __toString(){
        echo'<br />Numero : '.$this->getNumero()
        . '<br />Date de début : '.$this->getDateFr($this->getDateDebut())
        . '<br />Heure de début : '.$this->getHeureDebut()
        . '<br />Duree : '.$this->getDureeAvecUnite();
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
