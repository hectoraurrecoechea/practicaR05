CREATE DATABASE practica05;
USE practica05;

CREATE TABLE usuarios(
                         id_usuario INT AUTO_INCREMENT,
                         usuario VARCHAR(30) NOT NULL ,
                         contraseña VARCHAR(30) NOT NULL,
                         CONSTRAINT usuarios_pk PRIMARY KEY(id_usuario)
);

CREATE TABLE listas(
                        id_lista INT AUTO_INCREMENT,
                        tarea VARCHAR(255) NOT NULL,
                        id_usuario INT,
                        CONSTRAINT lista_pk PRIMARY KEY (id_lista),
                        CONSTRAINT lista_fk1 FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)
);


CREATE USER usuarios@localhost IDENTIFIED BY '12345';

GRANT SELECT, INSERT, DELETE, UPDATE on practica05.* TO usuarios@localhost;

INSERT INTO usuarios (usuario,contraseña) VALUES('Ana','123456');
INSERT INTO usuarios (usuario,contraseña) VALUES('Marta','123456');
INSERT INTO usuarios (usuario,contraseña) VALUES('Jose','123456');
INSERT INTO usuarios (usuario,contraseña) VALUES('Sergio','123456');

SHOW TABLES;
SELECT * FROM usuarios;

INSERT INTO listas (tarea,id_usuario) VALUES('Ver peliculas','4');
INSERT INTO listas (tarea,id_usuario) VALUES('lavar platos','1');
INSERT INTO listas (tarea,id_usuario) VALUES('lavar platos','2');

SELECT * FROM listas;

SELECT id_usuario,usuario,contraseña FROM usuarios WHERE usuario='Ana' && contraseña='123456';

SELECT id_lista,tarea,id_usuario FROM listas where id_usuario='1';


DELETE FROM listas WHERE id_usuario=1;

DELETE FROM listas WHERE id_lista=31;