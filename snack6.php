<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>

<body>

    <?php
    //Snack 6
    //Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $teachers = $db['teachers'];

    for ($i = 0; $i < count($teachers); $i++) {
        echo '<div style="background-color: gray">'."Name: " . $teachers[$i]['name'] . "<br>"
        . "Lastname: " . $teachers[$i]['lastname'] . "<br>"
        . "<br></div>";
    };

    $pm = $db['pm'];

    for ($i = 0; $i < count($pm); $i++) {
        echo '<div style="background-color: green">'."Name: " . $pm[$i]['name'] . "<br>"
        . "Lastname: " . $pm[$i]['lastname'] . "<br>"
        . "<br></div>";
    };
    ?>

</body>

</html>