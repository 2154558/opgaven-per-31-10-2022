<?php
class product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}



$dweil = new product();
$dweil -> merk = "hema";
$dweil -> prijs = "10";
$dweil -> type = "lang";
$dweil -> kleur = "rood";

$stofzuiger = new product();
$stofzuiger -> merk = "aegon";
$stofzuiger -> prijs = "50";
$stofzuiger -> type = "gfs505";
$stofzuiger -> kleur = "grijs";


echo $dweil -> merk;
echo "<br>";
echo $dweil -> prijs;
echo "<br>";
echo $dweil -> type;
echo "<br>";
echo $dweil -> kleur;
echo "<br>";

echo $stofzuiger -> merk;
echo "<br>";
echo $stofzuiger -> prijs;
echo "<br>";
echo $stofzuiger -> type;
echo "<br>";
echo $stofzuiger -> kleur;
?>