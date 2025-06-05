-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS newsletter;
USE newsletter;

-- Criação da tabela `newsletters`
CREATE TABLE IF NOT EXISTS newsletters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
);

-- Inserção dos dados
INSERT INTO newsletters (id, email) VALUES
(0, 'teste@gmail.com');
