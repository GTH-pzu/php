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
<HTML> 
Já jsem speciální stránecicka. Vím, že právě je <?echo Date("G:i")?>
</HTML>
