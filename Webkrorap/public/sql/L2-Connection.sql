
/*create table News(
	id_news Tinyint(10) unsigned zerofill auto_increment,
	Categorie_news varchar(50) null,
	Titre_news varchar(50) null,
	Date_news varchar(10)  null,
	Lieu_news varchar(100) null,
	Commentaire_news text(5000)not null,
	Media_news varchar(100),
	Constraint pk_id_news primary key(id_news)
);

create table Media(
	id_media Tinyint(10)unsigned zerofill auto_increment,
	titre_media varchar(100),
	desc_media varchar(500),
	location_media varchar(100),
	Constraint pk_id_media primary key(id_media)
);*/

/*
create table Projet(
	id_projet Tinyint(10) unsigned zerofill auto_increment,
	type_projet varchar(30),
	titre_projet varchar(50),
	commentaires_projet text(255),
	url_image_projet varchar(100),
	Constraint pk_id_projet primary key(id_projet)
);*/

create table Video(
	id_video Tinyint(10) unsigned zerofill auto_increment,
	lien_video text(255),
	Constraint pk_id_video primary key(id_video)
);