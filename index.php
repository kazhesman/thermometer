<?php
$t = rand(-20,20);
$degrees = -20;
$color = null;
// <table>
//     <tr><th>Заголовок1</th><th>Заголовок2</th></tr>
//     <tr><td>Текст 1</td><td>Текст 2</td></tr>
//     <tr><td>Текст 3</td><td>Текст 4</td></tr>
// </table>
echo "<table border='1'>";
for ($i= 20; $i != $degrees; $i--) {
    $color = ($t == $i || $t > $i ? 'red' : 'yellow');
    echo "<tr>";
    echo "<td width='30'>$i</td>";
    echo "<td width='30'; bgcolor=\"$color\";>  </td>";
    echo "</tr>";
}
echo "</table>";