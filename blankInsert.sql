
LOAD DATA INFILE 'C:/xampp/htdocs/CIS195PHP/endangered_species/data/animalsFinal.csv'
INTO TABLE animals
FIELDS TERMINATED BY ',' ENCLOSED BY '"'
LINES TERMINATED BY '\r\n';