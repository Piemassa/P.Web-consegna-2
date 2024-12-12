<?php
include("assets/php/allstyle.html");


    function getUtentiTable($db) {
        // Query to fetch user data
        $sql = "SELECT * FROM utente";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);
    
        if ($count > 0) {
            echo "<div class='table-container'>";
            echo "<h3 class='table-title'>Gestione utenti</h3> <br>"; 
            echo "<div class='table-responsive'>";
            echo "<table class='table table-striped table-bordered'>";
            echo "<thead class='thead-dark'>";
            echo "<tr class='text-center'>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Interessi</th>
                    <th>Azione</th>
                  </tr>";
            echo "</thead>";
            echo "<tbody>";
    
            // Loop through the rows
            while ($row = $result->fetch_assoc()) {
                $btnBlocca = "<form method='POST'> 
                                <button class='btn btn-danger btn-sm' type='submit' name='bottone_blocca' value=".$row["Utente_cf"].">
                                    Blocca
                                </button> 
                              </form>";
                $btnApprova = "<form method='POST'> 
                                <button class='btn btn-success btn-sm' type='submit' name='bottone_approva' value=".$row["Utente_cf"].">
                                    Approva
                                </button> 
                               </form>";
                
                $actionCell = $row["approvato"] != null 
                    ? ($row["Bloccato"] == 0 ? $btnBlocca : "<span class='badge badge-warning'>Bloccato</span>")
                    : $btnApprova;
    
                echo "<tr class='text-center align-middle'>
                        <td>".$row["Utente_cf"]."</td>
                        <td>".$row["Nome"]." ".$row["Cognome"]."</td>
                        <td>".$row["Interesse"]."</td>
                        <td>".$actionCell."</td>
                      </tr>";
            }
    
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            echo "</div>"; 
        } else {
            echo "<div class='alert alert-info text-center'>Nessun risultato trovato.</div>";
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
        $result = mysqli_query($db,$sql);

        if(!$result){
            echo "errore nell'inserimento";
        }

    }  
?>