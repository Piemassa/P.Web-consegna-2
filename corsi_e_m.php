<?php  
    $nomepagina = "Corsi e Masterclass";
    include('assets/php/session.php');
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

        <!--importo la navbar e l'header-->
        <?php 
        include("assets/php/navbar.php");
        include("assets/php/masthead.php");
        ?>


        
<!-- Corso di canto -->

<section class="page-section bg-primary" id="corso-di-canto">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <!-- Colonna per l'immagine -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <img src="https://www.donnad.it/sites/default/files/styles/r_visual_d/public/201448/shutterstock_162783689.jpg?itok=7TnaoYPl" 
                     alt="Corso di canto" class="img-fluid rounded">
            </div>
            <!-- Colonna per il testo -->
            <div class="col-lg-6 text-center">
                <h2 class="text-white mt-0 titolo-CeM">Corso di canto</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">
                    Che tu sia un tipo da live o sia in procinto di registrare il tuo nuovo disco, ti forniremo tutti gli strumenti per essere la versione migliore di te stesso nel canto.
                </p> 
                <p class="text-white-75 mb-4">
                    Questo corso è adatto a tutti i livelli - dai principianti agli esperti - e a tutte le età. 
                </p>
                <p class="text-white-75 mb-4">
                    Insieme creeremo un percorso personalizzato che ti permetta di raggiungere i tuoi obbiettivi a corto, medio e lungo termine.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Corso di Mix&Master -->

<section class="page-section bg-dark text-white" id="corso-di-canto">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <!-- Colonna per l'immagine -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <img src="https://static.wixstatic.com/media/11062b_d8286a39310944e984f8cc728423b66a~mv2.jpg/v1/fill/w_736,h_414,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/11062b_d8286a39310944e984f8cc728423b66a~mv2.jpg" 
                     alt="Corso di Mix&Master" class="img-fluid rounded">
            </div>
            <!-- Colonna per il testo -->
            <div class="col-lg-6 text-center">
                <h2 class="text-white mt-0 titolo-CeM">Corso di Mix&Master</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">
                    Che tu sia un tipo da live o sia in procinto di registrare il tuo nuovo disco, ti forniremo tutti gli strumenti per essere la versione migliore di te stesso nel canto.
                </p> 
                <p class="text-white-75 mb-4">
                    Questo corso è adatto a tutti i livelli - dai principianti agli esperti - e a tutte le età. 
                </p>
                <p class="text-white-75 mb-4">
                    Insieme creeremo un percorso personalizzato che ti permetta di raggiungere i tuoi obbiettivi a corto, medio e lungo termine.
                </p>
            </div>
        </div>
    </div>
</section>


        <!-- The Team -->

 <section class="page-section bg-dark text-white" id='about'>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Il nostro Team</h2>
                        <hr class="divider divider-light" />
                        <div class="row justify-content-center">
                            <!-- Foto Pietro -->
                            <div class="col-md-4 mb-3">
                                <img 
                                src="https://c8.alamy.com/compit/j9caxx/animale-selvaggio-verticale-giraffe-animali-selvatici-africa-sud-africa-animale-j9caxx.jpg" 
                                alt="Pietro" 
                                class="rounded-circle img-fluid team-photo-small">
                                <h5 class="text-white">Pietro</h5>
                                <p class="text-muted">Mixing Engineer</p>
                            </div>

                            <!-- Foto Nora -->
                            <div class="col-md-4 mb-3">
                                <img 
                                src="https://www.animalidacompagnia.it/wp-content/uploads/2018/04/maine-coon-verticale.jpg" 
                                alt="Nora" 
                                class="rounded-circle img-fluid team-photo-small">
                                <h5 class="text-white">Nora</h5>
                                <p class="text-muted">Recording Artist</p>
                            </div>

                            <!-- Foto Luca -->
                            <div class="col-md-4 mb-3">
                                <img 
                                src="https://c.wallhere.com/photos/6b/aa/portrait_display_nature_animals_frog_Red_Eyed_Tree_Frogs_leaves_closeup_depth_of_field-75572.jpg!d" 
                                alt="Luca" 
                                class="rounded-circle img-fluid team-photo-small">
                                <h5 class="text-white">Luca</h5>
                                <p class="text-muted">Producer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>




  
  
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">I nostri servizi</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-mic fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Affitto di stanze</h3>
                            <p class="text-muted mb-0">4 sale di registrazione fra cui scegliere. Affitto disponibile a ore o a giornate (10ore). Inoltre è possibile acquistare dei carnet di ore da usare in archi di tempo più lunghi</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-music-note-list fs-1 text-primary"></i></i></div>
                            <h3 class="h4 mb-2">Affitto di Sale prova</h3>
                            <p class="text-muted mb-0">2 sale prova fra cui scegliere. Affitto disponibile a ore o a giornate (10ore). Inoltre è possibile acquistare dei carnet di ore da usare in archi di tempo più lunghi.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-stars fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Corsi e Masterclass</h3>
                            <p class="text-muted mb-0">Scopri i nostri corsi e le nostre prossime Masterclass, e prenota!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-file-earmark-music fs-1 text-primary"></i></i></div>
                            <h3 class="h4 mb-2">Mix e Master</h3>
                            <p class="text-muted mb-0">Non vediamo l'ora di aiutarti a realizzare i tuoi progetti!</p>
                        </div>
                    </div>
                </div>
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
    <?php 
        include("assets/php/footer.php");
    ?>
    </body>
</html>
