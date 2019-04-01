SET search_path = cojoDatabase;

INSERT INTO Officiel VALUES (DEFAULT, 'Joseph','Morinho' , '7 Daly ave', '22 Laurier','Entraineur'); -- 1
INSERT INTO Officiel VALUES (DEFAULT, 'Diego','Simeoni' , '3 summerset', '12 king Edward','Entraineur'); -- 2

INSERT INTO Athlete VALUES (DEFAULT, 'james','Rodriguez' , '11 blvd', '17 cumberland','5' , 'Canada',1); -- 1
INSERT INTO Athlete VALUES (DEFAULT, 'Roger','Federer' , '3 private', '21 rockland','12' , 'Swiss',2); -- 2
INSERT INTO Athlete VALUES (DEFAULT, 'Usain', 'Bolt', '7 henderson', '71 Blake', '21', 'Jamaica',1); -- 3



---Installation

INSERT INTO Installation VALUES (DEFAULT, 'Minto Field', '801 King Adward ave', 'For Hockey', ' trainings & Tests', '20'); -- 1
INSERT INTO Installation VALUES (DEFAULT, 'MontPetit Field', '801 King Adward ave', 'For Soccer', ' trainings & Tests', '20'); -- 2
INSERT INTO Installation VALUES (DEFAULT, 'Minto Field', '801 King Adward ave', 'For Tennis', 'Tainings & Tests', '20'); -- 3
INSERT INTO Installation VALUES (DEFAULT, 'MontPetit Field', '801 King Adward ave', 'For FootBall', ' & Tests', '20'); -- 4


INSERT INTO ServiceMedical VALUES(DEFAULT, 'Marie-Curie Clinic', 'General inquieres', '105 Marie-Curie ave', '555-555-4456');
INSERT INTO ServiceMedical VALUES(DEFAULT, 'Marie', 'General inquieres', '105 Marie-Curie ave', '555-555-4456');
INSERT INTO ServiceMedical VALUES(DEFAULT, '-Curie Clinic', 'General inquieres', '105 Marie-Curie ave', '555-555-4456');

-----
INSERT INTO Employee VALUES (DEFAULT, 'Villeneuve', 'Myriam', 'OTTAWA', 'MONTREAL', '1234567890');
INSERT INTO Employee VALUES (DEFAULT, 'MonNom', 'MonPrenom', '1234 rue Université', '900-A Ladouceur', '8139240559');
INSERT INTO Employee VALUES (DEFAULT, 'LeDoyen', 'Monsieur', '4434 Soleil', '578 Vanier', '9009009090');
INSERT INTO Employee VALUES (DEFAULT, 'Nom1', 'Prenom1', 'AdresseP1', 'AdresseV1', '0000000000');


INSERT INTO Epreuve VALUES (DEFAULT, '100 m', 'course', 1);
INSERT INTO Epreuve VALUES (DEFAULT, 'papillon','nage',2);

INSERT INTO Residence VALUES (DEFAULT, 'A', '100', 'Moisture Farm, Tatooine', '613-616-6666'); -- 1
INSERT INTO Residence VALUES (DEFAULT, 'B', '80', 'Jedi Temple, Coruscant', '613-111-7777'); -- 2
INSERT INTO Residence VALUES (DEFAULT, 'C', '80', 'Citadel, Naboo', '616-616-8888'); -- 3

INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 17:30', '3000-01-01 19:00', 'Residence - Monpetit', '15 min');
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 19:00', '3000-01-01 21:30', 'Minto - Monpetit', '20 min');
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 17:30', '3000-01-01 19:00', 'Lees-Minto', '20 min');
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 18:00', '3000-01-01 20:00', 'Minto - Residence', '30 min');