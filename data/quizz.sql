create database quizz ;
 use quizz;

CREATE TABLE user(
        id     Int auto_increment  ,
        prenom Varchar (50) ,
        nom Varchar (50) ,
        login        Varchar (30) not null ,
        password Varchar (50) ,
        role Varchar (50) ,
        score int default null ,
        UNIQUE(login),
     CONSTRAINT user_pk PRIMARY KEY (id)
)ENGINE=InnoDB;

truncate table user;
alter table user add column photo Varchar(30) default null ;
insert into user(prenom,nom,login,password,role,score,photo) values('joueur','joueur','joueur','joueur','joueur',0,'php.png');

insert into user(prenom,nom,login,password,role,photo) values('admin','admin','admin','admin','admin','php.png');  