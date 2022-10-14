<?php


$datiConnessione = array(

    'nameServer' => 'localhost',
    'userName' => 'root',
    'password' => '',
    'nomeDB' => 'blog'


);



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

            <h3> NUOVO AUTORE</h3>

        </div>


    </div>



    <form action="esitoInserimento.php" method="post">

        <div class="row">
            <div class="col-3">
                <label for="inputMatricola"> Matricola:</label>
                <input type="text" name="inputMatricola" id="inputMatricola" class="form-control" >

            </div>
            <div class="col">
                <label for="inputNome"> Nome:</label>
                <input type="text" name="inputNome" id="inputNome" class="form-control" required >

            </div>
            <div class="col">
                <label for="inputCognome"> Cognome:</label>
                <input type="text" name="inputCognome" id="inputCognome" class="form-control" required >

            </div>


            <div class="w-100 my-2"></div>

            <div class="col-3">
                <label for="inputMail"> Mail:</label>
                <input type="email" name="inputMail" id="inputMail" class="form-control" required>

            </div>


            <div class="col-3">
                <label for="inputData"> Data di nascita:</label>
                <input type="date"  name="inputData" id="inputData" class="form-control" required  >

            </div>


        </div>



        <div class="row my-2 justify-content-end">

            <div class="col-2">

                <button type="submit" class="btn form-control btn-danger"> Inserisci</button>

            </div>

        </div>


    </form>

</div>

</body>

</html>
