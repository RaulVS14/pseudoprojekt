<?php

$isik=(object) array('eesnimi'=>'Raul', 'perenimi'=>'Muser','vanus'=>26,'sugu'=>'mees');
$eesnimi_algab_vokaaliga=false;

echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>