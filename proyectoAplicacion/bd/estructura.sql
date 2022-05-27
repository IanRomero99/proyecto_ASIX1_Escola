create database IF NOT EXISTS curs;
use curs;

/* Creació de les taules*/ 


CREATE TABLE IF NOT EXISTS tbl_professor(
	id_professor int(5) NOT NULL AUTO_INCREMENT,
	nom_prof varchar (20) NOT NULL,
	cognom1_prof varchar (20) NULL,
	cognom2_prof varchar (20) NULL,
	email_prof varchar(50) NULL,
	telf varchar (5 )NULL, /* Son les extensions, per exemple: 32256*/
	dept int(5) NOT NULL,
    contraseña varchar(100) NOT NULL,
	constraint pk_professor PRIMARY KEY (id_professor)
);

CREATE TABLE IF NOT EXISTS tbl_classe (
	id_classe int(5) NOT NULL AUTO_INCREMENT,
	codi_classe varchar(5) NOT NULL,
	nom_classe varchar(25)NULL,
	tutor int(5) NOT NULL,
	constraint pk_consta PRIMARY KEY (id_classe)
);

CREATE TABLE IF NOT EXISTS tbl_alumne(
	id_alumne int(10) NOT NULL AUTO_INCREMENT,
	dni_alu varchar(9)NULL,
	nom_alu varchar(20) NOT NULL,
	cognom1_alu varchar(20)NULL,
	cognom2_alu varchar(20)NULL,
	telf_alu varchar(9)NULL,
	email_alu varchar(50)NULL,
	classe int(5) NOT NULL,
	constraint pk_alumne PRIMARY KEY (id_alumne)
);

CREATE TABLE IF NOT EXISTS tbl_dept(
	id_dept int(5) NOT NULL AUTO_INCREMENT,
	codi_dept varchar(5) NOT NULL,
	nom_dept varchar(25)NULL,
	constraint pk_imparteix PRIMARY KEY (id_dept)
);

/* Modificacions de les taules per cració de les FK*/

ALTER TABLE tbl_alumne
    ADD CONSTRAINT alumne_classe_fk FOREIGN KEY (classe)
    REFERENCES tbl_classe(id_classe);
	
ALTER TABLE tbl_classe
    ADD CONSTRAINT classe_prof_fk FOREIGN KEY (tutor)
    REFERENCES tbl_professor(id_professor);

ALTER TABLE tbl_professor
    ADD CONSTRAINT prof_dept_fk FOREIGN KEY (dept)
    REFERENCES tbl_dept(id_dept);




/* INSERT DEPT  */
INSERT INTO tbl_dept VALUES (NULL,"00001","Departament Informatica");
INSERT INTO tbl_dept VALUES (NULL,"00002","Departament Educacio");

/* INSERTS PROFESORES  */
INSERT INTO tbl_professor VALUES (NULL,"Gerard","Orobitg","Boyer","gerardorobitg@gmail.com",66666,1,"boyer");
INSERT INTO tbl_professor VALUES (NULL,"Pedro","Blanco","Andres","pedroblanco@gmail.com",62222,1,"andres");
INSERT INTO tbl_professor VALUES (NULL,"Toni","Fernandez","Rios","tonifernandez@gmail.com",63333,1,"rios");
INSERT INTO tbl_professor VALUES (NULL,"Agnes","Plans","Berenguer","agnesplans@gmail.com",64444,1,"berenguer");
INSERT INTO tbl_professor VALUES (NULL,"Sergio","Jimenez","Garcia","sergiojimenez@gmail.com",67777,1,"garcia");
INSERT INTO tbl_professor VALUES (NULL,"Blanca","Nieves","Duran","blancanieves@gmail.com",68888,2,"duran");

/* INSERTS CLASES  */
INSERT INTO tbl_classe VALUES (NULL,"21111","SMX1",1);
INSERT INTO tbl_classe VALUES (NULL,"23333","SMX2",2);
INSERT INTO tbl_classe VALUES (NULL,"22222","ASIX1",3);
INSERT INTO tbl_classe VALUES (NULL,"24444","ASIX2",4);
INSERT INTO tbl_classe VALUES (NULL,"26666","DAW2",5);
INSERT INTO tbl_classe VALUES (NULL,"27777","EDIN",6);



