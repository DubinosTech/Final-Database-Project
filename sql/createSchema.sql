DROP SCHEMA IF EXISTS cojoDatabase CASCADE;
CREATE SCHEMA cojoDatabase;

SET search_path = cojoDatabase;

CREATE TABLE Secretary (
    id SERIAL PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    tel VARCHAR(255) NOT NULL
);

CREATE TABLE Doctor (
    id SERIAL PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    tel VARCHAR(255) NOT NULL,
    specialty VARCHAR(255),
    secretary INTEGER REFERENCES Secretary ON DELETE SET NULL
);

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

CREATE TABLE Drug (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price NUMERIC(11, 2) NOT NULL,
    substance VARCHAR(255) NOT NULL,
    generic BOOLEAN NOT NULL
);

CREATE TABLE DrugScript (
    id SERIAL PRIMARY KEY,
    drug INTEGER REFERENCES Drug NOT NULL,
    doctor INTEGER REFERENCES Doctor NOT NULL, -- replace with appointment
    --patient INTEGER REFERENCES Patient NOT NULL,
    date DATE NOT NULL,
    validDays INTEGER
);

CREATE TABLE ProcScript (
    id SERIAL PRIMARY KEY,
    procName VARCHAR(255) NOT NULL,
    doctor INTEGER REFERENCES Doctor NOT NULL,
    --patient INTEGER REFERENCES Patient NOT NULL,
    date DATE NOT NULL
);

CREATE TABLE DrugConflict (
    id SERIAL PRIMARY KEY,
    substance1 VARCHAR(255) NOT NULL,
    substance2 VARCHAR(255) NOT NULL
);

CREATE TABLE Pathology (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE DrugPathologyConflict (
    id SERIAL PRIMARY KEY,
    substance VARCHAR(255) NOT NULL,
    pathology INTEGER REFERENCES Pathology NOT NULL
);

CREATE TABLE PatientPathology (
    id SERIAL PRIMARY KEY,
    --patient INTEGER REFERENCES Patient NOT NULL,
    pathology INTEGER REFERENCES Pathology NOT NULL
);

---------- Nos Tables 
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