create TABLE items (
	id integer unsigned NOT NULL AUTO_INCREMENT,
	titel varchar(100) NOT NULL,
	aantal integer unsigned not null,
    eenheidsprijs decimal(10, 2) unsigned,
	CONSTRAINT pk_id PRIMARY KEY (id)
);