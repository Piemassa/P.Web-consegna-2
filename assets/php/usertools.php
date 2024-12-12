<?php

function modificaTel($db, $nuovoTel, $cf) {
    $sql = "UPDATE utente SET Telefono = '$nuovoTel' WHERE Utente_cf = '$cf'";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        echo "Errore nell'inserimento nel database";
    } else {
        $_SESSION['tel'] = $nuovoTel;
        $_SESSION['success_message'] = 'Numero di telefono modificato con successo!';
    }

    header("location: pg_personale_ut.php");
    exit();
}

    function modificaEmail($db,$nuovaEmail,$cf){
        
        $sql = "UPDATE utente SET Email_u = '$nuovaEmail'  WHERE Utente_cf = '$cf' " ;
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "Errore nell'inserimento nel database";
        } else {
            
            $_SESSION['email'] = $nuovaEmail;
            $_SESSION['success_message'] = 'Email modificata con successo!';
        }

        header("location: pg_personale_ut.php");
        exit();

    }


    function modificaPassword($db, $vecchiaPassword, $nuovaPassword, $cf) {
        $sql = "UPDATE utente SET Password_hash_u = '$nuovaPassword' WHERE Utente_cf = '$cf' AND Password_hash_u = '$vecchiaPassword'";
        $result = mysqli_query($db, $sql);
    
        //controllo se sono state modificate righe (se ha modificato la password --> successo)
        if (mysqli_affected_rows($db) > 0) {
            $_SESSION['success_message'] = 'Password modificata con successo!';
        } else {
            $_SESSION['error_message'] = 'Modifica non riuscita. Controllare vecchia password.';
        }
    
        header("location: pg_personale_ut.php");
        exit();
    }

?>