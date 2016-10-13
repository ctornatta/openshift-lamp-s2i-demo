# CREATE DATABASE `starships`;
USE `starships`;
CREATE TABLE `starships` (
   `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
   `name` varchar(40),
	 `class` varchar(40),
   `government` varchar(50),
   PRIMARY KEY(id)
);
INSERT INTO starships (name,class,government) VALUES('Enterprise','Constitution','Federation');
INSERT INTO starships (name,class,government) VALUES('Reliant','Archer','Federation');
INSERT INTO starships (name,class,government) VALUES('HMS Bounty','Bird of Prey','Klingon Empire');
