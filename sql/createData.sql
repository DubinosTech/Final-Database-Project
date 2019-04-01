SET search_path = cojoDatabase;

---Officiel

INSERT INTO Officiel VALUES (DEFAULT, 'Joseph','Morinho' , '7 Daly ave', 'Jedi Temple, Coruscant','Entraineur'); -- 1
INSERT INTO Officiel VALUES (DEFAULT, 'Diego','Simeoni' , '3 summerset', 'Jedi Temple, Coruscant','Entraineur'); -- 2
INSERT INTO Officiel VALUES (DEFAULT, 'Emma',' LOVE' , '3 cuberland', 'Jedi Temple, Coruscant','Coach'); -- 3
INSERT INTO Officiel VALUES (DEFAULT, 'Kiahna',' Marr' , '3 Vanier', 'Jedi Temple, Coruscant','Superviseur'); -- 4


---Athlete

INSERT INTO Athlete VALUES (DEFAULT, 'james','Rodriguez' , '11 blvd', 'Moisture Farm, Tatooine','5' , 'Canada',1); -- 1
INSERT INTO Athlete VALUES (DEFAULT, 'Roger','Federer' , '3 private', 'Citadel, Naboo','12' , 'Swiss',2); -- 2
INSERT INTO Athlete VALUES (DEFAULT, 'Usain', 'Bolt', '7 LEvis', 'Moisture Farm, Tatooine', '21', 'Jamaica',1); -- 3
INSERT INTO Athlete VALUES (DEFAULT, 'Kogii', 'Ben', '7 henderson', 'Jedi Temple, Coruscant', '21', 'Jamaica',1); -- 4
INSERT INTO Athlete VALUES (DEFAULT, 'Dubinos', 'Lomla', '7 New-York', 'Moisture Farm, Tatooine', '281', 'CANADA',1); -- 5
INSERT INTO Athlete VALUES (DEFAULT, 'Kiringa', 'Lluga', '7 Gatineau park', 'Moisture Farm, Tatooine', '55', 'CONGO',1); -- 6



---Installation

INSERT INTO Installation VALUES (DEFAULT, 'Minto Field', '801 King Adward ave', 'For Hockey', ' trainings & Tests', '20'); -- 1
INSERT INTO Installation VALUES (DEFAULT, 'Gatineau Field', '11 university ave', 'For Soccer', ' Long runs', '100'); -- 2
INSERT INTO Installation VALUES (DEFAULT, 'Toronto Field', '101 Laurier ave', 'For Tennis', 'short runs Tests', '200'); -- 3
INSERT INTO Installation VALUES (DEFAULT, 'MontPetit Field', '801 King Adward ave', 'For FootBall', ' final Tests', '212'); -- 4

---ServiceMedical

INSERT INTO ServiceMedical VALUES(DEFAULT, 'Marie-Curie Clinic', 'General inquieres', '105 Marie-Curie ave', '555-555-4456');
INSERT INTO ServiceMedical VALUES(DEFAULT, 'Marie', 'General inquieres', '105 Marie-Curie ave', '555-555-4456');
INSERT INTO ServiceMedical VALUES(DEFAULT, '-Curie Clinic', 'General inquieres', '105 Marie-Curie ave', '555-555-4456');

---Employee

INSERT INTO Employee VALUES (DEFAULT, 'Villeneuve', 'Myriam', 'OTTAWA', 'MONTREAL', '1234567890');
INSERT INTO Employee VALUES (DEFAULT, 'MonNom', 'MonPrenom', '1234 rue Université', '900-A Ladouceur', '8139240559');
INSERT INTO Employee VALUES (DEFAULT, 'LeDoyen', 'Monsieur', '4434 Soleil', '578 Vanier', '9009009090');
INSERT INTO Employee VALUES (DEFAULT, 'Nom1', 'Prenom1', 'AdresseP1', 'AdresseV1', '0000000000');

---Epreuve

INSERT INTO Epreuve VALUES (DEFAULT, '100 m', 'course', 1);
INSERT INTO Epreuve VALUES (DEFAULT, 'papillon','natation',2);

---Residence

INSERT INTO Residence VALUES (DEFAULT, 'A', '100', 'Moisture Farm, Tatooine', '613-616-6666'); -- 1
INSERT INTO Residence VALUES (DEFAULT, 'B', '80', 'Jedi Temple, Coruscant', '613-111-7777'); -- 2
INSERT INTO Residence VALUES (DEFAULT, 'C', '80', 'Citadel, Naboo', '616-616-8888'); -- 3

---ServiceTransport

INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 17:30', '3000-01-01 19:00', 'Residence - Monpetit', '15 min');
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 19:00', '3000-01-01 21:30', 'Minto - Monpetit', '20 min');
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 17:30', '3000-01-01 19:00', 'Lees-Minto', '20 min');
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 18:00', '3000-01-01 20:00', 'Minto - Residence', '30 min');

---Users

INSERT INTO Users VALUES ('5000000', 'Emmanuel', 'Asinyo', 'asinyo@mail.com', 'password');
INSERT INTO Users VALUES ('5000001', 'Admin', 'Admin', 'admin@mail.com', 'admin');
INSERT INTO Users VALUES ('5000002', 'Ramzy', 'Kanouche', 'ramzy@mail.com', 'password');
