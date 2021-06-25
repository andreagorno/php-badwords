<?php

$testo = "La National Basketball Association, comunemente nota come NBA, è la principale lega professionistica di pallacanestro degli Stati Uniti d'America e del Canada. Venne fondata a New York, il 6 giugno 1946 come Basketball Association of America (BAA). Il 3 agosto 1949 la lega adottò il nome di National Basketball Association a seguito della sua fusione con la lega rivale National Basketball League. Il quartier generale della NBA si trovava, e si trova ancora oggi, nella Olympic Tower al 645 della Fifth Avenue a New York. La NBA Entertainment e gli studi della NBA TV sono ubicati invece a Secaucus, New Jersey. Il suo logo, icona nota in tutto il mondo, fu disegnato da Alan Siegel e rappresenta la silhouette di Jerry West mentre, in una posizione atletica, effettua una penetrazione. Il logo è rimasto invariato dal 1971.";

$_GET["censored"]
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>NBA</h1>
        <p>
            <?php echo $testo ?>
        </p>
        <p>
            La stringa ha una lunghezza di <?php echo strlen($testo) ?> caratteri.
        </p>
        <p>
            <?php $testo_modificato = str_replace($_GET, "***", $testo);
            echo $testo_modificato;
            ?>
        </p>
        <p>
            La stringa ha una lunghezza di <?php echo strlen($testo_modificato) ?> caratteri.
        </p>
    </div>

</body>
</html>