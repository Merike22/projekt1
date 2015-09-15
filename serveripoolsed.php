Tere Maailm
<?php
$Eesnimi = 'Merike';
$Perenimi = 'Tomson';
$Vanus = 22;
echo "$Eesnimi $Perenimi ($Vanus)";
$Eesnimi_algab_vokaaliga = in_array(strtolower($Eesnimi[0]), ['a','e','i','o','u','õ','ö','ö','ü']);
$isik = (object)['eesnimi'=>$Eesnimi, 'perenimi'=>$Perenimi, 'vanus'=>$Vanus];
$isik->sugu='Naine';
echo "{$isik->eesnimi} {$isik->perenimi} ({$isik->vanus}) {$isik->sugu}";
if ($Eesnimi_algab_vokaaliga) {
    echo " Nimi algab vokaaliga ";
} else {
    echo " Nimi ei alga vokaaliga ";
}
$a= 1.23;
$b=2.34;
echo $a+$b;

echo @$_GET['koer'];
