-- Criação do banco de dados
CREATE DATABASE blog_db;

-- Seleção do banco de dados
USE blog_db;

-- Criação da tabela de posts
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);