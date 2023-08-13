<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<h1>Hello World!</h1>';

    $x = 1;
    $y = 3;
    $name = 'Brownhill';

    echo $x * $y + $x;

    echo 'Hello' . $name . '<br>';


    echo "Hello $name";

    // if conditions
    if ($x == 2 || $y == 3) {
        echo 'I see you';
    } else {
        print '<br> who de ?';
    }

    // Array 
    $watch = ['neslon', 'gits', 'glitz', 'umarz'];

    echo "<br>"; 

    print_r($watch);
    // or to get each files
    echo "<br>"; 

    echo $watch[0];

    ?>
</body>

</html>