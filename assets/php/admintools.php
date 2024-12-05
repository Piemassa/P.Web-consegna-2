<?php
    function getUtentiTable($db){
        //query di check
        $sql = "SELECT * FROM utente";

        $result = mysqli_query($db,$sql);          
        $count = mysqli_num_rows($result);



        if ($count > 0) {
            echo "<table class='table'><tr class='text-dark font-weight-bold grande'><th>ID</th><th>Name</th><th>Interessi</th><th>Action</th></tr>";
            //utenti...

            while($row = $result->fetch_assoc()) {        
                $btnBlocca = " <form method = 'POST'> <button class = 'btn btn-danger btn-x2' href='#usr' type = 'submit' name = 'bottone_blocca' value = ".$row["Utente_cf"]."> Blocca </button> </form>" ;
                $btnApprova = "<form method = 'POST'> <button class = 'btn btn-success btn-x2' href='#usr' type = 'submit' name = 'bottone_approva' value = ".$row["Utente_cf"]."> Approva </button> </form>";
                echo "<tr class='py-5'>
                <td>".$row["Utente_cf"]."</td>
                <td>".$row["Nome"]." ".$row["Cognome"]."</td>
                <td>".$row["Interesse"]."</td>
                <td class='text-white' >".($row["approvato"] != null ? ($row["Bloccato"] == 0 ? $btnBlocca : "<h7 class='bg-warning'>Bloccato</h7>") : $btnApprova)."</td>
                </tr>";
            }
            echo "</table>";
            //<td>".($row["approvato"] == null ? "F" : "T (".$row["approvato"].")")."</td>
        } else {
        echo "0 results"; 
        }


    }

    function approvautenti($db,$codice_fiscale_bottone,$login_admin_cf){

        //query di check
        
        $sql = "UPDATE utente SET approvato = '$login_admin_cf'  WHERE Utente_cf = '$codice_fiscale_bottone' " ;
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "errore nell'inserimento";
        }

    }

    function bloccautenti($db,$codice_fiscale_bottone){

        //query di check
        
        $sql = "UPDATE utente SET Bloccato = 1  WHERE Utente_cf = '$codice_fiscale_bottone' " ;
        //$sql = "UPDATE utente SET approvato =   WHERE Utente_cf = '$codice_fiscale_bottone' " ;
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "errore nell'inserimento";
        }

    }  
?>