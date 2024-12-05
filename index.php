<?php  
    $nomepagina = "Home";
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

        <!--importo la navbar-->
        <?php include("assets/php/navbar.php");?>

        <!-- About-->

        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Lo studio</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Questo studio nasce dalla passione che tutti e 3 abbiamo per la musica .... è il luogo in cui ci sentiamo più a casa.
                        è composto da [tot] stanze di registrazione, [tot] boots per registrare,[tot] stanze dedicate al Mix&MAster/all'ascolto, [tot] stanza Dolby Atmos e 2 aule di medie dimensioni dedicate allo svolgimento di attività e corsi.</p>
                        <div class="w3-panel w3-leftbar w3-light-grey">
                            <p><i>"Non è mai troppo tardi per diventare ciò che avresti potuto essere."</i></p>
                            <p>George Elliot (Mary Ann Evans)</p>
                          </div>
                       
                    </div>
                </div>
            </div>
        </section>

        <!-- The Team -->

 <section class="page-section bg-dark text-white id='about'>
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
                            <h3 class="h4 mb-2"> Workshops e Corsi</h3>
                            <p class="text-muted mb-0">Scopri i nostri corsi e prenota </p>
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
