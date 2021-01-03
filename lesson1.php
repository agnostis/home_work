<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Lesson 1</title>
</head>
<body>
<?php
makeTable(5,10,1, "table");
makeTable(5,10,6,"table2");


function makeTable($row1,$column1,$start, $class){
    echo '<table class="'.$class.'">';
    echo '<tr>';
    if ($start > $row1){
        for ($row = 10; $row >= 6; $row--){
            echo '<td>';
            for ($column = 1; $column <= $column1; $column++) {
                echo $row . ' x ' . $column . ' = ' . $column * $row;
                echo '</br>';
            }
            echo '</td>';
        }
    }
    for ($row = $start; $row <= $row1; $row++) {
        echo '<td>'; // создаем td
        for ($column = 1; $column <= $column1; $column++) {
            echo $row . ' x ' . $column . ' = ' . $column * $row;
            echo '</br>';
        }
        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
}
?>
</body>
</html>