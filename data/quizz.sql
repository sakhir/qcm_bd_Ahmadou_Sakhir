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

insert into user(prenom,nom,login,password,role,score) values('Sakhir','Fall','sakhir','passer','joueur',0);

insert into user(prenom,nom,login,password,role) values('Ahmadou','Fall','ahmadou','passer123','admin');  