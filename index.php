<?php

include "funzioni.php";
$datiConnessione = array(

    'nameServer' => 'localhost',
    'userName' => 'root',
    'password' => '',
    'nomeDB' => 'blog'




);
$sql = "select matricola,nome,cognome from giornalista order by cognome";
$dati = estraiDati($datiConnessione, $sql);


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

    <form action="modifica.php" method="post">
    <div class="row my-4">
        <div class="col-3">
            <h2> Scegli un giornalista </h2>

        </div>
        <div class="col-3">


            <?= disegnaSelect("selectGiornalista", $dati) ?>

        </div>

        <div class="col-3">


            <button class="form-control btn-primary" type="submit" > Modifica</button>

        </div>
    </div>

    </form>




<form method="post" action="nuovoAutore.php">
    <div class="col-3">


        <button class="form-control btn-success" type="submit" > Inserisci</button>

    </div>
</form>


    <form method="post" action="elimina.php">
        <div class="col-3">


            <button class="form-control btn-danger" type="submit" > Elimina</button>

        </div>
    </form>

</div>


</body>
</html>