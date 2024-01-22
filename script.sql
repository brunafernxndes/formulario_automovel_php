USE programador2;

CREATE TABLE automoveis(
codigo INT(4) AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
placa VARCHAR(17) NOT NULL,
chassi VARCHAR(50),
montadora VARCHAR(30) NOT NULL,
PRIMARY KEY (codigo)
);

CREATE TABLE montadoras(
codigo INT(4) AUTO_INCREMENT,
montadora VARCHAR(30) NOT NULL,
PRIMARY KEY (codigo)
);

INSERT INTO montadoras(codigo, montadora) VALUES (NULL, "Volkswagen");
INSERT INTO montadoras(codigo, montadora) VALUES (NULL, "Ford");
INSERT INTO montadoras(codigo, montadora) VALUES (NULL, "Fiat");
INSERT INTO montadoras(codigo, montadora) VALUES (NULL, "Chevrolet");