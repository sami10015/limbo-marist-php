#Limbo DATABASE
#Authors: Sami Ellougani, Gregory Potter, Carlie Maxwell
#Version 2

DROP database if exists limbo_db;
CREATE database limbo_db;
USE limbo_db;

CREATE table IF NOT EXISTS users(
	user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(40) NOT NULL,
	email VARCHAR(60) NOT NULL,
	pass CHAR(40) NOT NULL,
	reg_date DATETIME NOT NULL,
	PRIMARY KEY (user_id),
	UNIQUE (email)
);

INSERT INTO users(first_name,last_name,email,pass,reg_date)
VALUES("admin","","sami10015@hotmail.com","gazelle",'');

CREATE table IF NOT EXISTS stuff(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	location_id INT NOT NULL,
	description TEXT NOT NULL,
	create_date DATETIME,
	update_date DATETIME,
	owner TEXT,
	finder TEXT,
	status SET('found','lost','claimed') NOT NULL,
	PRIMARY KEY(id)
);

INSERT INTO stuff(location_id, description, create_date, update_date, owner, finder, status)
VALUES(3, "Black iPhone, broken screen", now(), NULL, "Joe", "N/A", "Lost");

CREATE table IF NOT EXISTS locations(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	create_date DATETIME NOT NULL,
	update_date DATETIME NOT NULL,
	name TEXT NOT NULL,
	PRIMARY KEY(id)
);

INSERT INTO locations(create_date, update_date, name)
VALUES(Now(),Now(), "Hancock"),
(Now(),Now(), "James A. Cannavino Library"),
(Now(),Now(), "Byrne House"),
(Now(),Now(), "Champagnat Hall"),
(Now(),Now(), "Our Lady Seat of Wisdom Chapel"),
(Now(),Now(), "Cornell Boat House"),
(Now(),Now(), "Donnelly Hall"),
(Now(),Now(), "Margaret M. and Charles H. Dyson Center"),
(Now(),Now(), "Fern Tor"),
(Now(),Now(), "Fontaine Annex"),
(Now(),Now(), "Fontaine Hall"),
(Now(),Now(), "Foy Townhouses "),
(Now(),Now(), "Fulton Street Townhouses "),
(Now(),Now(), "Lower Fulton Townhouses"),
(Now(),Now(), "Gartland Apartments"),
(Now(),Now(), "Greystone Hall"),
(Now(),Now(), "Kieran Gatehouse"),
(Now(),Now(), "Kirk House"),
(Now(),Now(), "Leo Hall"),
(Now(),Now(), "Longview Park"),
(Now(),Now(), "Lowell Thomas Communications Center"),
(Now(),Now(), "Marian Hall"),
(Now(),Now(), "Marist Boathouse"),
(Now(),Now(), "James J. McCann Recreational Center"),
(Now(),Now(), "Mid-Rise Hall"),
(Now(),Now(), "St. Ann's Hermitage"),
(Now(),Now(), "St. Peter's"),
(Now(),Now(), "Sheahan Hall"),
(Now(),Now(), "Steel Plant Art Studios and Gallery"),
(Now(),Now(), "Student Center/Rotunda"),
(Now(),Now(), "Tennis Pavillion"),
(Now(),Now(), "Tenney Stadium"),
(Now(),Now(), "Lower Townhouses "),
(Now(),Now(), "Lower West Cedar Townhouses"),
(Now(),Now(), "Upper West Cedar Townhouses");


