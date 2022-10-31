<?php
class robot{
    public $naam;
    public $geluid;
    public $voortstuwing;
    public function setsoort($soort_parameter){
        $this ->geluid = $soort_parameter;
    }

    public function getsoort(){
        return $this->geluid ;
    }
}

$wally = new robot();
$wally -> naam = 'wall-e';
$wally -> setsoort('boopbeep');
$wally -> voortstuwing = 'rollend';

$wolly = new robot();
$wolly -> naam = 'woll-e';
$wolly -> setsoort ('beepboop');
$wolly -> voortstuwing = 'lopend';


echo $wally -> naam;
echo "<br>";
echo $wolly -> getsoort();
echo "<br>";
echo $wally -> voortstuwing;
echo "<br>";
echo $wolly -> naam;
echo "<br>";
echo $wolly -> getsoort();
echo "<br>";
echo $wolly -> voortstuwing;


?>