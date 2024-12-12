<?php 
if (isset($login_email)) {  // mostra l'icona del carrello solo se l'utente è loggato 
    echo '
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Aggiungi al carrello</a></div>
        </div>
    ';
}else{
    echo '
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="login.php"> Login/Registrati per aggiungere al carrello</a></div>
        </div>
    '; 
}
?>