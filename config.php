<?php
date_default_timezone_set('America/Sao_Paulo');
/**
 * NAO REMOVER NENHUM CAMPO DESTE ARQUIVO, SE NECESSARIO APENAS FAZER ALTERAÇÕES
 */
/**
 * DEFAULT para PATH
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(dirname(__DIR__))). DS);
/**
 * DEFINIÇÃO DE CONSTANTES PARA URL
 */
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
/**
 * Caso mudar o padrao Application, mudar no composer e gerar os autoloads
 */
define('FOLDER_SRC','Application');
define('APP', ROOT . FOLDER_SRC . DS);
define('VENDOR', ROOT . 'vendor' . DS);

define("ALCATRAZ", VENDOR . "alcatraz" . DS);
define('PATH_AREA',       APP . 'Areas' . DS);
define('PATH_CONTROLLER', APP . 'Controllers' . DS);
define('PATH_LAYOUT', APP . 'Layouts' . DS);
define('PATH_VIEWS',      APP . 'Views' . DS);
define("LOG_PATH" , VENDOR . "alcatraz" . DS . "logs");
define("PATH_VALIDATORS", ALCATRAZ . 'modelstate'. DS . "Alcatraz" . DS . "ModelState" . DS . "Validators" . DS);
/**
 * Namespaces
 */
define('NAMESPACE_AREAS', 'Areas');
define('NAMESPACE_CONTROLLER', 'Controllers');
define('NAMESPACE_VALIDATORS', 'Alcatraz\\ModelState\\Validators\\');
define('NAMESPACE_ENTITIES', "Entities");
/**
 * Em todos os posts de formulario é enviado os dados para uma classe que valida todos os dados antes de retornar.
 */
define("USE_STANDARD_VALIDATOR", true);
/**
 * VARIAVEL DE TIMESTAMP PARA PADRÃO DE ATRIBUTOS
 */
define("CURRENT_TIMESTAMP", date('Y-m-d H:i:s'));
/**
 * DEFINIÇÂO DAS VARIAVEIS DE CONEXÂO COM O BD
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'alcatraz');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

/**
 * PREFIX PARA ADICIONAR NA ACTION QUANDO EXISTE POST NA TELA
 */
define("PREFIX_POST", "_post");

/**
 * LAYOUT
 */
define('PREFIX_TITLE', 'MVC');
define("DEFAULT_LAYOUT", "basic");
define("DEFAULT_TITLE","Alcatraz");
define("DEFAULT_FAVICON","");
define("DEFAULT_DESC","");
define("DEFAULT_TAGS","");


/* DEBUG */
define ("DEBUG" , true);

if(!defined("DEBUG") || DEBUG === false){
    error_reporting(0);
    ini_set("display_errors", 0 );
    ini_set("log_errors", 1);
    ini_set("error_log", LOG_PATH .DS. "php-error.log");
    register_shutdown_function( "error_tratamento" );
    function error_tratamento() {
        $error = error_get_last();
        if( $error !== NULL) {
            $errno   = $error["type"];
            $errfile = $error["file"];
            $errline = $error["line"];
            $errstr  = $error["message"];



            var_dump($error);
        }
    }
} else {
    error_reporting(E_ALL);
    ini_set("display_errors", 1 );
}
