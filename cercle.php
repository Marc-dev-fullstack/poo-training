<?php 
require_once "exo_poo.php";

class Cercle extends Forme {
    public $rayon;
    public function __construct($rayon)
    {
        $this->rayon= $rayon;
    }
    public function CalculerAire()
    {
        return $this->rayon* $this->rayon * 3.14;
        
    }
    public function CalculerPerimetre()
    {
        return 2* 3.14* $this->rayon;
    }

}
$monCercle = new Cercle(4);
$AireDuCercle = $monCercle->CalculerAire();
$PerimetreDuCercle = $monCercle->CalculerPerimetre();
echo "L'Aire du Cercle est: $AireDuCercle \n";
echo "Le perimetre du Cercle est:$PerimetreDuCercle ";
?>