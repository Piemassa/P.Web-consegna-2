
<?php 
            include("assets/php/allstyle.html");
      ?>
       
       <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">PNL STUDIO</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="sale.php">Sale</a></li>
                        <li class="nav-item"><a class="nav-link" href="corsi_e_m.php">Corsi e Masterclass</a></li>
                        <li class="nav-item"><a class="nav-link" href="prenota.php">Prenota</a></li>
                        <?php 
                            if (isset($login_email)) {  //se l'utente è loggato mostra il suo username e rimanda alla sua pagina personale
                                echo '<li class="nav-item"><a class="nav-link" href="pg_personale_ut.php">'; 
                                echo $login_username; 
                                echo ' </a></li>';
                            }else{ //altrimenti mostra login
                                echo '
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                ';
                            }
                        ?>
                    </ul>
                    <?php 
                        if (isset($login_email)) {  // mostra l'icona del carrello solo se l'utente è loggato 
                            echo '
                                <form class="d-flex">
                                    <button class="btn btn-outline-translucent nav-link btn-responsive d-none d-md-block ms-4" type="submit">
                                        <i class="bi-cart-fill me-1 text-dark"></i>
                                        <span class="text-dark">Cart</span>
                                        <!--<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>-->
                                    </button>
                                    <!-- quando è collassato -->
                                    <button class="btn btn-outline-dark btn-responsive d-block d-md-none" type="submit">
                                        <i class="bi-cart-fill me-1"></i>
                                        <span class="text-white">Cart</span>
                                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                    </button>
                                </form>
                            ';
                        }
                    ?>
                </div>
            </div>
        </nav>

