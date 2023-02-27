CREATE DATABASE meubanco;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users_consult (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
);

INSERT INTO `users_consult` (`id`, `name`, `username`, `email`) VALUES 
(5, 'Caio', 'caio_123', '@gmail.com'),
(6, 'Marcos', 'marcos_123','@gmail.coms'),
(9, 'Antonio', 'antonio_654','@gmail.com'),
(7, 'Pedro', 'pedro!123','@gmail.com'),
(11, 'Francisco', 'francscs','@gmail.com'),
(45, 'Maria', 'mar_maria','@gmail.com');

