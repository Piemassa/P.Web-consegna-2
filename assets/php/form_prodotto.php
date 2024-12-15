<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Inserimento Prodotti</title>
    <script>
        // Funzione per mostrare i campi giusti
        function mostraCampi() {
            // Ottieni la categoria selezionata
            var categoria = document.querySelector('input[name="categoria"]:checked');
            if (!categoria) return; // Se non c'è nessuna categoria selezionata, esci

            categoria = categoria.value;
            
            // Nascondi tutti i div
            document.getElementById("sala").style.display = "none";
            document.getElementById("servizio").style.display = "none";
            document.getElementById("corso").style.display = "none";
            document.getElementById("masterclass").style.display = "none";
            
            // Mostra solo i campi della categoria selezionata
            if (categoria === "sala") {
                document.getElementById("sala").style.display = "block";
            } else if (categoria === "servizio") {
                document.getElementById("servizio").style.display = "block";
            } else if (categoria === "corso") {
                document.getElementById("corso").style.display = "block";
            } else if (categoria === "masterclass") {
                document.getElementById("masterclass").style.display = "block";
            }
        }

        // Aggiungi l'ascoltatore per il cambiamento dei radio buttons
        window.onload = function() {
            var radios = document.querySelectorAll('input[name="categoria"]');
            radios.forEach(function(radio) {
                radio.addEventListener('change', mostraCampi);
            });
        };
    </script>
</head>
<body>

    <h1>Form di Inserimento Prodotto</h1>

    <form action="/submit" method="POST">
        <label for="categoria">Seleziona la categoria del prodotto:</label><br>
        <input type="radio" id="sala" name="categoria" value="sala"> Sala<br>
        <input type="radio" id="servizio" name="categoria" value="servizio"> Servizio<br>
        <input type="radio" id="corso" name="categoria" value="corso"> Corso<br>
        <input type="radio" id="masterclass" name="categoria" value="masterclass"> Masterclass<br><br>

        <div id="sala" style="display:none;">
            <h2>Sala</h2>
            <label for="tipo">Tipo di sala:</label>
            <select id="tipo" name="tipo">
                <option value="sala_prove">Sala prove</option>
                <option value="sala_registrazione">Sala di registrazione</option>
            </select><br>
            <label for="nome_sala">Nome della sala:</label>
            <input type="text" id="nome_sala" name="nome_sala"><br>
            <label for="capienza">Capienza (numero di persone):</label>
            <input type="number" id="capienza" name="capienza"><br>
        </div>

        <div id="servizio" style="display:none;">
            <h2>Servizio</h2>
            <label for="tipo_servizio">Tipo di servizio:</label>
            <select id="tipo_servizio" name="tipo_servizio">
                <option value="mix">Mix</option>
                <option value="master">Master</option>
                <option value="mix&master">Mix & Master</option>
            </select><br>
            <label for="operatore">Operatore (nome della persona):</label>
            <input type="text" id="operatore" name="operatore"><br>
        </div>

        <div id="corso" style="display:none;">
            <h2>Corso</h2>
            <label for="nome_corso">Nome del corso:</label>
            <input type="text" id="nome_corso" name="nome_corso"><br>
            <label for="numero_lezioni">Numero di lezioni:</label>
            <select id="numero_lezioni" name="numero_lezioni">
                <option value="1">1 lezione</option>
                <option value="15">15 lezioni</option>
                <option value="30">30 lezioni</option>
            </select><br>
            <label for="insegnante">Insegnante (nome della persona):</label>
            <input type="text" id="insegnante" name="insegnante"><br>
        </div>

        <div id="masterclass" style="display:none;">
            <h2>Masterclass</h2>
            <label for="nome_masterclass">Nome della masterclass:</label>
            <input type="text" id="nome_masterclass" name="nome_masterclass"><br>
            <label for="insegnante_masterclass">Insegnante (nome della persona):</label>
            <input type="text" id="insegnante_masterclass" name="insegnante_masterclass"><br>
            <label for="data_masterclass">Data della masterclass:</label>
            <input type="date" id="data_masterclass" name="data_masterclass"><br>
            <label for="durata_masterclass">Durata:</label>
            <select id="durata_masterclass" name="durata_masterclass">
                <option value="1giornata">1 giornata</option>
                <option value="mezza_giornata">Mezza giornata</option>
            </select><br>
        </div>

        <h2>Altri Dati</h2>
        <label for="prezzo">Prezzo:</label>
        <input type="number" id="prezzo" name="prezzo"><br>
        
        <label for="descrizione">Descrizione:</label>
        <textarea id="descrizione" name="descrizione"></textarea><br>

        <label for="immagine">Immagine (URL):</label>
        <input type="text" id="immagine" name="immagine"><br><br>

        <button type="submit">Invia</button>
    </form>

</body>
</html>
