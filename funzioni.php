<?php


function estraiDati($datiConnessione, $sql)
{


    //1- creare connessione al db


    $connessione = mysqli_connect($datiConnessione['nameServer'], $datiConnessione['userName'], $datiConnessione['password'], $datiConnessione['nomeDB']);
    //var_dump($connessione);

    if ($connessione == false) {

        echo mysqli_connect_error();
        exit();

    }


    //2- eseguo la query

    $ris = mysqli_query($connessione, $sql);
    //var_dump($ris);


    while ($row = mysqli_fetch_assoc($ris)) {

        $datiEstratti[] = $row;

    }

//3- chiudere la connessione
    mysqli_close($connessione);

    return $datiEstratti;


}


function disegnaSelect($nomeSelect, $arrayDati)
{

    $stringa = "<select name=\"" . $nomeSelect . "\"  class='form-control form-select'>";

    $stringa .= "<option disabled selected  >Seleziona..</option>";

    foreach ($arrayDati as $chiave) {

        $stringa .= "<option class='form-select' value='" . $chiave["matricola"] . "'> " . $chiave["nome"] . " " . $chiave["cognome"] . "</option>";

    }

    $stringa .= "</select>";


    return $stringa;


}

function modificaGiornalista($datiConnessione, $datiModifica)
{

    $esito = true;
    //1- creare connessione al db


    $connessione = mysqli_connect($datiConnessione['nameServer'], $datiConnessione['userName'], $datiConnessione['password'], $datiConnessione['nomeDB']);
    //var_dump($connessione);

    if ($connessione == false) {

        echo mysqli_connect_error();
        exit();

    }


    //2- eseguo la query

    $query = "UPDATE giornalista";
    $query .= " SET nome= '" . $datiModifica['nome'] . "', ";
    $query .= "  cognome= '" . $datiModifica['cognome'] . "' , ";
    $query .= "  mail= '" . $datiModifica['mail'] . "', ";
    $query .= "  dataNascita= '" . $datiModifica['dataN'] . "'  ";
    $query .= " WHERE  matricola = " . $datiModifica['matricola'];


    $risM = mysqli_query($connessione, $query);
    //var_dump($ris);

    // var_dump(mysqli_affected_rows($connessione));


    if (mysqli_affected_rows($connessione) != 1) {

        $esito = false;
    }

//3- chiudere la connessione
    mysqli_close($connessione);

    // torna true se modifica eseguita altrimenti false se c'è un errore

    return $esito;


}

function inserisciAutore($datiConnessione, $codice, $nome, $cognome, $mail, $data)
{


    $esito = true;

    $connessione = mysqli_connect($datiConnessione['nameServer'], $datiConnessione['userName'], $datiConnessione['password'], $datiConnessione['nomeDB']);
    //var_dump($connessione);

    if ($connessione == false) {

        echo mysqli_connect_error();
        exit();

    }


    //2- eseguo la query

    $sql = "INSERT INTO giornalista( matricola, nome, cognome, mail, dataNascita)  ";
    $sql .= "values ('$codice','$nome','$cognome','$mail','$data' ) ";


    $risM = mysqli_query($connessione, $sql);

    if (mysqli_affected_rows($connessione) != 1) {

        $esito = false;
    }


//3- chiudere la connessione
    mysqli_close($connessione);

    // torna true se modifica eseguita altrimenti false se c'è un errore
    return $esito;


}

function elimina($datiConnessione, $dati)
{
    var_dump($dati);
    $esito = true;
    //creare connessione
    $connessione = mysqli_connect($datiConnessione['nomeServer'], $datiConnessione['username'], $datiConnessione['password'], $datiConnessione['nomeDB']);
//var_dump($connessione);
    if ($connessione == false) {
        echo mysqli_connect_error();
        exit();
    }

//$id= $_POST[''];
//$sql = "delete from biblioteca where IDB=$id";
//    isset($dati['radioBilioteca']) ? $id = $dati['radioBilioteca'] : $id = "errore";
//    var_dump($id);

    //elimina
    $sql = "delete from giornalista where matricola=$dati";
    var_dump($sql);
    $ris = mysqli_query($connessione, $sql);
    var_dump($ris);


    if (mysqli_affected_rows($connessione) != 1) {

        $esito = false;
    }

    mysqli_close($connessione);


    return $esito;
}

?>
