Tere Maailm
<?php
$Eesnimi = 'Merike';
$Perenimi = 'Tomson';
$Vanus = 22;
echo "$Eesnimi $Perenimi ($Vanus)";
$Eesnimi_algab_vokaaliga=false;
$isik = (object)['eesnimi'=>$Eesnimi, 'perenimi'=>$Perenimi, 'vanus'=>$Vanus];
$isik->sugu='Naine';
echo "{$isik->eesnimi} {$isik->perenimi} ({$isik->vanus}) {$isik->sugu}";
if (in_array(strtolower($Eesnimi[0]), ['a','e','i','o','u','õ','ö','ö','ü'])) {
    echo " Nimi algab vokaaliga";
} else {
    echo " Nimi ei alga vokaaliga";
}
