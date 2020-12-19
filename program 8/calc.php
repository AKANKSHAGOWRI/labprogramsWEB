<html>

<head>

</head>

<body>
    <?php

    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];
    switch ($op) {
        case '+':
            $res = $op1 + $op2;
            break;
        case '-':
            $res = $op1 - $op2;
            break;
        case '*':
            $res = $op1 * $op2;
            break;
        case '/':
            if ($op2 == 0)
                $res = 0;
            else
                $res = $op1 / $op2;
            break;
    }
    echo "<center><h1> simple calculator</h1></center>";
    echo "<center><h2>" . $op1 . $op . $op2 . "=" . $res . "</h2></center>";
    ?>
</body>

</html>