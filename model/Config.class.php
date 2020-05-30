<?php

class Config {
    // Informacoes Basicas do Site
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "MercadoX"; // Nome da pasta onde ta todo o projeto
    const SITE_NOME = "Mano Pipas - PHP 7 e Mysqli";
    const SITE_EMAIL_ADM = "joaortd@gmail.com"; // Email do administrador
    const DB_LIMIT_POR_PAG = 6;

    //Informacoes do Banco de Dados
    const DB_HOST = "localhost",
          DB_USER = "root",
          DB_PASSWORD = "", // nao tem senha
          DB_BANCO = "lojapipas",
          DB_PREFIX = "tb_";

    //Informacoes para php MAILLER
    const EMAIL_HOST = "smtp.gmail.com";// O servidor da onde esta sendo trabalhado o email
    const EMAIL_USER = "manotecnico.am@gmail.com";
    const EMAIL_NOME = "Contato Mano Pipas";
    const EMAIL_SENHA = "NaoSeiASenhaDele";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true; 
    const EMAIL_SMTPSECURE = "tls"; 
    const EMAIL_COPIA = "manotecnico.am@gmail.com"; 
    
}


?>