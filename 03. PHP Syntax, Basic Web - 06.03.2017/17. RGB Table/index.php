<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table * {
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php

    for ($c = 51; $c <= 255; $c += 51){
        echo "<tr>";
        echo "<td style=\"background-color: rgb($c, 0, 0)\">";
        echo "</td>";
        echo "<td style=\"background-color: rgb(0, $c, 0)\">";
        echo "</td>";
        echo "<td style=\"background-color: rgb(0, 0, $c)\">";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>