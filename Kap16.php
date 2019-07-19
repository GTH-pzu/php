<?
function PocetDnu ($mesic, $rok)
{
  return cal_days_in_month(CAL_GREGORIAN, $mesic, $rok);
}
?>

<?
   echo PocetDnu (07, 2019);
?>
<br>
<TABLE>
<TR><TD>Číslo</TD><TD>Druhá mocnina</TD></TR>
<? $i=1; while ($i<=20):?>
    <TR><TD><?echo $i?></TD>
    <TD><?echo $i*$i?></TD></TR>
<?  $i++; endwhile; ?>
</TABLE>
<br>
<HTML> 
Já jsem speciální stránecka. Vím, že právě je <?echo Date("G:i")?>
</HTML>
