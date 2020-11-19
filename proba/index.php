<?php
$message = "wrong answer";
//echo "<script type='text/javascript'>alert('$message');</script>";

$izena= $_POST['izena'];
$eposta = $_POST['eposta'];
$pribatua = isset($_POST['pribatua']);
$iruzkina = $_POST['iruzkina'];

$bisitak = simplexml_load_file('/var/www/data/bisita_liburua.xml');
$berria = $bisitak->addChild('bisita');

$berria->addChild('data',date("l"));
$berria->addChild('izena',$izena);
$berria->addChild('iruzkina',$iruzkina );
$berria->addChild('eposta',$eposta );

$bisitak->asXML('/var/www/data/bisita_liburua.xml');

?>
