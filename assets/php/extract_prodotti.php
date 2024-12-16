                    
<?php

   /* $sql = "SELECT DISTINCT p.Prodotto_id, p.Prodotto_prezzo, p.Prodotto_immagine, p.Prodotto_descrizione * FROM PRODOTTO p JOIN CORSO c ON p.Prodotto_id = c.Prodotto_id  
            UNION
            SELECT DISTINCT p.Prodotto_id, p.Prodotto_prezzo, p.Prodotto_immagine, p.Prodotto_descrizione * FROM PRODOTTO p JOIN SALA s ON p.Prodotto_id = s.Prodotto_id
            UNION
            SELECT DISTINCT p.Prodotto_id, p.Prodotto_prezzo, p.Prodotto_immagine, p.Prodotto_descrizione * FROM PRODOTTO p JOIN SERVIZIO servizio ON p.Prodotto_id = servizio.Prodotto_id;
            ";

    $result = mysqli_query($db, $sql);
    $n_prodotti_totale = mysqli_num_rows($result);*/

    /*$sql = "SELECT DISTINCT p.Prodotto_id, p.Prodotto_prezzo, p.Prodotto_immagine, p.Prodotto_descrizione
        FROM PRODOTTO p 
        JOIN CORSO c ON p.Prodotto_id = c.Prodotto_id  
        UNION
        SELECT DISTINCT p.Prodotto_id, p.Prodotto_prezzo, p.Prodotto_immagine, p.Prodotto_descrizione 
        FROM PRODOTTO p 
        JOIN SALA s ON p.Prodotto_id = s.Prodotto_id
        UNION
        SELECT DISTINCT p.Prodotto_id, p.Prodotto_prezzo, p.Prodotto_immagine, p.Prodotto_descrizione 
        FROM PRODOTTO p 
        JOIN SERVIZIO servizio ON p.Prodotto_id = servizio.Prodotto_id;";

        $result = mysqli_query($db, $sql);
        $n_prodotti_totale = mysqli_num_rows($result);*/

        
    $sql = "SELECT 
    p.Prodotto_id, 
    p.Prodotto_prezzo, 
    p.Prodotto_immagine, 
    p.Prodotto_descrizione,
    c.Corso_Nome, 
    c.N_Lez,  
    c.Corso_Data,
    s.Sala_Nome,
    s.Sala_Tipo,      
    servizio.Servizio_Tipo  
FROM 
    PRODOTTO p
LEFT JOIN CORSO c ON p.Prodotto_id = c.Prodotto_id
LEFT JOIN SALA s ON p.Prodotto_id = s.Prodotto_id
LEFT JOIN SERVIZIO servizio ON p.Prodotto_id = servizio.Prodotto_id;
";

        $result = mysqli_query($db, $sql);
        $n_prodotti_totale = mysqli_num_rows($result);
?>

