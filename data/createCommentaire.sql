CREATE TABLE commentaire(
   isbn CHAR(50),
   mail CHAR(50),
   content TEXT,
   dateCreation DATE,
   PRIMARY KEY(isbn, mail),
   FOREIGN KEY(isbn) REFERENCES livre(isbn),
   FOREIGN KEY(mail) REFERENCES compte(mail)
);
