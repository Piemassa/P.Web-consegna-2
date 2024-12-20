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
                <button id="'.$id_prodotto.'" onclick="openModalModButton(this)" class="btn btn-outline-dark btn-lg">Modifica</button>
                <form method="post">
                    <button type="submit" name="act" value="delprod_'.$id_prodotto.'" class="btn btn-outline-dark">Elimina</button>
                </form>
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