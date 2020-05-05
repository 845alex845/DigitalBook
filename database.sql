CREATE DATABASE digitalbook;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', null);





CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Ficcion');
INSERT INTO categorias VALUES(null, 'Romanticas');
INSERT INTO categorias VALUES(null, 'Terror');

CREATE TABLE libros(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
titulo		varchar(100) not null,
autor		varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
stock           int(255) not null,
oferta          varchar(2),
imagen          varchar(255),
CONSTRAINT pk_categorias PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;


CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
direccion       varchar(255) not null,
costo           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;


CREATE TABLE detalle_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
libro_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_detalle_pedidos PRIMARY KEY(id),
CONSTRAINT fk_detalle_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_detalle_producto FOREIGN KEY(libro_id) REFERENCES libros(id)
)ENGINE=InnoDb;