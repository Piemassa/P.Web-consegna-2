<?php
include("assets/php/allstyle.html");


    function getUtentiTable($db, $login_admin_cf) {


        // Query per ricerca dati utente 
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
    
            // Loop attraverso le rows
            while ($row = $result->fetch_assoc()) {
                $btnBlocca = "<form> 
                                <button class='btn btn-danger btn-sm' onclick='admintoolbutton(\"" . $row["Utente_cf"] . "\" , \"blocca\", \"vuoto\")' name='bottone_blocca' >
                                    Blocca
                                </button> 
                              </form>";
                $btnApprova = "<form> 
                                <button class='btn btn-success btn-sm' onclick='admintoolbutton(\"" . $row["Utente_cf"] . "\" , \"approva\" , \"" . $login_admin_cf . "\")' name='bottone_approva'>
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
    
?>