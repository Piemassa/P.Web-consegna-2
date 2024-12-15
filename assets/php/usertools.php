<?php

    function modificaTel($db,$nuovoTel,$cf){

        $sql = "UPDATE utente SET Telefono = '$nuovoTel'  WHERE Utente_cf = '$cf' " ;
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "Errore nell'inserimento nel database";
        } else {
            
            $_SESSION['tel'] = $nuovoTel;

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

        }

        header("location: pg_personale_ut.php");
        exit();

    }



    function modificaPassword($db,$vecchiaPassword,$nuovaPassword,$cf){

        
        $sql = "UPDATE utente SET Password_hash_u = '$nuovaPassword'  WHERE Utente_cf = '$cf' && Password_hash_u = '$vecchiaPassword'" ;
        $result = mysqli_query($db,$sql);

        if($result){
            //message of success
        }else{
            //message of wrong old password
        }

        header("location: pg_personale_ut.php");
        exit();
        
        
    }  

?>