USE si_parqueaderos;

/*================ TIPOS DE DOCUMENTOS ==================*/
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Cédula de Ciudadanía', NOW(), NOW());
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Tarjeta de Identidad', NOW(), NOW());
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Registro Civil', NOW(), NOW());
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Tarjeta de extranjería', NOW(), NOW());
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Tarjeta de extranjería ', NOW(), NOW());
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Pasaporte', NOW(), NOW());
INSERT INTO tipo_identificaciones(id, nombre_tipo_identificacion, created_at, updated_at)
VALUES(NULL, 'Tipo de documento extranjero', NOW(), NOW());

/* ================= TIPOS DE USUARIOS ===============*/
INSERT INTO tipo_usuarios(id, nombre_tipo_usuario, created_at,  updated_at)
VALUES(NULL,  'Administrador', NULL, NOW());
INSERT INTO tipo_usuarios(id, nombre_tipo_usuario, created_at,  updated_at)
VALUES(NULL,  'Residente', NOW(), NOW());
INSERT INTO tipo_usuarios(id, nombre_tipo_usuario, created_at,  updated_at)
VALUES(NULL,  'Guarda seguridad', NOW(), NOW());
