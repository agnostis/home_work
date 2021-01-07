<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Lesson 2</title>
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
            for ($column = 1;$column <= 10;$column++)
            {
                $temp = $row * $column;
                if (strlen($temp) >= 2)
                {
                    $first = floor($temp / 10);
                    $second = $temp % 10;
                    echo changeColor($row) . ' x ' . changeColor($column) . ' = ' . changeColor($first) . changeColor($second);
                    echo '</br>';
                    $first = 0;
                    $second = 0;
                    continue;
                }
                $second = $temp % 10;
                echo changeColor($row) . ' x ' . changeColor($column) . ' = ' . changeColor($second);
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
            $temp = $row * $column;
            if (strlen($temp) >= 2)
            {
                $first = floor($temp / 10);
                $second = $temp % 10;
                echo changeColor($row) . ' x ' . changeColor($column) . ' = ' . changeColor($first) . changeColor($second);
                echo '</br>';
                $first = 0;
                $second = 0;
                continue;
            }
            $first = floor($temp / 10);
            $second = $temp % 10;
            echo changeColor($row) . ' x ' . changeColor($column) . ' = ' . changeColor($second);
            echo '</br>';
        }
        echo '</td>';

    }
    echo '</tr>';
    echo '</table>';
}
function changeColor($num)
{
    $red = '<span style="color:red">';
    $green = '<span style="color:green">';
    $yellow = '<span style="color:yellow">';
    $blue = '<span style="color:blue">';
    $num = $num == 10 ? $red . (floor($num / 10) . '</span>' . 0) : $num;

    switch ($num)
    {
        case 1:
            $num = $red . $num . '</span>';
            break;
        case 2:
            $num = $green . $num . '</span>';
            break;
        case 3:
            $num = $yellow . $num . '</span>';
            break;
        case 4:
            $num = $blue . $num . '</span>';
            break;
    }
    return $num;
}
?>
</body>
</html>