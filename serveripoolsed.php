<?php
// Objekt
$isik=(object) array('eesnimi'=>'Raul', 'perenimi'=>'Muser','vanus'=>26,'sugu'=>'mees');
// Boolean, mis saab väärtuse vastavalt kas nimes oli vokaal või mitte
$eesnimi_algab_vokaaliga=strstr("AEIOUÕÄÜ",$isik->{'eesnimi'}[0]);
// Komaga arvud
$arv1=1.23;
$arv2=2.34;
// Komaga arvude summa
$summa=$arv1+$arv2;
// Kuvab andmed objektist $isik
echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";
// Kuvab arvude summa
echo "Arvude ".$arv1." ja ".$arv2." summa on ".$summa."<br>";
// Kui GET'i muutujaga koer kasutatakse, siis tagastab koer muutuja väärtuse
if(isset($_GET['koer'])){
    echo $_GET['koer']."<br>";
};
// Kui lehelt postitakse infot muutujaga kass, siis tagastab muutuja kass väärtuse
if(isset($_POST['kass'])){
    echo 'Kass on: '.$_POST['kass'].'<br>';
}
// Eelnevalt loodud booleani põhjal kuvatakse teade eesnime kohta
if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>
<!--- Form kassitõu sisestamiseks --->
<form action="?" method="post">
    <input name="kass" placeholder="Kassitõug">
    <input type="submit">
</form>