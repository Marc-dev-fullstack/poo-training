<?php 
require_once "exo_poo.php";
class Rectangle extends Forme{
    public $longueur;
    public $largeur;
    public function __construct($longueur, $largeur)
    {
        $this->longueur= $longueur;
        $this->largeur= $largeur;
    }
    public function CalculerAire()
    {
        return $this->longueur* $this->largeur;
        
    }
    public function CalculerPerimetre()
    {
        return 2* ($this->longueur + $this->largeur);
    }

}
$monRectangle = new Rectangle(12, 14);
$AireDuRectangle = $monRectangle->CalculerAire();
$PerimetreDuRectangle= $monRectangle->CalculerPerimetre();
echo "L'Aire du Rectangle est: $AireDuRectangle \n";
echo "Le perimetre du Rectangle est:$PerimetreDuRectangle ";
?>