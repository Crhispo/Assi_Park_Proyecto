USE si_parqueaderos;

/* Insert en la BD */

/* Insert de los tipos de usuarios */
INSERT INTO tipo_usuario (TIPO_USUARIO) VALUES ('Administrador');
INSERT INTO tipo_usuario (TIPO_USUARIO) VALUES ('Secretaria');
INSERT INTO tipo_usuario (TIPO_USUARIO) VALUES ('Guardia de seguridad');

/* Insert de los tipos de identificacion */

INSERT INTO tipo_identificacion (IDENTIFICACION) VALUES ('CC');
INSERT INTO tipo_identificacion (IDENTIFICACION) VALUES ('CE');
INSERT INTO tipo_identificacion (IDENTIFICACION) VALUES ('TI');
INSERT INTO tipo_identificacion (IDENTIFICACION) VALUES ('RC');

/* Funciones contadoras */

DELIMITER $$
CREATE FUNCTION VehiculosTotales()
RETURNS INT
BEGIN
RETURN (SELECT COUNT(ID) FROM vehiculos WHERE ESTADO_RESIDENTE=1);
END $$
DELIMITER ;

SELECT VehiculosTotales();


DELIMITER $$
CREATE FUNCTION ResidentesTotales()
RETURNS INT
BEGIN
RETURN (SELECT COUNT(NUMERO_IDENTIFICACION) FROM residente WHERE ESTADO_RESIDENTE=1);
END $$
DELIMITER ;

SELECT  ResidentesTotales();
