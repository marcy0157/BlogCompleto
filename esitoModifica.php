<?php

include "funzioni.php";

$datiConnessione = array(

    'nameServer' => 'localhost',
    'userName' => 'root',
    'password' => '',
    'nomeDB' => 'blog'


);

//var_dump($_POST);

$datiModifica = array(

    'matricola' => $_POST['inputMatricola'],
    'nome' => $_POST['inputNome'],
    'cognome' => $_POST['inputCognome'],
    'mail' => $_POST['inputMail'],
    'dataN' => $_POST['inputData']

);

$esitoModifica = modificaGiornalista($datiConnessione, $datiModifica);

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
                <h1 CLASS="text-success"><i class="fas fa-check"></i> MODIFICA EFFETTUATA</h1>
                <?php
            } else {


                ?>
                <h1 CLASS="text-danger"><i class="fas fa-times"></i> MODIFICA NON EFFETTUATA</h1>

                <?php

            }

            ?>

        </div>

    </div>


</div>

</body>

</html>
