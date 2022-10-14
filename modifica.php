<?php

include "funzioni.php";
//var_dump($_POST);

$id=$_POST['selectGiornalista'];

$sqlGiornalistra= "select * from giornalista where matricola = $id";
//var_dump($sqlGiornalistra);
$datiConnessione = array(

    'nameServer' => 'localhost',
    'userName' => 'root',
    'password' => '',
    'nomeDB' => 'blog'


);

$dati=estraiDati($datiConnessione, $sqlGiornalistra);

var_dump($dati);

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


    <div class="row">
        <div class="col">

            <h3> PAGINA DI MODIFICA</h3>

        </div>


    </div>



<form action="esitoModifica.php" method="post">
    <div class="row">
        <div class="col-3">
            <label for="inputMatricola"> Matricola:</label>
            <input type="text" name="inputMatricola" id="inputMatricola" class="form-control" readonly   value=" <?= $dati[0]['matricola'] ?>">

        </div>
        <div class="col">
            <label for="inputNome"> Nome:</label>
            <input type="text" name="inputNome" id="inputNome" class="form-control" required value=" <?=$dati[0]['nome'] ?>">

        </div>
        <div class="col">
            <label for="inputCognome"> Cognome:</label>
            <input type="text" name="inputCognome" id="inputCognome" class="form-control" required value=" <?= $dati[0]['cognome'] ?>">

        </div>


        <div class="w-100 my-2"></div>

        <div class="col-3">
            <label for="inputMail"> Mail:</label>
            <input type="email" name="inputMail" id="inputMail" class="form-control" required value=" <?= $dati[0]['mail'] ?>">

        </div>


        <div class="col-3">
            <label for="inputData"> Data di nascita:</label>
            <input type="date" value=" <?= $dati[0]['dataNascita'] ?> " name="inputData" id="inputData" class="form-control" required  >

        </div>


    </div>



    <div class="row my-2 justify-content-end">

        <div class="col-2">

            <button type="submit" class="btn form-control btn-danger"> Modifica</button>

        </div>

    </div>


    </form>

</div>

</body>

</html>
