<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>

<body>

    <?php
    //Snack 7
    //Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $studentsList = [
        'student1' => [
            'name' => 'Giggi',
            'lastname' => 'Dag',
            'votes' => [8, 7, 8, 6, 7, 7, 8, 9]
        ],
        'student2' => [
            'name' => 'Paul',
            'lastname' => 'Karkbrenner',
            'votes' => [10, 9, 8, 9]
        ],
        'student3' => [
            'name' => 'Pippo',
            'lastname' => 'Baudo',
            'votes' => [4, 3, 5, 2, 10, 9]
        ],
        'student4' => [
            'name' => 'Claudio',
            'lastname' => 'Bisio',
            'votes' => [10]
        ],
    ];

    $studentsKeys = array_keys($studentsList);

    for ($i = 0; $i < count($studentsList); $i++) {
        $average = round(array_sum($studentsList[$studentsKeys[$i]]['votes']) / count($studentsList[$studentsKeys[$i]]['votes']), 1) ;
        echo "<strong>" . $studentsKeys[$i] . "</strong>" . "<br><br>";

        echo "Name: " . $studentsList[$studentsKeys[$i]]['name'] . "<br>"
            . "Lastname: " . $studentsList[$studentsKeys[$i]]['lastname'] . "<br>"
            . "Votes: " . $average
            . "<br><br>";
    }
    ?>

</body>

</html>