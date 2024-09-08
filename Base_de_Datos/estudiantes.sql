

CREATE TABLE estudiantes (
  Id int(11) NOT NULL,
  nombre varchar(100) NOT NULL,
  apellido varchar(100) NOT NULL,
  fecha_nacimiento date NOT NULL,
  email varchar(100) NOT NULL,
  telefono varchar(20) NOT NULL,
  direccion varchar(255) NOT NULL,
  fecha_registro timestamp NOT NULL DEFAULT current_timestamp()
) 


INSERT INTO estudiantes (Id, nombre, apellido, fecha_nacimiento, email, telefono, direccion, fecha_registro) VALUES
(1, 'Cintia ', 'Alvarado', '2004-05-15', 'cintia_alvarado@gmail.com', '7979-7947', 'San Alejo, La Unión', '2024-09-08 22:15:47'),
(2, 'Emely', 'Hernández', '2009-08-15', 'emelyh@gmail.com', '7306-8555', 'Conchagua, La Unión', '2024-09-08 22:15:47'),
(3, 'Keyri', 'Amaya', '2014-09-22', 'keyriamaya@gmail.com', '7730-4502', 'Colonia Belén, La Unión', '2024-09-08 22:22:54'),
(4, 'Lucia', 'Rozales ', '1999-07-13', 'lucirozales@mail.com', '7890-5511', 'Yayantique, La Unión', '2024-09-08 22:22:54');
