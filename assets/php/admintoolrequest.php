<?php

    header("Content-Type", "application/json");

    $input = file_get_contents('php://input');  //riceve il json da manageutenti.js
    $dati = json_decode($input, true);          //decodifica il json e lo mette dentro dati

    //dati dovrebbe contenere CF_Utente e tipo_bottone
    if (    isset($dati["CF_Utente"])     &&   isset( $dati["tipo_bottone"])    &&  isset( $dati["admincf"] ) ) {
        $CF_Utente = $dati["CF_Utente"];
        $tipo_bottone = $dati["tipo_bottone"];
        $admincf = $dati["admincf"];




        if( $tipo_bottone == "blocca" ){
            bloccautenti($db, $CF_Utente);
        } else if ($tipo_bottone == "approva" && $admincf != "vuoto" ) {
            approvautenti($db,$CF_Utente, $admincf);
        }





        echo json_encode(['status' => 'success', 'message' => 'Dati ricevuti con successo']);


    } else {


        echo json_encode(['status' => 'error', 'message' => 'Dati mancanti']);


    }




    
    function approvautenti($db,$codice_fiscale_bottone,$login_admin_cf){

        //query di check
        
        $sql = "UPDATE utente SET approvato = '$login_admin_cf'  WHERE Utente_cf = '$codice_fiscale_bottone' " ;
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "errore nell'inserimento";
        }

    }


    function bloccautenti($db,$codice_fiscale_bottone){

        //query di check
        
        $sql = "UPDATE utente SET Bloccato = 1  WHERE Utente_cf = '$codice_fiscale_bottone' " ;
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "errore nell'inserimento";
        }

    }  



?>