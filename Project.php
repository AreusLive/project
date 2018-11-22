<?php
$n_min=1; $n_max=10;
$m_min=1; $m_max=10;
print '<table border="1">';
for ($i=$n_min; $i<=$n_max; $i++)
{
 if($i==$n_min)
 {
   print "<tr><td> * </td>";
   for ($k=$m_min; $k<=$m_max; $k++)
    {
     print "<td>$k</td>";
    }
    print "</tr>";
 }
 print "<tr>";
 print "<td>$i</td>";
 for ($J=$m_min; $J<=$m_max; $J++)
 {
    $L=$i*$J;
    print "<td>$L</td>";
 }

    print "</tr>";
}
print '</table>';
?>
