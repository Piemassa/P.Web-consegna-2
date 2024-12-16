<?php 
if (isset($login_email)) { 

    if ($login_type == 'cliente'){
        echo '
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
             <div class="text-center">
                 <a class="btn btn-outline-dark mt-auto me-2" href="#">Aggiungi al carrello</a>
                 <a class="btn btn-outline-dark mt-auto" href="#">Vota/Commenta</a>
             </div>
         </div>
     ';
 
    }else if ($login_type == 'proprietario'){

        echo '
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
             <div class="text-center">
                 <a class="btn btn-outline-dark mt-auto me-2" href="#">Modifica</a>
                 <a class="btn btn-outline-dark mt-auto" href="#">Elimina</a>
             </div>
         </div>
     '; 

    }else{

        //nulla

    }
 
      
    
}else{
    echo '
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="login.php"> Login/Registrati per aggiungere al carrello</a></div>
        </div>
    '; 
}
?>