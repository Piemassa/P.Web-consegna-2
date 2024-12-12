<?php
    session_start();
    $_SESSION['error'] = '';

    function auth_log($db, $post_email, $post_pw){
        //dal form...
        $email = mysqli_real_escape_string($db,$post_email);
        $pw = mysqli_real_escape_string($db,$post_pw); //sanifica i dati prima di inserirli in una query sql (prevenire attacchi come sql injection)

        //query di check
        $sql = "SELECT * FROM utente WHERE email_u = '$email' and password_hash_u = '$pw'";

        $result = mysqli_query($db,$sql); //controlla se la query è valida, se lo è contiene il risultato
        $row = mysqli_fetch_assoc($result); // se result è falso non fa niente, altrimenti row trasforma il risultato in un array di variabili
        $count = mysqli_num_rows($result); // conta quanti risultati sono stati ottenuti (0 se no risultato)




        if($count == 1 && !($row['approvato']==null || ($row['Bloccato'])!=false)) { //fa il login solo se l'utente è approvato e non bloccato
            //logg
            $_SESSION['login_error'] = null;
            /*nome*/ $_SESSION['name'] = $row['Nome'];
            /*cognome*/ $_SESSION['surname'] = $row['Cognome'];
            /*cf*/ $_SESSION['cf'] = $row['Utente_cf'];
            /*numero tel*/ $_SESSION['tel'] = $row['Telefono'];
            /*email*/ $_SESSION['email'] = $email; //non c'è bisogno di cercare nel database
            /*data di nascita*/ $_SESSION['birth'] = $row['Datanascita_u'];
            $_SESSION['user_approved'] = $row['approvato'];
            $_SESSION['admin_bool'] = false; //quanod sarà un attributo e gli utenti saranno tutti uniti non sarà così
            header("location: index.php"); //ti riindirizza a index.php

        } else if ($count == 1 && $row['approvato'] == null) {
            $_SESSION['login_error'] = 'not_approved';
        } else if ($count == 1 && $row['Bloccato'] != false) {
            $_SESSION['login_error'] = 'blocked';
        }else{ //admin (da fondere con utente)
            //check admin
            $sql = "SELECT * FROM admin WHERE email_a = '$email' and password_hash_a = '$pw'";

            $result = mysqli_query($db,$sql);      
            $row_admin = mysqli_fetch_assoc($result);      
            $count_admin = mysqli_num_rows($result);

            if($count_admin == 1) {
                $_SESSION['login_error'] = null;
                //logg
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row_admin['Nome'];
                $_SESSION['login_admin_cf'] = $row_admin['Admin_cf'];
                $_SESSION['admin_bool'] = true;

                header("location: index.php");
            
            }else { //non esiste l'utente
                $_SESSION['login_error'] = 'no_account';
            }
        }
            
    }



    function auth_reg($db, $post_array){
        // Dal form...
        $cf = mysqli_real_escape_string($db, $post_array['cf']);
        $email = mysqli_real_escape_string($db, $post_array['email']);
        $pw = mysqli_real_escape_string($db, $post_array['password']);
        $nome = mysqli_real_escape_string($db, $post_array['nome']);
        $cognome = mysqli_real_escape_string($db, $post_array['cognome']);
        $birthdate = mysqli_real_escape_string($db, $post_array['birthdate']);
        $interessi = mysqli_real_escape_string($db, $post_array['interessi']);
    
        // Query di inserimento
        $sql = "INSERT INTO `utente` (`Utente_cf`, `Email_u`, `Password_hash_u`, `Nome`, `Cognome`, `Datanascita_u`, `Interesse`, `Bloccato`, `approvato`) 
                VALUES ('$cf', '$email', '$pw', '$nome', '$cognome', '$birthdate', '$interessi', false, null);";
        $result = mysqli_query($db, $sql);
    
        if ($result) {
            // Controllo per verificare l'inserimento
            $sql_check = "SELECT * FROM utente WHERE email_u = '$email' AND password_hash_u = '$pw'";
            $result_check = mysqli_query($db, $sql_check);   
            $count_check = mysqli_num_rows($result_check);
    
            if ($count_check > 0) {
                // Messaggio di successo
                $_SESSION['error'] = "La registrazione è andata a buon fine, sei in attesa di approvazione da parte degli amministratori del sistema.";
            } 
        }
    }

?>

