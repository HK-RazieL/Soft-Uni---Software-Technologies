<html>
<head>
    <title>
        Fibonacci Sequence
    </title>
</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" value="bruh!" />
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $first = 1;
    $second = 1;
    $third = 2;

    echo 1 . ' ';
    for ($i = 1; $i < $n; $i++) {
        echo $second . ' ';
        $third = $first + $second;
        $first = $second;
        $second = $third;
    }
}
?>
</body>
</html>