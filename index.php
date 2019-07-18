
<HTML> 
Já jsem speciální stránka. Vím, že právě je <?echo Date("G:i")?>
</HTML>
<br>
<br>
<? #phpinfo();?>
<br>
<br>
<?php

echo "Hello World"; 

?>

<?
/*
Nevím, jestli to, co napsáno v tomto skriptu bude fungovat.
Ještě se na to budu muset podívat.
*/
?>

<?
# skriptu je úplně jedno, co tu bude
?>
<br>
<?
//logický typ
$mam_malo_penez = TRUE;
//celočíselný typ
$plat = 10000;
//desetinné číslo
$disketa = 3.5;
//řetězec
$prohlaseni = "Právě se vracím z pražského hradu! ...";
echo $mam_malo_penez."<BR>";
echo $plat."<BR>";
echo $disketa."<BR>";
echo $prohlaseni."<BR>";
?>
<br>
<?
$pristup_odepren = TRUE;
if ($pristup_odepren) echo "Na tuto stránku se nemůžete dostat bez autorizace";
?>

<?
$muj_string="Pepa";
$muj_integer=2;
$muj_float=3.5;
$muj_boolean=FALSE;
// pokusíme se nějak přetypovat každou proměnnou...
echo "Typ proměnné muj_string byl <B>".gettype($muj_string)."</B>";
echo " a hodnota byla <B>".$muj_string."</B>. ";
settype($muj_string, "boolean");
echo "Po změně na <B>".gettype($muj_string)."</B> je hodnota <B>".$muj_string."</B>.<BR>\n";

echo "Typ proměnné muj_integer byl <B>".gettype($muj_integer)."</B>";
echo " a hodnota byla <B>".$muj_integer."</B>. ";
settype($muj_integer, "float");
echo "Po změně na <B>".gettype($muj_integer)."</B> je hodnota <B>".$muj_integer."</B>.<BR>\n";

echo "Typ proměnné muj_float byl <B>".gettype($muj_float)."</B>";
echo " a hodnota byla <B>".$muj_float."</B>. ";
settype($muj_float, "integer");
echo "Po změně na <B>".gettype($muj_float)."</B> je hodnota <B>".$muj_float."</B>.<BR>\n";

echo "Typ proměnné muj_boolean byl <B>".gettype($muj_boolean)."</B>";
echo " a hodnota byla <B>".$muj_boolean."</B>. ";
settype($muj_boolean, "integer");
echo "Po změně na <B>".gettype($muj_boolean)."</B> je hodnota <B>".$muj_boolean."</B>.<BR>\n";
?>
<br>
<?
$fronta[1]="Petr";
$fronta[2]="Pavel";
$fronta[3]="Maruška";
$fronta[4]="Eva";
$fronta[5]="LinuxSoft tým";
?>

<?
$a=0.1; $b=0.7;
echo 0.8-$a-$b;
?>
