<?php
class scooter{
 public $kleur;
 public $merk;
 public $inhoudtank;
}

$piago = new scooter();
$piago -> merk = "piago";
$piago -> kleur = "rood";
$piago -> inhoudtank = "6";

$peugeot = new scooter();
$peugeot -> merk = "peugeot";
$peugeot -> kleur = "zwart";
$peugeot -> inhoudtank = "7";


echo $piago -> merk;
echo "<br>";
echo $piago -> kleur;
echo "<br>";
    if($piago -> inhoudtank >= 6){
        echo "vol";
    }
else{
    echo "leeg";
}



echo "<br>";
echo $peugeot -> merk;
echo "<br>";
echo $peugeot -> kleur;
echo "<br>";
if($peugeot -> inhoudtank >= 6){
    echo "vol";
}
else{
echo "leeg";
}
?>