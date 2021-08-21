CREATE TABLE users (
  id INT PRIMARY KEY IDENTITY (1, 1),
  name varchar(250) NOT NULL,
  password VARCHAR(250) NOT NULL,
  email VARCHAR(200),
  position VARCHAR(200) NOT NULL,
  vacuna  VARCHAR(200) NOT NULL,
  date_first datetime,
  date_second datetime,
  status VARCHAR(200),
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  is_active INT(9) NOT NULL DEFAULT '0',
  profile VARCHAR(25) DEFAULT NULL,
  image VARCHAR(255)
);

CREATE TABLE users (
  id INT PRIMARY KEY IDENTITY (1, 1),
  name varchar(250) NOT NULL,
  password VARCHAR(250) NOT NULL,
  email VARCHAR(200),
  position VARCHAR(200) NOT NULL,
  vacuna  VARCHAR(200) NOT NULL,
  date_first datetime,
  date_second datetime,
  status VARCHAR(200),
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  is_active INT(9) NOT NULL DEFAULT '0',
  profile VARCHAR(25) DEFAULT NULL,
  image VARCHAR(255)
)FOREIGN KEY (departamento_id) REFERENCES departamento (departamento_id);

CREATE TABLE departamento (
    departamento_id INT PRIMARY KEY IDENTITY (1, 1),
    nombre_departamento VARCHAR (50) NOT NULL,
    descripcion VARCHAR (50) NOT NULL,
    create_at DATETIME,
	edit_at DATETIME
);

