<?php


include "funzioni.php";
$codice=$_POST['radioBilioteca'];
$datiConnessione = array(
    'nomeServer' => 'localhost',
    'username' => 'root',
    'password' => '',
    'nomeDB' => 'blog'


);

$esitoModifica=elimina($datiConnessione,$codice);

?>

<html lang="it">
<head>
    <title>MODIFICA AUTORE</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</head>
<body>


<div class="container">
    <div class="row my-3">

        <div class="col">


            <?php
            if ($esitoModifica) {


                ?>
                <h1 CLASS="text-success"><i class="fas fa-check"></i> ELIMINAZIONE EFFETTUATA</h1>
                <?php
            } else {


                ?>
                <h1 CLASS="text-danger"><i class="fas fa-times"></i> ELIMINAZIONE NON EFFETTUATA</h1>

                <?php

            }

            ?>

        </div>

    </div>


</div>

</body>

</html>
