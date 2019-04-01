SET search_path = cojoDatabase;

INSERT INTO Secretary VALUES (DEFAULT, 'BB', '8', 'Desert, Jakku', '444-444-4444'); -- 1
INSERT INTO Secretary VALUES (DEFAULT, 'C', '3PO', 'Tatooine', '222-222-2222'); -- 2

INSERT INTO Officiel VALUES (DEFAULT, 'Joseph','Morinho' , '7 Daly ave', '22 Laurier','Entraineur'); -- 1
INSERT INTO Officiel VALUES (DEFAULT, 'Diego','Simeoni' , '3 summerset', '12 king Edward','Entraineur'); -- 2

INSERT INTO Doctor VALUES (DEFAULT, 'Han', 'Solo', 'Cockpit, Millenium Falcon', 'Han shot first', 'Womanizing', 1); -- 1
INSERT INTO Doctor VALUES (DEFAULT, 'Han', 'Solo', 'Cockpit, Millenium Falcon', 'Han shot first', 'Womanizing', 2); -- 1
INSERT INTO Doctor VALUES (DEFAULT, 'Chewbacca', 'Wookie', 'Passenger seat, Millenium Falcon', 'Rrrrrrr-ghghghghgh!', 'Veterinary Medicine', 1); -- 2
INSERT INTO Doctor VALUES (DEFAULT, 'Darth', 'Vader', 'Room 616, 31st Floor, Death Star', '616-616-6666', 'Transhumanism', 1); -- 3

INSERT INTO Athlete VALUES (DEFAULT, 'james','Rodriguez' , '11 blvd', '17 cumberland','5' , 'Canada',1); -- 1
INSERT INTO Athlete VALUES (DEFAULT, 'Roger','Federer' , '3 private', '21 rockland','12' , 'Swiss',2); -- 2
INSERT INTO Athlete VALUES (DEFAULT, 'Usain', 'Bolt', '7 henderson', '71 Blake', '21', 'Jamaica',1); -- 3

INSERT INTO Drug VALUES (DEFAULT, 'Tauntaun serum', 500, 'Tauntaun Serum Albumin', FALSE); -- 1
INSERT INTO Drug VALUES (DEFAULT, 'TSA', 200, 'Tauntaun Serum Albumin', TRUE); -- 2
INSERT INTO Drug VALUES (DEFAULT, 'Jakkufluxazol', 200, 'ARVT', FALSE); -- 3
INSERT INTO Drug VALUES (DEFAULT, 'ARVT USP', 200, 'ARVT', TRUE); -- 4
INSERT INTO Drug VALUES (DEFAULT, 'Light Side in a Tablet', 200, 'Fluoroziphil', FALSE); -- 5
INSERT INTO Drug VALUES (DEFAULT, 'Paratelomen', 200, 'Sodium Acetocarbonate Midicide', FALSE); -- 6
INSERT INTO Drug VALUES (DEFAULT, 'MCPEG5 HeAL', 200, 'MCPEG5 Wild Gene', FALSE); -- 7

INSERT INTO Pathology VALUES (DEFAULT, 'Hyposerothermia'); -- 1
INSERT INTO Pathology VALUES (DEFAULT, 'Tatooine Flu'); -- 2
INSERT INTO Pathology VALUES (DEFAULT, 'Acute Dark Side Affinity Syndrome'); -- 3
INSERT INTO Pathology VALUES (DEFAULT, 'Autocatastrophic Force Disorder'); -- 4
INSERT INTO Pathology VALUES (DEFAULT, 'Midichlorian Cancer'); -- 5

INSERT INTO DrugConflict VALUES (DEFAULT, 'Tauntaun Serum Albumin', 'Fluoroziphil');
INSERT INTO DrugConflict VALUES (DEFAULT, 'ARVT', 'MCPEG5 Wild Gene');

INSERT INTO DrugPathologyConflict VALUES (DEFAULT, 'Fluoroziphil', 4);
INSERT INTO DrugPathologyConflict VALUES (DEFAULT, 'MCPEG5 Wild Gene', 3);
INSERT INTO DrugPathologyConflict VALUES (DEFAULT, 'MCPEG5 Wild Gene', 4);
INSERT INTO DrugPathologyConflict VALUES (DEFAULT, 'ARVT', 2);

INSERT INTO DrugScript VALUES (DEFAULT, 1, 1, 1, '2016-01-01', 30);


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

INSERT INTO Residence VALUES (DEFAULT, 'A', '100', 'Moisture Farm, Tatooine', '616-616-6666'); -- 1
INSERT INTO Residence VALUES (DEFAULT, 'B', '80', 'Jedi Temple, Coruscant', '616-616-6666'); -- 2
INSERT INTO Residence VALUES (DEFAULT, 'C', '80', 'Citadel, Naboo', '616-616-6666'); -- 3

INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 17:30', '3000-01-01 19:00', '', 1);
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 19:00', '3000-01-01 21:30', '', 2);
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 17:30', '3000-01-01 19:00', '', 2);
INSERT INTO ServiceTransport VALUES (DEFAULT, '3000-01-01 18:00', '3000-01-01 20:00', '', 3);