<?php
    session_start();
    $_SESSION['error'] = '';

    function auth_log($db, $post_email, $post_pw){
        //dal form...
        $email = mysqli_real_escape_string($db,$post_email);
        $pw = mysqli_real_escape_string($db,$post_pw);

        //query di check
        $sql = "SELECT * FROM utente WHERE email_u = '$email' and password_hash_u = '$pw'";

        $result = mysqli_query($db,$sql);      
        $row = mysqli_fetch_assoc($result);    
        $count = mysqli_num_rows($result);

        if($count == 1) {
            //logg
            $_SESSION['login_user'] = $email;
            $_SESSION['login_name'] = $row['Nome'];
            $_SESSION['user_approved'] = $row_['approvato'];
            $_SESSION['admin_bool'] = false;
            header("location: index.php");
        } else {
            //check admin
            $sql = "SELECT * FROM admin WHERE email_a = '$email' and password_hash_a = '$pw'";

            $result = mysqli_query($db,$sql);      
            $row_admin = mysqli_fetch_assoc($result);      
            $count_admin = mysqli_num_rows($result);

            if($count_admin == 1) {
                //logg
                $_SESSION['login_user'] = $email;
                $_SESSION['login_name'] = $row_admin['Nome'];
                $_SESSION['login_admin_cf'] = $row_admin['Admin_cf'];
                $_SESSION['admin_bool'] = true;

                header("location: index.php");
            }else {
                $_SESSION['error'] = "Email or password invalid!";
            }
        }
    }

    function auth_reg($db, $post_array){
        //dal form...
        $cf = mysqli_real_escape_string($db, $post_array['cf']);
        $email = mysqli_real_escape_string($db,$post_array['email']);
        $pw = mysqli_real_escape_string($db,$post_array['password']);
        $nome = mysqli_real_escape_string($db, $post_array['nome']);
        $cognome = mysqli_real_escape_string($db, $post_array['cognome']);
        $birthdate = mysqli_real_escape_string($db, $post_array['birthdate']);
        $interessi = mysqli_real_escape_string($db, $post_array['interessi']);

        //query di check
        $sql = "INSERT INTO `utente` (`Utente_cf`, `Email_u`, `Password_hash_u`, `Nome`, `Cognome`, `Datanascita_u`, `Interesse`, `Bloccato`) VALUES ('$cf', '$email', '$pw', '$nome', '$cognome', '$birthdate', '$interessi', false);";
        $result = mysqli_query($db,$sql);

        $sql_check = "SELECT * FROM utente WHERE email_u = '$email' and password_hash_u = '$pw'";
        $result_check = mysqli_query($db,$sql_check);   
        $row_result_check = mysqli_fetch_assoc($result_check);        
        $count_check = mysqli_num_rows($result_check);

        if($count_check == 1) {
        //logg
        $_SESSION['login_user'] = $email;
        $_SESSION['login_name'] = $row_result_check['Nome'];
        $_SESSION['admin_bool'] = false;
        $_SESSION['user_approved'] = $row_result_check['approvato'];
        header("location: index.php");
        } else {
        $error = "Error";
        }
    }
?>