<?php

require 'Location.class.php';

require 'LocationLongueDuree.class.php';

require 'LocationCourteDuree.class.php';

$location1= new Location( new DateTime('2017-03-10'));

$location1->__toString();

echo '<br />';

echo "<br />Durée de la location : ". $location1->getDureeAvecUnite();

echo "<br />Coût de la location : ".$location1->calculerCout();

echo '<br />';

$location2 = new LocationLongueDuree(new DateTime('2017-03-15'),5);

$location2->__toString();

echo '<br />';

echo "<br />Durée de la location : ". $location2->getDureeAvecUnite();

echo "<br />Coût de la location : ".$location2->calculerCout();

//echo "<br />Date de fin de location : ".$location2->calculerDateFin();

echo '<br />';

$location3 = new LocationLongueDuree( new DateTime('2017-03-20'),3);

$location3->__toString();

echo '<br />';

echo "<br />Durée de la location : ". $location3->getDureeAvecUnite();

echo "<br />Coût de la location : ".$location2->calculerCout();

//echo "<br />Date de fin de location : ".$location3->calculerDateFin();

echo '<br />';

$location4 = new LocationCourteDuree(new DateTime(NULL),new DateTime(NULL),3);

$location4->__toString();

echo '<br />';

echo "<br />Date de la location : ". $location4->getDateFr($location4->getDateDebut());

//echo "<br />Date de fin de location : ".$location4->calculerDateFin();
































