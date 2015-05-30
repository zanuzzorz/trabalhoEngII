CREATE DATABASE IF NOT EXISTS garcom_online;

CREATE TABLE IF NOT EXISTS endereco(
	id integer NOT NULL AUTO_INCREMENT,
	numero varchar(10) NOT NULL,
	complemento varchar(40) NOT NULL,
	estado integer NOT NULL,
	bairro varchar(100) NOT NULL,
	rua varchar(100) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS usuario(
	id integer NOT NULL AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	usuario varchar(30) NOT NULL,
	senha varchar(20) NOT NULL,
	status integer,
	saldo numeric(7,2),
	cpfcnpj varchar(15),
	email varchar(50),
	tipo integer NOT NULL,
	idendereco integer,
	PRIMARY KEY (id),
	FOREIGN KEY (idendereco) REFERENCES endereco(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS historico_saldo(
	id integer NOT NULL AUTO_INCREMENT,
	data date NOT NULL,
	tipo integer NOT NULL,
	valor numeric(7,2) NOT NULL,
	idusuario integer NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (idusuario) REFERENCES usuario(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS categoria_produto(
	id integer NOT NULL AUTO_INCREMENT,
	descricao varchar(100) NOT NULL,
	tipo integer  NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS produto(
	id integer NOT NULL AUTO_INCREMENT,
	preco numeric(7,2) NOT NULL,
	ativo boolean,
	ingredientes varchar(500),
	descricao varchar(100)  NOT NULL,
	idcategoria integer NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (idcategoria) REFERENCES categoria_produto(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS comanda(
	id integer NOT NULL AUTO_INCREMENT,
	valor numeric(7,2)  NOT NULL,
	status integer  NOT NULL,
	idusuario integer  NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (idusuario) REFERENCES usuario(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS pedido(
	id integer NOT NULL AUTO_INCREMENT,
	status integer NOT NULL,
	valortotal numeric(7,2) NOT NULL,
	data date NOT NULL,
	idcomanda integer NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (idcomanda) REFERENCES comanda(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS item_pedido(
	id integer NOT NULL AUTO_INCREMENT,
	quantidade numeric(7,2) NOT NULL,
	valorunitario numeric(7,2) NOT NULL,
	idpedido integer NOT NULL,
	idproduto integer NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (idpedido) REFERENCES pedido(id),
	FOREIGN KEY (idproduto) REFERENCES produto(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

insert into usuario (nome,usuario,senha,status,saldo,cpfcnpj,email,tipo,idendereco) VALUES ('admin', 'admin', 'senha', NULL, NULL, NULL,NULL,0,NULL)