/*  INSERTS ALUMNOS */
INSERT INTO tbl_alumne VALUES(NULL,"54555353T","Natália","Cuadrado","Galvez","685305199","0001@gmail.com","1"); /*SMX1*/
INSERT INTO tbl_alumne VALUES(NULL,"53134848H","Manolo","Chaparro","Martorell","670663359","0002@gmail.com","1");/*SMX1*/
INSERT INTO tbl_alumne VALUES(NULL,"95736756A","Leandro","Pinilla","Vila","619193337","0003@gmail.com","1");/*SMX1*/
INSERT INTO tbl_alumne VALUES(NULL,"98255889K","Ibon","Moreno","Mata","687995522","0004@gmail.com","1");/*SMX1*/
INSERT INTO tbl_alumne VALUES(NULL,"58755084C","Amalia","Pérez","Ramos","66047385","0005@gmail.com","1");/*SMX1*/
INSERT INTO tbl_alumne VALUES(NULL,"57831351Q","German","Huerta","Zafra","650909104","0006@gmail.com","1");/*SMX1*/
INSERT INTO tbl_alumne VALUES(NULL,"19700588Y","Josefa","Camacho","Rosa","604268856","0007@gmail.com","2"); /*SMX2*/
INSERT INTO tbl_alumne VALUES(NULL,"93341411Y","Yeray","Roig","Carrera","664323068","0008@gmail.com","2");/*SMX2*/
INSERT INTO tbl_alumne VALUES(NULL,"38452506C","Iago","Saez","Carrasco","609518888","0009@gmail.com","2");/*SMX2*/
INSERT INTO tbl_alumne VALUES(NULL,"16144493B","Leyre","Cerdan","Gonzalez","603756486","0010@gmail.com","2");/*SMX2*/
INSERT INTO tbl_alumne VALUES(NULL,"92141908M","Ismael ","Acosta","Haro","638896339","0011@gmail.com","2");/*SMX2*/
INSERT INTO tbl_alumne VALUES(NULL,"9740408V","Samir","Arribas","de la Costa","607795708","0012@gmail.com","2");/*SMX2*/
INSERT INTO tbl_alumne VALUES(NULL,"60058419D","Amador","Baeza","Enriquez","609451729","0013@gmail.com","3");/*ASIX1*/
INSERT INTO tbl_alumne VALUES(NULL,"78372962B","Roser","Parra","Revuelta","650999360","0014@gmail.com","3");/*ASIX1*/
INSERT INTO tbl_alumne VALUES(NULL,"75617972Y","Lia","Sikora","Beltran","68989532","0015@gmail.com","3");/*ASIX1*/
INSERT INTO tbl_alumne VALUES(NULL,"23229125E","Hamza","Alcaide","Montiel","648241036","0016@gmail.com","3");/*ASIX1*/
INSERT INTO tbl_alumne VALUES(NULL,"66210876G","Victor","Hermida","Romero","655713891","0017@gmail.com","3");/*ASIX1*/
INSERT INTO tbl_alumne VALUES(NULL,"98408629B","Andrea","Palazon","Sanabria","697950630","0018@gmail.com","3");/*ASIX1*/
INSERT INTO tbl_alumne VALUES(NULL,"64270705F","Robert","Ruiz","Talayero","642434743","0019@gmail.com","4"); /*ASIX2*/
INSERT INTO tbl_alumne VALUES(NULL,"49599530K","Julia","Garcia","Gallardo","68968277","0020@gmail.com","4");/*ASIX2*/
INSERT INTO tbl_alumne VALUES(NULL,"33390436E","Oliver","Ibarra","Catalan","63764942","0021@gmail.com","4");/*ASIX2*/
INSERT INTO tbl_alumne VALUES(NULL,"29475192Q","Carles","Soler","Coronado","605204586","0022@gmail.com","4");/*ASIX2*/
INSERT INTO tbl_alumne VALUES(NULL,"84786405F","Daniel","Guzman","Carrero","684701356","0023@gmail.com","4");/*ASIX2*/
INSERT INTO tbl_alumne VALUES(NULL,"58448085V","Irina","Alcalde","Viñas","63453750","0024@gmail.com","4");/*ASIX2*/
INSERT INTO tbl_alumne VALUES(NULL,"76999180J","Marina","Duque","Domenech","607290121","0025@gmail.com","5"); /*DAW2*/
INSERT INTO tbl_alumne VALUES(NULL,"48422297D","Cesar","Marin","Arribas","638962987","0026@gmail.com","5");/*DAW2*/
INSERT INTO tbl_alumne VALUES(NULL,"32450240V","Bernat","Atienza","Roldan","614739903","0027@gmail.com","5");/*DAW2*/
INSERT INTO tbl_alumne VALUES(NULL,"18000605Q","Jesus","Morales","Merchan","657710046","0028@gmail.com","5");/*DAW2*/
INSERT INTO tbl_alumne VALUES(NULL,"82851010J","Guillermo","Rincon","Gomez","696656843","0029@gmail.com","5");/*DAW2*/
INSERT INTO tbl_alumne VALUES(NULL,"89215380Y","Hugo ","Sandoval","Sanguesa","676269024","0030@gmail.com","5");/*DAW2*/
INSERT INTO tbl_alumne VALUES(NULL,"50876446Z","Miquel","Dela","Calle","676270280","0031@gmail.com","6");/*EDIN*/
INSERT INTO tbl_alumne VALUES(NULL,"15631386D","Jin","Quan","Man","688420556","0032@gmail.com","6");/*EDIN*/
INSERT INTO tbl_alumne VALUES(NULL,"82093113K","Lidia ","Rauet","Playa","623545813","0033@gmail.com","6");/*EDIN*/
INSERT INTO tbl_alumne VALUES(NULL,"62671613W","Aleix","Carrasco","Switch","696592893","0034@gmail.com","6");/*EDIN*/
INSERT INTO tbl_alumne VALUES(NULL,"16019259Y","Samuel","Deluque","Vegetal","636531664","0035@gmail.com","6");/*EDIN*/
INSERT INTO tbl_alumne VALUES(NULL,"85670638S","David","Bustamente","Lagarto","612457649","0036@gmail.com","6");/*EDIN*/

