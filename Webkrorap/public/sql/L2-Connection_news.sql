
create table News(
	id_news Tinyint(10) unsigned zerofill auto_increment,
	Titre_news varchar(50) not null,
	Date_news varchar(10) not null,
	Lieu_news varchar(100) not null,
	Commentaire_news text(5000)not null,
	Media_news varchar(100),
	Constraint pk_id_news primary key(id_news)
);