<?php
 class lamp{
     public $merk;
     public $helderheid;
     public function setstatus($soort_parameter){
        $this -> isaan = 'false';
    }
    }

$woonkamerlamp = new lamp();
$woonkamerlamp -> kleur = "geel";
$woonkamerlamp -> helderheid = "zacht";
$woonkamerlamp -> setstatus(false);


$keukenlamp = new lamp();
$keukenlamp -> kleur = "wit";
$keukenlamp -> helderheid = 'fel';
$keukenlamp -> setstatus(true);

echo $woonkamerlamp -> kleur;
echo "<br>";
echo $woonkamerlamp -> helderheid;
echo "<br>";
echo $woonkamerlamp ->isaan;
echo "<br>";

echo $keukenlamp -> kleur;
echo "<br>";
echo $keukenlamp -> helderheid;
echo "<br>";
echo $keukenlamp ->isaan;
echo "<br>";
?>