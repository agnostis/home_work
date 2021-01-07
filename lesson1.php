<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Lesson 1</title>
</head>
<body>
<?php
echo '<div>';
makeTable(5, 10, 1);
makeTable(5, 10, 6);
echo '</div>';

function makeTable($row1, $column1, $start)
{
    echo '<table>';
    echo '<tr>';
    if ($start > $row1)
    {
        for ($row = 6;$row <= 10;$row++)
        {
            echo '<td>';
            for ($column = 1;$column <= $column1;$column++)
            {
                echo $row . ' x ' . $column . ' = ' . $column * $row;
                echo '</br>';
            }
            echo '</td>';
        }
    }
    for ($row = $start;$row <= $row1;$row++)
    {
        echo '<td>';
        for ($column = 1;$column <= $column1;$column++)
        {
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