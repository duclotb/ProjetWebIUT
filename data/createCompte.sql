CREATE TABLE IF NOT EXISTS compte(
   mail CHAR(50),
   prenom CHAR(50) NOT NULL,
   nom CHAR(50) NOT NULL,
   dateNaissance DATE NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   admin LOGICAL DEFAULT false,
   PRIMARY KEY(mail)
);

INSERT INTO compte (mail, prenom, nom, dateNaissance, mdp, admin) VALUES ("admin", "", "", 0-0-0, "admin", true);
