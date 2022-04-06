CREATE TABLE STATUTS(
	id_statuts SERIAL PRIMARY KEY,
    nom_statuts VARCHAR(50) DEFAULT = 'Pirates'
)

CREATE TABLE EQUIPAGE(
    id_equipage SERIAL PRIMARY KEY,
    nom_equipage VARCHAR(50) NOT NULL
)

CREATE TABLE CAPITAINE(
    id_capitaine SERIAL PRIMARY KEY,
    nom_capitaine VARCHAR(50) NOT NULL,
    nom_statuts VARCHAR(50) REFERENCES STATUTS(nom_statuts) NULL,
    id_equipage INTEGER REFERENCES EQUIPAGE(id_equipage),
    nom_equipage VARCHAR(50) REFERENCES EQUIPAGE(nom_equipage) NULL
)

CREATE TABLE MEMBRES(
    id_membres SERIAL PRIMARY KEY,
    nom_membres VARCHAR(50) NOT NULL,
    roles_membres VARCHAR(50) NOT NULL,
    nom_capitaine INTEGER REFERENCES CAPITAINE(nom_capitaine),
    nom_equipage INTEGER REFERENCES EQUIPAGE(nom_equipage)
)

INSERT INTO STATUTS(nom_statuts) VALUES('Pirates'),('Marine'),('Révolutionnaire')
INSERT INTO EQUIPAGE(nom_equipage) VALUES('Equipage du Chapeau de Paille'),('Equipage de Gold D Roger'),('Equipage de Barbe Blanche'),('Equipage de Shanks Le Roux'),('Equipage de Barbe Noire'),('Equipage de Big Mom'),('Equipage de Kaido')
INSERT INTO CAPITAINE(nom_capitaine) VALUES('Monkey D. Luffy'),('Gold D. Roger'),('Edward Newgate'),('Shanks le Roux'),('Barbe Noire'),('Big Mom'),('Kaido')

INSERT INTO CAPITAINE(nom_statuts) SELECT nom_statuts = 'Pirates' FROM STATUTS

INSERT INTO CAPITAINE(nom_equipage) VALUES ('Equipage du Chapeau de Paille'),('Equipage de Gold D Roger'),('Equipage de Barbe Blanche'),('Equipage de Shanks Le Roux'),('Equipage de Barbe Noire'),('Equipage de Big Mom'),('Equipage de Kaido')