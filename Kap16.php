<?
function PocetDnu ($mesic, $rok)
{
  return cal_days_in_month(CAL_GREGORIAN, $mesic, $rok);
}
?>

<?
function PrvniDen ($mesic, $rok)
{
  $anglickeporadi = date("w", mktime(0, 0, 0, $mesic, 1, $rok));
  return ($anglickeporadi==0) ? 7 : $anglickeporadi;
}
?>

<?
   echo PocetDnu (02, 2019);
?>
<br>
<?
   echo PrvniDen (08, 2019);
?>
<br>

<? echo $sloupcu = date("W", mktime(0, 0, 0, $mesic, $PocetDnu-7, $rok)) - date("W", mktime(0, 0, 0, $mesic, 1+7, $rok))+4; ?>

<br>

<?
$uzivatel="Petr";
$server="Linuxsoft";
echo "Uživatel ".$uzivatel." je vítán na serveru ".$server."!<BR>";
echo "Uživatel $uzivatel je vítán na serveru $server!<BR>";
?>

<br>
<?
$os=Array("Linux", "Windows", "Solaris", "FreeBSD");
sort($os);
print_r($os);
?>
<br>
<HTML> 
Já jsem speciální stránecka. Vím, že právě je <?echo Date("G:i")?>
</HTML>
