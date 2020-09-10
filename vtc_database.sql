CREATE TABLE vehicule (
    id_vehicule int(11) NOT NULL AUTO_INCREMENT,
    marque varchar(30) NOT NULL,
    modele varchar(30) NOT NULL,
    couleur varchar(30) NOT NULL,
    immatriculation varchar(9) NOT NULL,
    PRIMARY KEY (id_vehicule)
 	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE conducteur (
    id_conducteur int(11) NOT NULL AUTO_INCREMENT,
    prenom varchar(30) NOT NULL,
    nom varchar(30) NOT NULL,
    PRIMARY KEY (id_conducteur)
 	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE association_vehicule_conducteur (
    id_association int(11) NOT NULL AUTO_INCREMENT,
    conducteur varchar(50) NOT NULL,
    vehicule varchar(50) NOT NULL,
    PRIMARY KEY (id_association)
 	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO conducteur(prenom, nom) VALUES ('Senna', 'Erton'), ('Alesi', 'Jean');
INSERT INTO vehicule(marque, modele, couleur, immatriculation) VALUES ('BMW', 'M8', 'Bleue', 'AB-355-CA'), ('Mercedes', 'C63', 'Grise', 'CE-122-AE')