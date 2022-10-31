<?php
class auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;

};


$nieuweauto = new auto();
$nieuweauto ->  merk = "Volkswagen";
$nieuweauto ->  kleur = "rood";
$nieuweauto ->  type = "golf";
$nieuweauto ->  uitvoering = "station";
$nieuweauto ->  brandstof = "benzine";

echo $nieuweauto -> merk;
echo "<br>";
echo $nieuweauto -> kleur;
echo "<br>";
echo $nieuweauto -> type;
echo "<br>";
echo $nieuweauto -> uitvoering;
echo "<br>";
echo $nieuweauto -> brandstof;


?>