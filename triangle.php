<?php 
require_once "exo_poo.php";
class Triangle extends Forme{
    public $nbrcote;
    public $cote;
    public $base;
    public $hauteur;
    public function __construct($nbrcote,$cote, $base, $hauteur)
    {
        $this->nbrcote= $nbrcote;
        $this->cote= $cote;
        $this->base= $base;
        $this->hauteur= $hauteur;
    }
    public function CalculerAire()
    {
        return $this->base * $this->hauteur/2;

        
    }
    public function CalculerPerimetre()
    {
       if ($this->nbrcote ==3) {
        return $this->cote+ $this->cote +$this->cote;

       }
    }

}
$monTriangle = new Triangle(3, 4, 5, 7); 
$AireDuTriangle = $monTriangle->CalculerAire();
$PerimetreDuTriangle = $monTriangle->CalculerPerimetre();
echo "l'Aire du Triangle est : $AireDuTriangle \n";
echo "Le Perimetre du Triangle est $PerimetreDuTriangle ";

?>