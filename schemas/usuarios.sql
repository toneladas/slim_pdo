create table usuarios(
    `id_usuario` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(20),
    `email` VARCHAR(40)
);

insert into usuarios (nome, email) values
('João', 'joao@joao.com.br'),
('Maria', 'maria@maria.com.br'),
('Carlos', 'carlos@carlos.com.br'),
('Henrique', 'henrique@henrique.com.br'),
('Gabriel', 'gabriel@gabriel.com.br'),
('Leandro', 'leandro@leandro.com.br');
