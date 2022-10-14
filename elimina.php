<?php
include "funzioni.php";



$datiConnessione = array(

    'nameServer' => 'localhost',
    'userName' => 'root',
    'password' => '',
    'nomeDB' => 'blog'


);

$sql = "select * from giornalista order by cognome";
$dati = estraiDati($datiConnessione, $sql);



?>
<html lang="it">
<head>
    <title>Elimina</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Dati giornalista:</h1>
        </div>
    </div>
    <div class="row my-2 text-center ">

        <div class="col ">
            <form action="eliminazione.php" method="post">
                <table class="table justify-content-center">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Codice</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Mail</th>
                        <th scope="col">data</th>

                    </tr>
                    </thead>
                    <?php
                    //var_dump($datiEstratti);

                    foreach($dati as $value){
                        //var_dump($value);
                        ?>

                        <tbody>
                        <tr>
                            <th scope="row"><input type="radio" name="radioBilioteca" class="disabled form-check-input" value="<?= $value['matricola'] ?>"></th>
                            <td> <?= $value['nome'] ?></td>
                            <td><?= $value['cognome'] ?></td>
                            <td><?= $value['mail'] ?></td>
                            <td><?= $value['dataNascita'] ?></td>


                        </tr>

                        </tbody>


                    <?php } ?>



                </table>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <button type="submit" class="justify-content-center form-control bg-danger my-3">CANCELLA</button>
            <?php
            //            if(isset($_POST['button'])){
            //                foreach ($_POST as $value){
            //                    if($value['IDB']){
            //                        $valorecheck = $value['IDB'];
            //                    }
            //                }
            //                eliminazione();
            //            }
            ?>
        </div>
        </form>
        <div class="col-3"></div>
    </div>

</div>
</body>

</html>

