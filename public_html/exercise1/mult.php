<?php
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<th></th>";
        for($r=1; $r<=100; $r++)
        {
                echo "<th>$r </th>";
        }
        echo "</tr>";
        for($x=1; $x<=100; $x++)
        {
                echo "<tr>";
                echo "<th>$x</th>";
                for($r=1; $r<=100; $r++)
                {
                        $m = $x * $r;
                        echo "<td>$m</td>";
                }
                echo "</tr>";
        }
        echo "</table>";
?>
