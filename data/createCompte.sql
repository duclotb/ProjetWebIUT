CREATE TABLE compte(
   mail CHAR(50),
   prenom CHAR(50) NOT NULL,
   nom CHAR(50) NOT NULL,
   dateNaissance DATE NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   PRIMARY KEY(mail)
);
