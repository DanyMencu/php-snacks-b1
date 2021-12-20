<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

<body>

    <?php
    //Snack 5
    //Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $paragraph = "È giunta l’ora di rimarginare le ferite. È giunta l’ora di colmare i divari che ci dividono. Questo è il tempo di costruire. Abbiamo finalmente raggiunto l’emancipazione politica. Ci impegniamo a costruire una pace completa, giusta e durevole. Assumiamo ufficialmente il compito di costruire una società in cui tutti i sudafricani, neri e bianchi, potranno camminare a testa alta, senza alcun timore, certi del loro inalienabile diritto alla dignità umana. Una nazione di tutti i colori, in pace con se stessa e con il mondo. Socrate, Apologia";

    $splitParagraph = explode('.', $paragraph);
    echo "<strong>Originale: </strong>" .$paragraph. "<br><br>";

    echo "<strong> Diviso in paragrafi: </strong> <br>";
    for ($i = 0; $i < count($splitParagraph); $i++) {
        if(!empty($splitParagraph[$i])) {
            echo $splitParagraph[$i] . "." . "<br>";
        }
    }
    ?>

</body>

</html>