<?php
class computer{
    public $merk;
    public $hdd_capacity;
    public $memory;
}

$harde_schijf = new computer();
$harde_schijf -> merk = "seagate";
$harde_schijf -> hdd_capacity = "5tb";
$harde_schijf -> memory = "ja";


echo $harde_schijf -> merk;
echo $harde_schijf -> hdd_capacity;
echo $harde_schijf -> memory;
?>