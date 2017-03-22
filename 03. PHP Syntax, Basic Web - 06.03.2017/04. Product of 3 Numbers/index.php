<html>
<head>
    <title>
        Product of 3 Numbers
    </title>
</head>
<body>
<form>
    X: <input type="text" name="num1" />
    Y: <input type="text" name="num2" />
    Z: <input type="text" name="num3" />

    <input type="submit" value="bruh!" />
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']))
{
    $x = intval($_GET['num1']);
    $y = intval($_GET['num2']);
    $z = intval($_GET['num3']);

    $counter = 0;
    if($x == 0|| $y == 0|| $z == 0)
    {
        echo "Positive";
        return;
    }

    if ($x < 0)
    {
        $counter++;
    }
    if ($y < 0)
    {
        $counter++;
    }
    if ($z < 0)
    {
        $counter++;
    }
    if ($counter % 2 == 0)
    {
        echo "Positive";
    }
    else
    {
        echo "Negative";
    }
}
?>
</body>
</html>