DROP SCHEMA IF EXISTS cojoDatabase CASCADE;
CREATE SCHEMA cojoDatabase;

SET search_path = cojoDatabase;

CREATE TABLE Officiel(
    id SERIAL PRIMARY KEY,
    pprenom VARCHAR(255) NOT NULL,
    pnomDeFamille VARCHAR(255) NOT NULL,
    pAdressePermanente VARCHAR(255) NOT NULL,
    pAdresseVillage VARCHAR(255) NOT NULL,
    otype VARCHAR(255) NOT NULL
);

CREATE TABLE Athlete(
    id SERIAL PRIMARY KEY,
    pprenom VARCHAR(255) NOT NULL,
    pnomDeFamille VARCHAR(255) NOT NULL,
    pAdressePermanente VARCHAR(255) NOT NULL,
    pAdresseVillage VARCHAR(255) NOT NULL,
    aPays VARCHAR(255) NOT NULL,
    aMedaille VARCHAR(255) NOT NULL,
    officiel INTEGER REFERENCES Officiel ON DELETE SET NULL
);

CREATE TABLE Installation(
    id SERIAL PRIMARY KEY,
    iNom CHAR(30) NOT NULL,
    adresse CHAR(30) NOT NULL,
    usage CHAR(30) NOT NULL,
    description CHAR(50) NOT NULL,
    capacite CHAR(30) NOT NULL);
    
CREATE TABLE ServiceMedical(
        id SERIAL PRIMARY KEY,
        snom CHAR(30) NOT NULL,
        sdescription CHAR(50) ,
        sadresse CHAR(30),
        stelephone CHAR(30));
    
   
CREATE TABLE Employee(
             eId SERIAL PRIMARY KEY,
             pnomDeFamille CHAR(30),
             pprenom CHAR(30),
             pAdressePermanente CHAR(30),
             pAdresseVillage CHAR(30),
             telephone CHAR(30));
             
CREATE TABLE Epreuve(
             id SERIAL PRIMARY KEY,
             nomEpreuve CHAR(30),
             nomDiscipline CHAR(30),
             installation INTEGER REFERENCES Installation ON DELETE SET NULL);

CREATE TABLE Residence (
            id SERIAL PRIMARY KEY,
            nomResidence VARCHAR(255) NOT NULL,
            capaciteResidence VARCHAR(255) NOT NULL,
            adresseResidence VARCHAR(255) NOT NULL,
            telephoneResidence VARCHAR(255) NOT NULL
);

CREATE TABLE ServiceTransport (
            id SERIAL PRIMARY KEY,
            depart TIMESTAMP NOT NULL,
            arrivee TIMESTAMP NOT NULL,
            itineraire VARCHAR(255) NOT NULL,
            freqHoraire VARCHAR(255) NOT NULL,
            CHECK (depart < arrivee)
);

CREATE TABLE Users(
    memberNumber char(7) PRIMARY KEY,
    lastname varchar(20),
    firstname varchar(20),
    email varchar(30),
    password varchar(30)
);