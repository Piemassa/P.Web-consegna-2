
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
                        <li class="nav-item"><a class="nav-link" href="workshop.php">Workshops</a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="#contact">Tariffe</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="prenota.php">Prenota</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php"> <?php echo(isset($login_session) ? $login_username : "Login") ?></a></li>
                        <?php 
                            if(isset($adminbool) && $adminbool){ 
                                echo("<li class='nav-item'><a class='nav-link' href='gestione_utenti.php'>Gestione utenti</a></li>");
                            }
                        ?>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-translucent nav-link btn-responsive d-none d-md-block ms-4" type="submit">
                            <i class="bi-cart-fill me-1 text-dark"></i>
                            <span class="text-dark">Cart</span>
                            <!--<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>-->
                        </button>
                            <!-- quando è collassato -->
                            <button class="btn btn-outline-dark btn-responsive d-block d-md-none " type="submit">
                            <i class="bi-cart-fill me-1 "></i>
                            <span class="text- white">Cart</span>
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h6 class="text-white font-weight-bold piccolo">PNL Studio</h6>
                        <h1 class="text-white font-weight-bold grande"><?php echo $nomepagina?></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <!--<p class="text-white-75 mb-5">Scopri chi siamo</p>-->
                        <a class="btn btn-primary btn-xl" href="login.php#login_section"><?php echo(isset($login_session) ? "Welcome " . $login_username : "Sign in/Sign up")  ?></a>
                    </div>
                </div>
            </div>
        </header>
