<?php

/**
 * Description of Config
 * ARMAZENA DIVERSAS INFORMACOES DO SISTEMA
 * @author Guilherme
 */
class Config {

    /**
     * BANCO DE DADOS ========================
     */
    const BD_HOST = "ec2-107-22-189-136.compute-1.amazonaws.com";
    const BD_USER = "uldvascdejvcgy";
    const BD_SENHA = "aa9878c0e14dace4fb8a7e3bbcdda5c99dc3e817aa9564734e6a96ac91e2207d";
    const BD_BANCO = "d4mh8sc7aj9mqr";
    const BD_PREFIX = "";
    const BD_PORT = "5432";

    /**
     * INFORMACOES DO SITE =========================
     */
    //URL DO SITE
    const SITE_URL = "http://localhost";
    //PASTA PADRAO DO SITE
    const SITE_PASTA = "credit2eat";
    const SITE_NOME = "Credit2Eat";
    const SITE_EMAIL_ADM = "credit2eat@gmail.com";

    /**
     * DADOS DO SERVIDOR DE EMAIL
     */
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "credit2eat@gmail.com";
    const EMAIL_NOME = "Credit2Eat";
    const EMAIL_SENHA = "teixeira123";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "credit2eat@gmail.com";

}

/**
     * BANCO DE DADOS ========================
     
    const BD_HOST = "db4free.net";
    const BD_USER = "teixeira123";
    const BD_SENHA = "995213689";
    const BD_BANCO = "credit2eat";
    const BD_PREFIX = "";
    */