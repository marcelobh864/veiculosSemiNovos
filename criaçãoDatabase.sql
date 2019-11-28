create table `carros`(
id_carro varchar(255) NOT NULL,
marca_carro varchar(255) NOT NULL,
cor_carro varchar(255) NOT NULL,
ano_carro DATE NOT NULL,
primary key(id_carro)
);


INSERT INTO carros (id_carro,marca_carro,cor_carro,ano_carro)
values ("1","Fiat Bravo","Preto","2016-07-27");

INSERT INTO carros (id_carro,marca_carro,cor_carro,ano_carro)
values ("5","Chevrolet Camaro","Amarelo","2018-07-27");

INSERT INTO carros (id_carro,marca_carro,cor_carro,ano_carro)
values ("2","Fiat Punto","Vermelho","2014-07-27");

select * from carros;



