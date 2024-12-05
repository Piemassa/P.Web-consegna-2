<?php  
    $nomepagina = "Login";

    include("assets/php/config.php");
    include("assets/php/auth.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        auth_log($db,$_POST['email'], $_POST['password']);
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
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="index.php">X</a>
        </nav>
        <section id="login_section" class="page-section bg-dark text-white py-7">
            <div class="container px-4 px-lg-5 h-100">
                <form method="post">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-md-5 align-self-end">
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Email</h3>
                                </div>
                                <div class="col-8">
                                    <p name="error_box"><?php echo($_SESSION['error']) ?></p>
                                    <input type="email" class="form-control p-4 fs-1em" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="row mb-5 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white fs-1em">Password</h3>
                                </div>
                                <div class="col-8">
                                    <input type="password" class="form-control p-4 fs-5" name="password" placeholder="Enter your password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                            <!--<p class="text-white-75 mb-5">Scopri chi siamo</p>-->
                            <input class="btn btn-primary btn-xl fs-2m py-3" type="Submit" value="Invia" method="post"/>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Registrati senza impegno</h2>
                <h6 class="text-white font-weight-bold piccolo">Registrarsi è gratuito e offre solo vantaggi!</h6>
                <p class="text-white-75 mb-4"><i> Una volta registrato</i>, potrai: 
                <br>• Prenotare i studi di registrazione, sale prova, workshops 
                <br>• Richiedere Mix&Master</p>
                <a class="btn btn-light btn-xl" href="registra.php">Clicca qui per registrarti</a>
            </div>
    </section>

        </section>
        <!-- Footer-->
        <?php 
            include("assets/php/footer.php");
        ?>
    </body>
</html>
