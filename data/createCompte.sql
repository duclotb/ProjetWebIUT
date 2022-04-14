CREATE TABLE Compte(
   mail CHAR(50),
   prenom CHAR(50) NOT NULL,
   nom CHAR(50) NOT NULL,
   dateNaissance DATE NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   isbnListe CHAR(50) DEFAULT NULL,
   isbnPanier CHAR(50) DEFAULT NULL,

   PRIMARY KEY(mail),
   FOREIGN KEY(isbnListe) REFERENCES livre(isbn),
   FOREIGN KEY(isbnPanier) REFERENCES livre(isbn)
);