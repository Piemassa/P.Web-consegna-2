
<?php

    include("assets/php/extract_prodotti.php");

    while($row = $result -> fetch_assoc()) { 
?>
        <div class="col mb-5">
            <div class="card h-100">




                <!-- badge di categoria -->
                 <?php

                    if ($row["Corsi_Nome"] != NULL){
                        //scrivere codice in caso di un corso
                        $tipo_inserzione = "Corso";
                        $badge_text = "Corso";
                        $alternativa_immagine = $row["Corsi_Nome"];
                        $nome_prodotto = $row["Corsi_Nome"];

                    } else if ($row["Sala_Tipo"]) {
                        //scrivere codice in caso di una sala
                        $tipo_inserzione = "Sala";
                        $badge_text = "Sala";
                        $alternativa_immagine = $row["Sala_Nome"];
                        $nome_prodotto = $row["Sala_Nome"];
                    } else {
                        //scrivere codice in caso di un servizio
                        $tipo_inserzione = "Servizio";
                        $badge_text = "Servizio";
                        $alternativa_immagine = $row["Servizio_Tipo"];
                        $nome_prodotto = $row["Servizio_Tipo"];
                    }
                 ?>
                <div class="badge bg-dark text-white position-absolute"> <?php echo $badge_text; ?> </div>

                <img class="card-img-top" src="<?php echo $row['Prodotto_immagine']; ?>" alt="<?php echo $alternativa_immagine ?>" />



                <div class="card-body p-4">
                    <div class="text-center">
                                     <!-- Nome prodotto -->
                        <h5 class="fw-bolder"> <?php echo $nome_prodotto; ?> <br>(15 lezioni)</h5>

                                    <!-- Descrizione Prodotto-->
                        <p class="text-muted small"> <?php echo $row["Prodotto_descrizione"]; ?> </p>

                                    <!-- Prezzo Prodotto-->
                                    <?php echo $row["Prodotto_prezzo"]; ?>
                    </div>
                </div>

                <!--Azioni prodotto da aggiungere-->








            <div>
        <div>

<?php } ?>

