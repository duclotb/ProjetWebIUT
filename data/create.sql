CREATE TABLE livre (
	isbn STRING PRIMARY KEY,
	titre STRING,
	sousTitre STRING,
	auteurNom STRING,
	auteurPrenom STRING,
	auteurFacultatifNom STRING,
	auteurFacultatifPrenom STRING,
	editeur STRING,
	anneeedition STRING,
	pages STRING,
	format STRING,
	section STRING,
	prix NUMERIC
);