<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>

    <?php
    //Snack 4
    //Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    $randomNumbers = range(0, 100);
    shuffle($randomNumbers);

    $randomNumbers = array_slice($randomNumbers , 0,15);
    print_r($randomNumbers);
    ?>

</body>

</html>