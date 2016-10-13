# CREATE DATABASE `starships`;
USE `starships`;
CREATE TABLE `starship` (
   `id` int UNIQUE NOT NULL,
   `name` varchar(40),
	 `class` varchar(40),
   `government` varchar(50),
   PRIMARY KEY(id)
);
INSERT INTO starship VALUES(1,'Enterprise','Constitution','Federation');
INSERT INTO starship VALUES(2,'Reliant','Archer','Federation');
INSERT INTO starship VALUES(3,'HMS Bounty','Bird of Prey','Klingon Empire');
