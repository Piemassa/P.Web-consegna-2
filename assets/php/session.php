<?php
   // Start the session
   session_start();

   if(isset($_SESSION['login_user'])) {
      $login_session = $_SESSION['login_user'];
      $login_username = $_SESSION['login_name'];

      if(isset($_SESSION['user_approved'])){
         $approved = $_SESSION['user_approved'];
      }
      
      if(isset($_SESSION['login_admin_cf'])){
         $login_admin_cf = $_SESSION['login_admin_cf'];
      }
      
      $adminbool = $_SESSION['admin_bool'];
   }  
?>