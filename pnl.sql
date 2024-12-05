CREATE DATABASE PNL;
USE PNL;

-----TABELLA DEI PRODOTTI----
CREATE TABLE PRODOTTI(
    prodotto_id INT PRIMARY KEY,
    categoria VARCHAR(200) NOT NULL,
    prezzo DECIMAL(7,2) NOT NULL
);

----- TABELLA MODIFICA -------
CREATE TABLE MODIFICA(
    prodotto_id INT NOT NULL,
    admin_cf VARCHAR(16) NOT NULL,
    tipo VARCHAR(100),
    datanascita_a DATE
    PRIMARY KEY (prodotto_id, admin_cf),
    CONSTRAINT fk_prodotto
        FOREIGN KEY (prodotto_id) REFERENCES PRODOTTI(prodotto_id)
        ON DELETE CASCADE,
    CONSTRAINT fk_admin
        FOREIGN KEY (admin_cf) REFERENCES ADMIN(admin_cf)
        ON DELETE CASCADE,
);


----- TABELLA ADMIN -------
CREATE TABLE MODIFICA(
    admin_cf VARCHAR(16) PRIMARY KEY,
    email_a VARCHAR(50) NOT NULL UNIQUE,
    password_hash_a VARCHAR(255) NOT NULL,
    nome_admin VARCHAR(100) NOT NULL,

);

--- TABELLA UTENTE ------
CREATE TABLE UTENTE(
    utente_cf VARCHAR(16) PRIMARY KEY,
    email_u VARCHAR(50) NOT NULL UNIQUE,
    password_hash_u VARCHAR(255) NOT NULL,
    nome VARCHAR (32) NOT NULL,
    cognome VARCHAR(32) NOT NULL,
    foto_profilo VARCHAR(255), --- LA FOTO PROFILO VIENE SALVATA COME URL OVVERO COME INDIRIZZO IN MEMORIA O SERVER---
    datanascita_u DATE NOT NULL,
    interesse VARCHAR(128),
    bloccato BOOLEAN, 
);