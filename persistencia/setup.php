<?php
require 'conexao.php'; // Chama a conexão e cria o ficheiro banco.sqlite vazio

// O código SQL para criar todas as tuas tabelas
$sql = "
CREATE TABLE IF NOT EXISTS estado (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    sigla TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS cidade (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    estado_id INTEGER,
    FOREIGN KEY (estado_id) REFERENCES estado(id)
);

CREATE TABLE IF NOT EXISTS pessoa (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    peso REAL,
    altura REAL,
    cidade_id INTEGER,
    FOREIGN KEY (cidade_id) REFERENCES cidade(id)
);

CREATE TABLE IF NOT EXISTS livro (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    autor TEXT NOT NULL,
    genero TEXT,
    descricao TEXT
);

CREATE TABLE IF NOT EXISTS pessoa_livro (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    pessoa_id INTEGER,
    livro_id INTEGER,
    data_emprestimo DATE,
    prazo INTEGER,
    FOREIGN KEY (pessoa_id) REFERENCES pessoa(id),
    FOREIGN KEY (livro_id) REFERENCES livro(id)
);
";

$pdo->exec($sql);
echo "<h3>Base de dados e tabelas criadas com sucesso no SQLite!</h3>";
echo "<p>Agora podes apagar este ficheiro (setup.php) e começar a usar o sistema.</p>";
?>