<html>
<head>
    <title>
        Prime Numbers from N to 1
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

    for ($i = $n; $i > 2; $i--) {
        $prime = true;

        for ($j = 2; $j <= sqrt($i); $j++) {

            if ($i % $j == 0) {
                $prime = false;
                break;
            }
        }
        if ($prime == true) {
            echo $i . ' ';
        }
    }
}
?>
</body>
</html>