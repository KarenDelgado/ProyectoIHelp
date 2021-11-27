-- Sala 1 - Proyecto iHelp

-- Creamos y usando la base de datos "bd_ihelp"
-- Verificamos si existe la tabla "cliente", de ser verdadero la borra, de lo contrario no hace nada
drop table if exists cliente;
-- Creamos la tabla "cliente"
create table if not exists cliente(
	id_cliente int(11) not null auto_increment,
	Nombre varchar(50) not null,
	Apellido_P varchar(50) not null, 
	Apellido_M varchar(50) not null,
	Telefono varchar(20) not null,
	Correo varchar(50) not null,
	Contra varchar(50) not null,
	Nick varchar(50) not null,
    	primary key (id_cliente)
);

insert into cliente (id_cliente, Nombre, Apellido_P, Apellido_M, Telefono, Correo, Contra, Nick) values
	(1, 'Cristina', 'Calvario', 'Serrano', '2227161434', 'cristina.calvarios@alumno.buap.mx', 'bts', 'Margot13'),
	(2, 'Karen', 'Delgado', 'Perez', '2461473778', 'btrdelgado07@gmail.com', 'rtgbnfrj', 'Karenxd'),
	(3, 'Jesús', 'Huerta', 'Sánchez', '9531342921', 'jhs1712000@gmail.com', '201843949', 'JHS'),
	(4, 'Roberto Jafet', 'Mendez', 'Tolama', '3320320891', 'tolamacontactos@gmail.com', 'Sergios123', 'Beto_tolama'),
	(5, 'Ho-seok', 'Jung', 'Gonzales', '22271698956', 'JungHoseok18@hotmail.com', 'bantangniHobi', 'J-Hope'),
	(6, 'Kendall', 'Francis', 'Schmidt', '8985472654', 'btrkendall@gmail.com', 'jrnjwwr8518jf', 'kendo_schmidt'),
	(7, 'James', 'David', 'Maslow', '8945158514', 'btrjames@gmail.com', 'fefgrrtyj', 'jamesmaslow'),
	(8, 'Carlos', 'Pena', 'Vega', '8928227182', 'btrcarlos@gmail.com', '84rfrgeevve', 'carlospenavega'),
	(9, 'Logan', 'Hortense', 'Henderson', '8952654255', 'btrlogan@gmail.com', 'vrtg8t4ea', 'loganhenderson1'),
	(10, 'Ocean', 'King', 'Penavega', '8952698542', 'ocean_king@gmail.com', 'egre558224', 'ocean_king_penavega'),
	(11, 'Kingston', 'James', 'Penavega', '8988575875', 'kingston_3@gmail.com', 'e4vr4gf', 'kingstosn_james_penavega');



-- Verificamos si existe la tabla "producto", de ser verdadero la borra, de lo contrario no hace nada
drop table if exists producto;
-- Creamos la tabla "producto"
create table if not exists producto(
	id_producto int(11) not null auto_increment,
	Nombre varchar(50) not null,
	Precio float not null,
	Descripción longtext not null,
	Cantidad int(10) not null,
	Marca varchar(50) not null,
	Modelo varchar(50) not null,
	Categoria varchar(30) not null,
    	primary key (id_producto)
);

insert into producto (id_Producto, Nombre, Precio, Descripción, Cantidad, Marca, Modelo, Categoria) values 
	(1, 'Fundas Acrilico iPhone', 150, 'Funda de uso rudo de acrilico', 10, 'Agrigel', 'iPhone', 'Accesorios'), 
	(2, 'Cargador tipo C', 250, 'Cargador de carga rapida', 10, '1Hora', 'Android', 'Cargadores'), 
	(3, 'iPhone 7', 3500, 'IOS 14, 3 RAM', 5, 'Apple', 'iPhone 7', 'Celulares'), 
	(4, 'Cargador para laptop', 450, 'Cargador macsafe de 30W', 15, 'ELE-GATE', 'Universal', 'Cargadores'),
	(5, 'Mica Samsung', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Samsung', 'Micas'),
	(6, 'Mica LG', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'LG', 'Micas'), 
	(7, 'Mica Motorola', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Motorola', 'Micas'), 
	(8, 'Mica Xiaomi', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Xiaomi', 'Micas'), 
	(9, 'Mica Oppo', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Oppo', 'Micas'), 
	(10, 'Mica Huawei', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Huawei', 'Micas'), 
	(11, 'Mica Nokia', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Nokia', 'Micas'), 
	(12, 'Mica Lanix', 50, 'Cristal templado para protejer la pantalla del telefono', 70, '9-D', 'Lanix', 'Micas'),
	(13, 'SSD Kingston', 600, 'Disco de estado solido con capacidad de 120GB', 5, 'Kingston', 'Certificacion 3', 'Almacenamiento'), 
	(14, 'Audifonos Samsung', 100, 'Audifonos afinados con AKG alambricos', 8, 'Samsung/AKG', '3.5mm o tipo C', 'Accesorios'), 
	(15, 'Memoria USB Kingston', 120, 'Memoria externa de 32GB', 10, 'Kingston', 'USB 32GB', 'Almacenamiento');



-- Verificamos si existe la tabla "pedido", de ser verdadero la borra, de lo contrario no hace nada
drop table if exists pedido;
-- Creamos la tabla "pedido"
create table if not exists pedido(
	id_pedido int(11) not null auto_increment,
	id_cliente int(11) not null,
	id_producto int(11) not null,
	fecha_pedido date not null,
	precio_total int(10) not null,
    	unidades int(10) not null, 
    	primary key (id_pedido, id_cliente, id_producto)
);

insert into pedido (id_pedido, id_cliente, id_producto, fecha_pedido, precio_total, unidades) values 
	(1, 3, 1, '2021-03-09', 3, 450),
	(2, 1, 6, '2021-03-09', 10, 500), 
	(3, 9, 13, '2021-03-10', 1, 600), 
	(4, 7, 14, '2021-03-10', 1, 100), 
	(5, 4, 4, '2021-03-11', 2, 900), 
	(6, 10, 10, '2021-03-11', 2, 100), 
	(7, 3, 3, '2021-03-12', 1, 3500);



-- Verificamos si existe la tabla "comentario", de ser verdadero la borra, de lo contrario no hace nada
drop table if exists comentario;
-- Creamos la tabla "comentario"
create table if not exists comentario(
	id_comentario int(11) not null auto_increment,
	nombre varchar(50) not null, 
	apellido_p varchar(50) not null, 
	apellido_m varchar(50) not null,
	correo varchar(50) not null, 
	estado varchar(25) not null,
	comentario longtext not null,   
    	primary key (id_comentario)
);

insert into comentario(id_comentario, nombre, apellido_p, apellido_m, correo, estado, comentario) values 
	(1, 'Karen', 'Hernandez', 'Perez', 'kahernadez85@gmail.com', 'Puebla', 'Ustedes son muy buenos'), 
	(2, 'Andrew', 'Smith', 'Jonhson', 'andrew552smith@gmail.com', 'Puebla', 'Son un equipo muy preparado'), 
	(3, 'Hector', 'De la Torre', 'Sanchez', 'hector_de_la_torre@gmail.com', 'Michoacan', 'Todo en tiempo y en forma'), 
	(4, 'Leticia', 'Araujo', 'Sandoval', 'leticiaaraujo@gmail.com', 'Baja California', 'Productos de exccelente calidad.');