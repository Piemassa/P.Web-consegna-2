<?php
session_start();
$_SESSION['error'] = '';

function auth_log($db, $post_email, $post_pw){
    // Dal form...
    $email = mysqli_real_escape_string($db, $post_email);
    $pw = mysqli_real_escape_string($db, $post_pw); // Sanifica i dati prima di inserirli in una query SQL (prevenire attacchi come SQL injection)

    // Query di check
    $sql = "SELECT * FROM utente WHERE email_u = '$email' and password_hash_u = '$pw'";
    $result = mysqli_query($db, $sql); // Controlla se la query è valida, se lo è contiene il risultato
    $row = mysqli_fetch_assoc($result); // Se result è falso non fa niente, altrimenti row trasforma il risultato in un array di variabili
    $count = mysqli_num_rows($result); // Conta quanti risultati sono stati ottenuti (0 se no risultato)

    if($count == 1 && !($row['approvato'] == null || ($row['Bloccato']) != false)) { // Fa il login solo se l'utente è approvato e non bloccato
        // Logg
        $_SESSION['login_error'] = null;
        $_SESSION['name'] = $row['Nome'];
        $_SESSION['surname'] = $row['Cognome'];
        $_SESSION['cf'] = $row['Utente_cf'];
        $_SESSION['tel'] = $row['Telefono'];
        $_SESSION['email'] = $email; // Non c'è bisogno di cercare nel database
        $_SESSION['birth'] = $row['Datanascita_u'];
        $_SESSION['user_approved'] = $row['approvato'];
        $_SESSION['admin_bool'] = false; // Quando sarà un attributo e gli utenti saranno tutti uniti non sarà così
        header("location: index.php"); // Ti reindirizza a index.php
    } else if ($count == 1 && $row['approvato'] == null) {
        $_SESSION['login_error'] = 'not_approved';
    } else if ($count == 1 && $row['Bloccato'] != false) {
        $_SESSION['login_error'] = 'blocked';
    } else { // Admin (da fondere con utente)
        // Check admin
        $sql = "SELECT * FROM admin WHERE email_a = '$email' and password_hash_a = '$pw'";
        $result = mysqli_query($db, $sql);      
        $row_admin = mysqli_fetch_assoc($result);      
        $count_admin = mysqli_num_rows($result);

        if($count_admin == 1) {
            $_SESSION['login_error'] = null;
            // Logg
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row_admin['Nome'];
            $_SESSION['login_admin_cf'] = $row_admin['Admin_cf'];
            $_SESSION['admin_bool'] = true;
            header("location: index.php");
        } else { // Non esiste l'utente
            $_SESSION['login_error'] = 'no_account';
        }
    }
}

function check_existing_credentials($db, $cf, $email, $tel) {
    $messages = [];

    // Controllo codice fiscale
    $sql = "SELECT * FROM utente WHERE Utente_cf = '$cf'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $messages[] = 'il codice fiscale';
    }

    // Controllo email
    $sql = "SELECT * FROM utente WHERE Email_u = '$email'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $messages[] = 'l\'email';
    }

    // Controllo telefono
    $sql = "SELECT * FROM utente WHERE Telefono = '$tel'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $messages[] = 'il telefono';
    }

    // Se ci sono errori, costruisci il messaggio
    if (!empty($messages)) {
        $message = 'I seguenti campi sono già associati a un account esistente: ' . implode(', ', $messages) . '. Accedi.';
        $_SESSION['reg_message'] = $message;
        var_dump($message);  // Aggiungi per debug
        return true;
    }

    return false;
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
    $tel = mysqli_real_escape_string($db, $post_array['telefono']);

    // Query di inserimento
    if (check_existing_credentials($db, $cf, $email, $tel)==false){
        $sql = "INSERT INTO `utente` (`Utente_cf`, `Email_u`, `Password_hash_u`, `Nome`, `Cognome`, `Datanascita_u`, `Interesse`, `Bloccato`, `approvato`,`Telefono`) 
                VALUES ('$cf', '$email', '$pw', '$nome', '$cognome', '$birthdate', '$interessi', false, null, $tel);";
        $result = mysqli_query($db, $sql);
    }else{
        header("Location: registra.php");
        exit();
    }

    if ($result) {
        // Controllo per verificare l'inserimento
        $sql_check = "SELECT * FROM utente WHERE email_u = '$email' AND password_hash_u = '$pw'";
        $result_check = mysqli_query($db, $sql_check);   
        $count_check = mysqli_num_rows($result_check);

        if ($count_check > 0) {
            // Messaggio di successo
            $_SESSION['reg_message'] = 'success';
            header("Location: registra.php");
            exit();
        }
    }
}

?>