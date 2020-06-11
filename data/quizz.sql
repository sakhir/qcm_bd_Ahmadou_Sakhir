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

CREATE TABLE question(
        numq     Int auto_increment  ,
        type Varchar (50) ,
        libelle Varchar (300) ,
        nbrpoint int ,        
        CONSTRAINT question_pk PRIMARY KEY (numq)
)ENGINE=InnoDB;


CREATE TABLE reponse(
        idrep     Int auto_increment ,
        libelle Varchar(100) ,
        etat  int ,
 CONSTRAINT reponse_pk PRIMARY KEY (idrep)
)ENGINE=InnoDB;


CREATE TABLE avoir(
         idrep   Int ,
          numq int,
                
      CONSTRAINT avoir_pk PRIMARY KEY (numq,idrep),
      CONSTRAINT fkr_key_avoir FOREIGN KEY (idrep) REFERENCES reponse(idrep),
      CONSTRAINT fkq_key_avoir FOREIGN KEY  (numq) REFERENCES question (numq)
)ENGINE=InnoDB;

alter table reponse add column numq int ;
alter table reponse add CONSTRAINT fkrep_key_avoir FOREIGN KEY (numq) REFERENCES question(numq);

insert into question(type,libelle,nbrpoint) values('simple','quelle est la capitale du senegal ?',10);
insert into reponse(libelle,etat,numq)	    values('dakar',1,1);
insert into reponse(libelle,etat,numq)	    values('saint-louis',0,1);

insert into question(type,libelle,nbrpoint) values('multiple','quelles sont les langages de programmation ?',10);
insert into reponse(libelle,etat,numq)	 values('JAVA',1,2);
insert into reponse(libelle,etat,numq)	 values('POBAR',0,2);
insert into reponse(libelle,etat,numq)	 values('PHP',1,2);

insert into question(type,libelle,nbrpoint) values('texte','capital du liberia?',15);
insert into reponse(libelle,etat,numq)	 values('monrovia',1,3);
/*truncate table user;*/
alter table user add column photo Varchar(30) default null ;
insert into user(prenom,nom,login,password,role,score,photo) values('joueur','joueur','joueur','joueur','joueur',0,'php.png');
insert into user(prenom,nom,login,password,role,photo) values('admin','admin','admin','admin','admin','php.png');  
