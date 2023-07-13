CREATE TABLE `contacts` (
	`id_client` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(100) NOT NULL,
	`prenom` varchar(100) NOT NULL,
	`email` varchar(200) NOT NULL,
	`telephone` varchar(100) NOT NULL,
	`entreprise` varchar(200) NOT NULL,
	`adresse` varchar(200) NOT NULL,
	`ville` varchar(200) NOT NULL,
	`code_postal` varchar(100) NOT NULL,
	`pays` varchar(200) NOT NULL,
	`creer_contact` TIMESTAMP NOT NULL,
	`mise_a_jour_contact` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id_client`)
);


