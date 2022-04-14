CREATE TABLE commande(
   isbn CHAR(50),
   mail CHAR(50),
   PRIMARY KEY(isbn, mail),
   FOREIGN KEY(isbn) REFERENCES livre(isbn),
   FOREIGN KEY(mail) REFERENCES compte(mail)
);