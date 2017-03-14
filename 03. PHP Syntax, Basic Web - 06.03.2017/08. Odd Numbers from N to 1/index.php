<html>
<head>
    <title>
        Odd Numbers from N to 1
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

    for($i = $n; $i > 0; $i--)
    {
        if ($i % 2 != 0) {
            echo $i . ' ';
        }
    }
}
?>
</body>
</html>