<?php
$isik=array(
    'eesnimi'=>'Raul',
    'perenimi'=>'Muser',
    'vanus'=>26
);
$eesnimi_algab_vokaaliga=false;

echo $isik['eesnimi']." ".$isik['perenimi']."(".$isik['vanus'].")<br>";

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>