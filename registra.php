<?php  
    $nomepagina = "Register";

    include("assets/php/config.php");
    include("assets/php/auth.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        auth_reg($db, $_POST);
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
                                    <h3 class="form-label text-white">Codice fiscale:</h3>
                                </div>
                                <div class="col-8">
                                    <p name="error_box"><?php echo($_SESSION['error']) ?></p>
                                    <input class="form-control p-4 fs-6" type="text" name="cf" placeholder="Codice fiscale" required name="CF">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Email</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="email" name="email" placeholder="Email" required name="Email">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Password</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="password" name="password" placeholder="Password" required name="Password">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Cognome</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="text" name="cognome" placeholder="Cognome" required name="Cognome">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Nome</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="text" name="nome" placeholder="Nome" required name="Nome">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Data di nascita</h3>
                                </div>
                                <div class="col-8">
                                <input class="form-control p-4 fs-6" type="date-local" name="birthdate" required name="date" value="YYYY-MM-DD">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Interessi</h3>
                                </div>
                                <div class="col-8">
                                <input class="form-control p-4 fs-6" type="text" name="interessi" required name="interessi" placeholder="Interessi">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                            <!--<p class="text-white-75 mb-5">Scopri chi siamo</p>-->
                            <input class="btn btn-primary btn-xl fs-2m py-3" type="Submit" value="Invia" method="post" href="#login_section"/>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        </section>
        <!-- Footer-->
        <?php 
            include("assets/php/footer.php");
        ?>
    </body>
</html>
