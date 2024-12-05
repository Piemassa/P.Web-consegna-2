<?php
  $nomepagina = "Gestione utenti";

  include('assets/php/session.php');
  include('assets/php/admintools.php');
  include('assets/php/config.php');

  if(!$adminbool) header("location: index.php");

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['bottone_approva'])){
        approvautenti($db, $_POST['bottone_approva'],  $login_admin_cf);
    }
    if(isset($_POST['bottone_blocca'])){
      bloccautenti($db,$_POST['bottone_blocca']);
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>PNL - <?php echo $nomepagina; ?></title>
      
      <?php 
          include("assets/php/allstyle.html");
      ?>

  </head>
  <body id="page-top">

    <!--importo la navbar-->
    <?php include("assets/php/navbar.php");?>

    <!-- About-->
    <section class="page-section bg-white" id="usr">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <?php
                      getUtentiTable($db);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include("assets/php/footer.php");
    ?>
  </body>
</html>
