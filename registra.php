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

        <!-- Import navbar --> 
        <?php include("assets/php/navbar.php");?>

        <section id="registra_section" class="bg-dark text-white py-7">
            <div class="container px-4 px-lg-5 h-100">
                <form method="post">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-md-5 align-self-end" style="margin-top: 70px; margin-bottom: 20px">
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Codice fiscale</h3>
                                </div>
                                <div class="col-8">
                                    <p name="error_box"><?php echo($_SESSION['error']) ?></p>
                                    <input class="form-control p-4 fs-6" type="text" name="cf" placeholder="Codice fiscale" required>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Email</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Password</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="password" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Cognome</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="text" name="cognome" placeholder="Cognome" required>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Nome</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="text" name="nome" placeholder="Nome" required>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Data di nascita</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="date" name="birthdate" placeholder="YYYY-MM-DD" required>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Telefono</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="text" name="telefono" placeholder="Telefono" pattern="[0-9]*" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                                </div>
                            </div>    
                            <div class="row mb-3 align-items-center">
                                <div class="col-4">
                                    <h3 class="form-label text-white">Interessi</h3>
                                </div>
                                <div class="col-8">
                                    <input class="form-control p-4 fs-6" type="text" name="interessi" placeholder="Interessi" required>
                                </div>
                            </div>    
                            <div class="row justify-content-center align-items-center mb-1">
                                <!-- Center the "Invia" button -->
                                <div class="d-flex justify-content-center col-auto">
                                    <input class="btn btn-primary btn-xl fs-2m py-3" type="Submit" value="Invia" />
                                </div>
                                <!-- Center the "Hai già un account? Accedi" link -->
                                <div class="d-flex justify-content-center col-auto mt-0">
                                    <p class="text-light mb-0">
                                        Hai già un account? <a href="login.php">Accedi</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <?php 
            include("assets/php/footer.php");
        ?>
    </body>
</html>
