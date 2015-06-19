--
-- Database: garcom_online
--
CREATE DATABASE IF NOT EXISTS garcom_online;


--
-- Estrutura da tabela usuario
--
CREATE TABLE IF NOT EXISTS usuario (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  usuario varchar(30) NOT NULL,
  senha varchar(20) NOT NULL,
  status int(11) DEFAULT NULL,
  saldo decimal(7,2) DEFAULT NULL,
  cpfcnpj varchar(15) DEFAULT NULL,
  email varchar(50) DEFAULT NULL,
  tipo int(11) NOT NULL,
  endereco varchar(150) DEFAULT NULL,
  cidade varchar(50) DEFAULT NULL,
  uf int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;


--
-- Estrutura da tabela historico_saldo
--
CREATE TABLE IF NOT EXISTS historico_saldo(
  id integer NOT NULL AUTO_INCREMENT,
  data date NOT NULL,
  tipo integer NOT NULL,
  valor numeric(7,2) NOT NULL,
  idusuario integer NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (idusuario) REFERENCES usuario(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


--
-- Estrutura da tabela categoria_produto
--
CREATE TABLE IF NOT EXISTS categoria_produto(
  id integer NOT NULL AUTO_INCREMENT,
  descricao varchar(100) NOT NULL,
  tipo integer  NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


--
-- Estrutura da tabela produto
--
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


--
-- Estrutura da tabela comanda
--
CREATE TABLE IF NOT EXISTS comanda(
  id integer NOT NULL AUTO_INCREMENT,
  valor numeric(7,2)  NOT NULL,
  status integer  NOT NULL,
  idusuario integer  NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (idusuario) REFERENCES usuario(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


--
-- Estrutura da tabela pedido
--
CREATE TABLE IF NOT EXISTS pedido(
  id integer NOT NULL AUTO_INCREMENT,
  status integer NOT NULL,
  valortotal numeric(7,2) NOT NULL,
  data date NOT NULL,
  idcomanda integer NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (idcomanda) REFERENCES comanda(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


--
-- Estrutura da tabela item_pedido
--
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


--
-- Extraindo dados da tabela usuario
--
INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `status`, `saldo`, `cpfcnpj`, `email`, `tipo`, `endereco`, `cidade`, `uf`) VALUES
(1, 'admin', 'admin', 'senha', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL);