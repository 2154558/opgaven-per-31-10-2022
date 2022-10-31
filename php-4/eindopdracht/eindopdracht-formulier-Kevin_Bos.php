<?php

class weg{
    public $afstand;
    public function setsoort($soort_parameter){
        $this ->vertraging = $soort_parameter;
    }

    public function getsoort(){
        return $this->vertraging ;
    }
}
class voertuig{
    public $voertuig;
    public $bandenspanning;
    public function setsoort($soort_parameter){
        $this ->max_snelheid = $soort_parameter;
    }

    public function getsoort(){
        return $this->max_snelheid ;
    }


}

$voertuig1 = new voertuig();
    $voertuig1 -> voertuig = $_POST["scooter"];
    $voertuig1 -> bandenspanning = ($_POST["bandenspanning"] / 100);
    $voertuig1 -> max_snelheid = $voertuig1 -> voertuig * $voertuig1 -> bandenspanning * 1000;

$voertuig2 = new voertuig();
    $voertuig2 -> voertuig = $_POST["fiets"];
    $voertuig2 -> bandenspanning = ($_POST["bandenspanning2"] / 100);
    $voertuig2 -> max_snelheid = $_POST["fiets"] * $voertuig2 -> bandenspanning * 1000;


$afstand = new weg();
    $afstand -> afstand = $_POST["reisafstand"] * 1000;
    $afstand -> vertraging = $_POST["vertraging"];



// voertuig1 = scooter = reistijd1
//voertuig2 = fiets = reistijd2
$reistijd1 = (($afstand -> afstand / $voertuig1 -> max_snelheid) * 60) + $afstand -> vertraging;
$reistijd2 = (($afstand -> afstand / $voertuig2 -> max_snelheid) * 60) + $afstand -> vertraging; 


if($reistijd1 < $reistijd2){

    echo "brommer is nu de slimste optie.";
    echo "<br>";
    echo "de reistijd met de brommer $reistijd1 minuten";
    echo "<br>";
    echo "tegenover de reistijd met de fiets $reistijd2 minuten";


}
else{
    echo "fiets is nu de slimste optie";
    echo "<br>";
    echo "reistijd met de fiets $reistijd2 minuten";
    echo "<br>";
    echo "tegenover de reistijd met de brommer $reistijd1 minuten";
}


?>