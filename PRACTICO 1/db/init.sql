CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  bio TEXT
);

INSERT INTO users (name, email, age, bio) VALUES 
('Maria Garcia', 'maria@example.com', 28, 'Desarrolladora web apasionada por el diseno y la programacion.'),
('Jose Martinez', 'jose@example.com', 35, 'Ingeniero de software con experiencia en desarrollo de aplicaciones moviles.'),
('Ana Rodriguez', 'ana@example.com', 30, 'Analista de datos con conocimientos en machine learning y big data.'),
('David Lopez', 'david@example.com', 26, 'Estudiante de informatica interesado en inteligencia artificial y robotica.'),
('Laura Sanchez', 'laura@example.com', 33, 'Disenadora grafica especializada en UX/UI y diseno de interfaces.'),
('Javier Perez', 'javier@example.com', 40, 'Programador full-stack con amplia experiencia en desarrollo de sistemas web.'),
('Sara Gomez', 'sara@example.com', 29, 'Experta en marketing digital y redes sociales, con habilidades en SEO y SEM.'),
('Carlos Fernandez', 'carlos@example.com', 32, 'Ingeniero de sistemas con experiencia en administracion de servidores Linux.'),
('Elena Ruiz', 'elena@example.com', 27, 'Desarrolladora front-end con conocimientos en frameworks como React y Angular.'),
('Alejandro Gonzalez', 'alejandro@example.com', 31, 'Consultor de negocios especializado en estrategias digitales y e-commerce.'),
('Carmen Molina', 'carmen@example.com', 34, 'Experta en ciberseguridad y proteccion de datos, con certificaciones CISSP y CEH.'),
('Daniel Jimenez', 'daniel@example.com', 25, 'Estudiante de ingenieria de software apasionado por la innovacion y la tecnologia.'),
('Patricia Garcia', 'patricia@example.com', 37, 'Gerente de proyectos con experiencia en implementacion de metodologias agiles.'),
('Francisco Lopez', 'francisco@example.com', 38, 'Arquitecto de software con habilidades en diseno de sistemas distribuidos y microservicios.'),
('Marta Torres', 'marta@example.com', 36, 'Experta en desarrollo de aplicaciones moviles para iOS y Android, con conocimientos en Swift y Kotlin.');
