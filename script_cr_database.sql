CREATE DATABASE pnldb;
USE pnldb;


CREATE TABLE PRODOTTO(
    Id_prod INT PRIMARY KEY,
    Categoria VARCHAR(50) NOT NULL,
    Descrizione VARCHAR(200) NOT NULL,
    Dimensione INT,
    Prezzo DECIMAL(7,2) NOT NULL,
    Classe VARCHAR(10)
);


CREATE TABLE ADMIN(
    Admin_cf VARCHAR(16) PRIMARY KEY,
    Email_a VARCHAR(50) NOT NULL UNIQUE,
    Password_hash_a VARCHAR(255) NOT NULL,
    Nome_a VARCHAR(100) NOT NULL,
    Cognome_a VARCHAR(100) NOT NULL
);


CREATE TABLE UTENTE(
    Utente_cf VARCHAR(16) PRIMARY KEY,
    Email_u VARCHAR(50) NOT NULL UNIQUE,
    Password_hash_u VARCHAR(255) NOT NULL,
    Nome VARCHAR (32) NOT NULL,
    Cognome VARCHAR(32) NOT NULL,
    Datanascita_u DATE NOT NULL,
    Telefono INT(32),
    Interesse VARCHAR(128),
    Bloccato BOOLEAN,
    Approvato VARCHAR(16),
);

CREATE TABLE MODIFICA(
   	Id_prod INT NOT NULL,
    Admin_cf VARCHAR(16) NOT NULL,
    Tipo VARCHAR(100),
    Data_modifica DATE,
    PRIMARY KEY (Id_prod, Admin_cf),
    CONSTRAINT fk_PRODOTTO
        FOREIGN KEY (Id_prod) REFERENCES PRODOTTO(Id_prod)
        ON DELETE CASCADE,
    CONSTRAINT fk_ADMIN
        FOREIGN KEY (Admin_cf) REFERENCES ADMIN(Admin_cf)
        ON DELETE CASCADE
);


CREATE TABLE CARRELLO(
   	Id_prod INT NOT NULL,
    Utente_cf VARCHAR(16) NOT NULL,
    Quantità VARCHAR(100),
    PRIMARY KEY (Id_prod, Utente_cf),
    CONSTRAINT fk_PRODOTTO_c
        FOREIGN KEY (Id_prod) REFERENCES PRODOTTO(Id_prod)
        ON DELETE CASCADE,
    CONSTRAINT fk_UTENTE_c
        FOREIGN KEY (Utente_cf) REFERENCES UTENTE(Utente_cf)
        ON DELETE CASCADE
);


CREATE TABLE UTENTI_EL(
    Utente_cf VARCHAR(16) NOT NULL,
    DataEl DATE NOT NULL,
    Nome VARCHAR (32) NOT NULL,
    Cognome VARCHAR(32) NOT NULL,
    Admin_cf VARCHAR(16) NOT NULL,
    PRIMARY KEY(Utente_cf,DataEl),
    
    CONSTRAINT fk_Admin_cf FOREIGN KEY (Admin_cf)
    REFERENCES Admin(Admin_cf)
    ON DELETE CASCADE,
);

CREATE TABLE PRODOTTO(
    Id_prod INT PRIMARY KEY,
    Categoria VARCHAR(50) NOT NULL,
    Descrizione VARCHAR(200) NOT NULL,
    Dimensione INT,
    Prezzo DECIMAL(7,2) NOT NULL,
    Classe VARCHAR(10)
);


CREATE TABLE ADMIN(
    Admin_cf VARCHAR(16) PRIMARY KEY,
    Email_a VARCHAR(50) NOT NULL UNIQUE,
    Password_hash_a VARCHAR(255) NOT NULL,
    Nome_a VARCHAR(100) NOT NULL,
    Cognome_a VARCHAR(100) NOT NULL
);


CREATE TABLE UTENTE(
    Utente_cf VARCHAR(16) PRIMARY KEY,
    Email_u VARCHAR(50) NOT NULL UNIQUE,
    Password_hash_u VARCHAR(255) NOT NULL,
    Nome VARCHAR (32) NOT NULL,
    Cognome VARCHAR(32) NOT NULL,
    Datanascita_u DATE NOT NULL,
    Interesse VARCHAR(128),
    Bloccato BOOLEAN,
    Approvato VARCHAR(16),
);


CREATE TABLE MODIFICA(
   	Id_prod INT NOT NULL,
    Admin_cf VARCHAR(16) NOT NULL,
    Tipo VARCHAR(100),
    Data_modifica DATE,
    PRIMARY KEY (Id_prod, Admin_cf),
    CONSTRAINT fk_PRODOTTO
        FOREIGN KEY (Id_prod) REFERENCES PRODOTTO(Id_prod)
        ON DELETE CASCADE,
    CONSTRAINT fk_ADMIN
        FOREIGN KEY (Admin_cf) REFERENCES ADMIN(Admin_cf)
        ON DELETE CASCADE
);



CREATE TABLE CARRELLO(
   	Id_prod INT NOT NULL,
    Utente_cf VARCHAR(16) NOT NULL,
    Quantità VARCHAR(100),
    PRIMARY KEY (Id_prod, Utente_cf),
    CONSTRAINT fk_PRODOTTO_c
        FOREIGN KEY (Id_prod) REFERENCES PRODOTTO(Id_prod)
        ON DELETE CASCADE,
    CONSTRAINT fk_UTENTE_c
        FOREIGN KEY (Utente_cf) REFERENCES UTENTE(Utente_cf)
        ON DELETE CASCADE
);



CREATE TABLE UTENTI_EL(
    Utente_cf VARCHAR(16) NOT NULL,
    DataEl DATE NOT NULL,
    Nome VARCHAR (32) NOT NULL,
    Cognome VARCHAR(32) NOT NULL,
    Admin_cf VARCHAR(16) NOT NULL,
    PRIMARY KEY(Utente_cf,DataEl),
    
    CONSTRAINT fk_Admin_cf FOREIGN KEY (Admin_cf)
    REFERENCES Admin(Admin_cf)
    ON DELETE CASCADE,
);
