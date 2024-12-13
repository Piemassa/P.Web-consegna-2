<?php 
    //include('assets/php/session.php');
    include('assets/php/admintools.php');

  
    if(!$adminbool) header("location: index.php");
  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
  
      if(isset($_POST['bottone_approva'])){
          approvautenti($db, $_POST['bottone_approva'],  $login_admin_cf);
      }
      if(isset($_POST['bottone_blocca'])){
        bloccautenti($db,$_POST['bottone_blocca']);
      }
      if(isset($_POST['bottone_sblocca'])){
        sbloccautenti($db,$_POST['bottone_sblocca']);
      }
      if(isset($_POST['conferma_elimina'])){
        eliminautenti($db,$_POST['bottone_elimina']);
      }

    }
?>

<section class="page-section bg-white" id="usr">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-10 text-center"> <!-- Increase the column width -->
                <?php
                    getUtentiTable($db);
                ?>
            </div>
        </div>
    </div>
</section>