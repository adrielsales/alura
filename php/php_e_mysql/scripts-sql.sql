use loja;

create table produtos (
	id integer auto_increment primary key,
    nome varchar(255),
    preco decimal(10,2)
);

select * from produtos;

insert into produtos (nome, preco)
values
('Carro', 20000),
('Motocicleta', 10000),
('Bicicleta', 300);