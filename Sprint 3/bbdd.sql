/* CREAMOS BASE DATOS GESTION SIMPLON */
CREATE DATABASE simplon;



/* 
-CREAMOS TABLA "PAIS" QUE SERVIRA COMO FK PARA CIUDAD Y CODERS
-CONTENDRA ID Y NOMBRE
 */
CREATE TABLE pais(
    id_pais int AUTO_INCREMENT PRIMARY KEY,
    pais varchar(32) not null
);


/* 
-CREAMOS TABLA CIUDAD QUE SERVIRA COMO FK PARA FABRICAS
-CONTENDRA ID, NOMBRE Y FK_PAIS
*/
CREATE TABLE ciudad(
    id_ciudad int AUTO_INCREMENT PRIMARY KEY,
    ciudad varchar(32) not null,
    fk_pais int not null,
    FOREIGN KEY(fk_pais) REFERENCES pais (id_pais)
);


/*
-CREAMOS TABLA FABRICA QUE SERVIRA COMO FK PARA PROMOCION
-CONTENDRA ID, NOMBRE Y FK_CIUDAD
*/
CREATE TABLE fabrica(
    id_fabrica int AUTO_INCREMENT PRIMARY KEY,
    fabrica varchar(32) not null,
    fk_ciudad int not null,
    FOREIGN KEY(fk_ciudad) REFERENCES ciudad (id_ciudad)
);


/*
-CREAMOS LA TABLA YEAR QUE SERVIRA COMO FK PARA PROMOCION
-CONTENDRA ID Y AÑO
*/
CREATE TABLE promoyear(
    id_promoyear int AUTO_INCREMENT PRIMARY KEY,
    promoyear year not null
);


/*
-CREAMOS TABLA PROMOCION QUE SERVIRA COMO FK PARA CODERS 
-CONTENDRA ID, NOMBRE, AÑO Y FK_FABRICA
*/
CREATE TABLE promocion(
    id_promocion int AUTO_INCREMENT PRIMARY KEY,
    promocion varchar(32) not null,
    fk_promoyear int not null,
    FOREIGN KEY(fk_promoyear) REFERENCES promoyear (id_promoyear),
    fk_fabrica int not null,
    FOREIGN KEY(fk_fabrica) REFERENCES fabrica (id_fabrica)
);


/*
-CREAMOS TABLA CODER
-CONTENDRA ID, NOMBRE, APELLIDOS, DNI, FECHA NAC., NACIONALIDAD(FK_PAIS) Y FK_PROMOCION
*/
CREATE TABLE coder(
    id_coders int AUTO_INCREMENT PRIMARY KEY,
    coder varchar(24) not null,
    apellidos varchar (50) not null,
    dni varchar(10) not null,
    nacimiento date not null,
    nacionalidad int not null,
    FOREIGN KEY (nacionalidad) REFERENCES pais (id_pais),
    fk_promocion int not null,
    FOREIGN KEY (fk_promocion) REFERENCES promocion (id_promocion)
);


/* 
-CREAMOS TABLA login
-CONTENDRA ID, NOMBRE y PASS
*/
CREATE TABLE login(
    id_login int AUTO_INCREMENT PRIMARY KEY,
    usuario varchar(22) not null,
    pass varchar (20) not null
);


