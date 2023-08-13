<?php
$title = 'PHP 101 for all';
$favwatch = ['neslon', 'gits', 'glitz', 'umarz'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCode :: <?= $title; ?> </title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>sn</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($favwatch as $fw){}
            ?>
            
        </tbody>
    </table>
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


    if (isset($watch[3])) {
        echo $watch[3];
    } else {
        echo 'Watch no de market';
    }

    //Associate Array
    $guitar = [
        'ors' => 'vela',
        'name' => 'uche prome',
        'olx' => 'jiji'
    ];
    if (isset($guitar['olx'])) {
        echo $guitar['olx'];
    } else {
        echo 'Watch no de market';
    }
    // Loopp 
    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }
    ?>
</body>

</html>