CREATE table finaladmins(
	user_id int not null auto_increment,
	first_name varchar (255),
	last_name varchar (255),
	username varchar (255),
	password varchar (255),
    primary key (user_id)
);
CREATE table finalcustomers(
	ID int not null auto_increment,
	fname varchar (255),
	lname varchar (255),
	dogname varchar (255),
	dogtype varchar (255),
	telNumber varchar (255),
    primary key (ID)
);
INSERT into finalcustomers(fname, lname, dogname, dogtype, telNumber)
VALUES
    ('Rocky', 'Wik', 'Duke', 'German Shepherd', '9876543210'),
	('Jason', 'Will', 'Buddy', 'Golden Retriever', '5557891234'),
	('Adin', 'William', 'Atlas', 'Poodle', '8885557890'),
	('Ethan', 'Vik', 'Tank', 'Great Dane', '1234567890'),
	('Brad', 'Pynn', 'Teddy', 'Rottweiler', '7051234567');