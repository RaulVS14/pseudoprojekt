<?php

$isik=(object) array('eesnimi'=>'Raul', 'perenimi'=>'Muser','vanus'=>26,'sugu'=>'mees');
$eesnimi_algab_vokaaliga=strstr("AEIOUÕÄÜ",$isik->{'eesnimi'}[0]);
$arv1=1.23;
$arv2=2.34;
$summa=$arv1+$arv2;

echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";
echo "Arvude ".$arv1." ja ".$arv2." summa on ".$summa."<br>";
if(isset($_GET['koer'])){
    echo $_GET['koer']."<br>";
};
if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>