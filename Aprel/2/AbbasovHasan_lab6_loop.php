<!DOCTYPE html>
<html>
<head>
    <title>Vurma </title>
</head>
<body>
 <table border="0">
        <?php
            for ($a = 1; $a <= 9; $a++) {
             echo "<tr>";
                for ($b = 1; $b <= 9; $b++) {
                    $result = $a * $b;
                    echo "<td>" . $a . "*" . $b . "=" . $result . "</td>";
                }
                echo "</tr>";
            }
        ?>
</table>
</body>
</html>