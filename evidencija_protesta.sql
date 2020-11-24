/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     3/1/2020 9:29:07 PM                          */
/*==============================================================*/


drop table if exists Drzava;

drop table if exists Grad;

drop table if exists Protest;

/*==============================================================*/
/* Table: Drzava                                                */
/*==============================================================*/
create table Drzava
(
   ID                   int not null auto_increment,
   Naziv                varchar(100) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: Grad                                                  */
/*==============================================================*/
create table Grad
(
   ID                   int not null auto_increment,
   Drzava_ID            int not null,
   Naziv                varchar(50) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: Protest                                               */
/*==============================================================*/
create table Protest
(
   ID                   int not null auto_increment,
   Gra_ID               int not null,
   Naziv_Organizatora   varchar(100) not null,
   Datum                date not null,
   Broj_Ucesnika        int not null,
   Napomena             varchar(8000),
   primary key (ID)
);

alter table Grad add constraint FK_U_Drzavi foreign key (Drzava_ID)
      references Drzava (ID) on delete restrict on update restrict;

alter table Protest add constraint FK_U_Gradu foreign key (Gra_ID)
      references Grad (ID) on delete restrict on update restrict;

/*==============================================================*/
/* Popunjavanje baze testnim podacima                           */
/*==============================================================*/
INSERT INTO Drzava VALUES (NULL, 'Bosna i Hercegovina'), (NULL, 'Srbija'), (NULL, 'Crna Gora');

INSERT INTO Grad VALUES (NULL, 1, 'Banja Luka'), (NULL, 1, 'Sarajevo'), (NULL, 1, 'Mostar'), (NULL, 1, 'Trebinje'), (NULL, 1, 'Bijeljina'), (NULL, 1, 'Višegrad');

INSERT INTO Grad VALUES (NULL, 2, 'Beograd'), (NULL, 2, 'Novi Sad'), (NULL, 2, 'Niš'), (NULL, 2, 'Čačak'), (NULL, 2, 'Kragujevac'), (NULL, 2, 'Subotica');

INSERT INTO Grad VALUES (NULL, 3, 'Podgorica'), (NULL, 3, 'Nikšić'), (NULL, 3, 'Plužine'), (NULL, 3, 'Budva'), (NULL, 3, 'Herceg Novi'), (NULL, 3, 'Cetinje');