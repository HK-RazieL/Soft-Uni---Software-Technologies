<html>
<head>
    <title>
        N Factorial
    </title>
</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" value="bruh!" />
</form>
<?php
if (isset($_GET['num'])){
    $n = intval($_GET['num']);
    $temp = 1;
    for($i = 1; $i <= $n; $i++)
    {
        $temp *= $i;
    }
    echo $temp;
}
?>
</body>
</html>