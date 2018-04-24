CREATE TABLE cloud.basic (name VARCHAR(20), age INT, location VARCHAR(20));
INSERT INTO  cloud.basic VALUES ("Goku", 33, "Tokyo");
INSERT INTO  cloud.basic VALUES ("Gohna", 17, "Kyoto");
INSERT INTO  cloud.basic VALUES ("Vegeta", 33, "Saiyan planet");
INSERT INTO  cloud.basic VALUES ("Piccolo", 400, "Namake");
GRANT ALL ON cloud.* to 'root'@'172.18.0.2' identified by 'password';
GRANT ALL ON cloud.* to 'root'@'172.18.0.3' identified by 'password';
