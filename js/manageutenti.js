function admintoolbutton(CF_Utente , tipo_bottone , admincf ){

    //chiamata ajax
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/admintoolrequest.php", true)

    xhr.setRequestHeader("Content-Type", "application/json");

    // Preparazione dei dati da inviare
    var dati = {
        CF_Utente: CF_Utente,
        tipo_bottone: tipo_bottone,
        admincf: admincf
    };

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Risposta dal server: ", xhr.responseText);
        }
    };

    // Invia i dati come stringa JSON
    xhr.send(JSON.stringify(dati));

}