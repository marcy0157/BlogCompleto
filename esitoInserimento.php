<?php
include "funzioni.php";





$codice = $_POST["inputMatricola"];
$nome = $_POST["inputNome"];
$cognome = $_POST["inputCognome"];
$mail = $_POST["inputMail"];
$data = $_POST["inputData"] ;









$datiConnessione = array(

    'nameServer' => 'localhost',
    'userName' => 'root',
    'password' => '',
    'nomeDB' => 'blog'


);


$esito=inserisciAutore($datiConnessione,$codice,$nome,$cognome,$mail,$data);

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
            if ($esito) {


                ?>
                <h1 CLASS="text-success"><i class="fas fa-check"></i> INSERIMENTO EFFETTUATO</h1>
                <?php
            } else {


                ?>
                <h1 CLASS="text-danger"><i class="fas fa-times"></i> INSERIMENTO NON EFFETTUATO</h1>

                <?php

            }

            ?>

        </div>

    </div>


</div>

</body>

</html>
