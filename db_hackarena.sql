CREATE DATABASE hack_arena;
USE hack_arena;

CREATE TABLE Empresa ( 
    nomeEmpresa VARCHAR(100) NOT NULL,
    Senha VARCHAR(20) NOT NULL,
    CNPJ BIGINT PRIMARY KEY,  
    Situacao_cadastral VARCHAR(50) NOT NULL,  
    Telefone VARCHAR(20), 
    Data_abertura DATE, 
    Estado VARCHAR(30) NOT NULL,  
    Cidade VARCHAR(30) NOT NULL,   
    Rua VARCHAR(100) NOT NULL, 
    Numero INT NOT NULL
);

CREATE TABLE Escola 
( 
    nomeEscola VARCHAR(100) NOT NULL,  
    Senha VARCHAR(20) NOT NULL,
    Cod_Escola INT PRIMARY KEY, 
    Ensino_ofe VARCHAR(100) NOT NULL,
    Telefone VARCHAR(15) NOT NULL,
    Cidade VARCHAR(30) NOT NULL,   
    Estado VARCHAR(30) NOT NULL,  
    Rua VARCHAR(100) NOT NULL, 
    Numero INT NOT NULL 
); 



CREATE TABLE login_usuarios(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    senha VARCHAR(20) NOT NULL,
    CNPJ BIGINT,
    Cod_Escola INT,
    FOREIGN KEY (CNPJ) REFERENCES Empresa(CNPJ),
    FOREIGN KEY (Cod_Escola) REFERENCES Escola(Cod_Escola)
);