<?php
   // Start the session
   session_start();


   if(isset($_SESSION['email'])) {
      $login_username = $_SESSION['name'];
      $login_surname = $_SESSION['surname'];
      $login_cf = $_SESSION['cf'];
      $login_tel = $_SESSION['tel'];
      $login_email = $_SESSION['email'];
      $login_birth = $_SESSION['birth'];
      

      if(isset($_SESSION['user_approved'])){
         $approved = $_SESSION['user_approved'];
      }
      
      if(isset($_SESSION['login_admin_cf'])){
         $login_admin_cf = $_SESSION['login_admin_cf'];
      }
      
      $adminbool = $_SESSION['admin_bool'];
   }  

   
   function logout() {

      // Distruggi i dati della sessione
      session_unset();
      session_destroy();
  
      // Reindirizza alla homepage
      header("Location: index.php");
      exit();
  }

   
?>