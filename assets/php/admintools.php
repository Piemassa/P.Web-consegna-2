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
                                <button class='btn btn-primary btn-sm' type='submit' name='bottone_blocca' value=".$row["Utente_cf"].">
                                    Blocca
                                </button> 
                              </form>";
                $btnSblocca = "<form method='POST'> 
                                <button class='btn btn-warning btn-sm' type='submit' name='bottone_sblocca' value=".$row["Utente_cf"].">
                                    Sblocca
                                </button> 
                              </form>";
                $btnApprova = "<form method='POST'> 
                                <button class='btn btn-success btn-sm' type='submit' name='bottone_approva' value=".$row["Utente_cf"].">
                                    Approva
                                </button> 
                               </form>";
                $btnElimina = "<button class='btn btn-danger btn-sm' type='button' onclick='confirmElimina(\"".$row["Utente_cf"]."\")'>
                               Elimina
                              </button>";
                
                $actionCell = $row["approvato"] != null 
                    ? ($row["Bloccato"] == 0 ? $btnBlocca : $btnSblocca)
                    : $btnApprova;
    
                echo "<tr class='text-center align-middle'>
                        <td>".$row["Utente_cf"]."</td>
                        <td>".$row["Nome"]." ".$row["Cognome"]."</td>
                        <td>".$row["Interesse"]."</td>
                        <td>".$actionCell . $btnElimina . "</td>
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

    function sbloccautenti($db, $codice_fiscale_bottone) {
        // Query to unblock user
        $sql = "UPDATE utente SET Bloccato = 0 WHERE Utente_cf = '$codice_fiscale_bottone'";
        $result = mysqli_query($db, $sql);
    
        if (!$result) {
            echo "Errore nello sblocco dell'utente";
        }
    }

    function eliminautenti($db, $codice_fiscale_bottone) {
        // Query to delete user
        $sql = "DELETE FROM utente WHERE Utente_cf = '$codice_fiscale_bottone'";
        $result = mysqli_query($db, $sql);
    
        if (!$result) {
            echo "Errore nell'eliminazione dell'utente";
        }
    }


?>


<script>
function confirmElimina(utenteCf) {
    Swal.fire({
        title: 'Sei sicuro?',
        text:`Vuoi veramente eliminare l'utente il cui CF è "${utenteCf}"? Questa azione non può essere annullata!`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sì, elimina!',
        cancelButtonText: 'Annulla'
    }).then((result) => {
        if (result.isConfirmed) {
            // Crea un form temporaneo per inviare la richiesta di eliminazione
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = ''; // Assicurati che l'azione del form sia corretta

            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'conferma_elimina';
            input.value = utenteCf;

            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        }
    })
}
</script>