<?php
/**
 * Arquivo de configuração Alcatraz Framework
 *
 * Dependendo dos paths importandos para seu projeto não é necessários configurar todas
 * as constantes.
 *
 * NAO REMOVER NENHUM CAMPO DESTE ARQUIVO, SE NECESSARIO APENAS FAZER ALTERAÇÕES.
 */


/**
 * DEFAULT timezone
 */
date_default_timezone_set('America/Sao_Paulo');

/**
 * DEFAULT para PATH
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT',dirname(dirname(dirname(__DIR__))) . DS);

/**
 * DEFINIÇÃO DE CONSTANTES PARA URL
 */
define('URL_PUBLIC_FOLDER', 'public');

define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);


/**
 * Pasta onde fica os controllers, views, areas e entities
 * caso seja alterada aqui, deve ser alterada no composer.json e
 * executar o update do composer para que os namespaces das classes
 * sejam encontradas.
 */
define('FOLDER_SRC','Application');

/**
 * Caminho fisico até a pasta onde se encontram os controllers,
 * areas, entities e views.
 */
define('APP', ROOT . FOLDER_SRC . DS);

/**
 * Caminho fisico até a pasta vendor.
 * Caso tenha optado por outro nome deve ser alterado aqui.
 */
define('VENDOR', ROOT . 'vendor' . DS);

/**
 * Caminho fisico até a pasta public, pasta que contem os arquivos
 * que podem ser visualizados no acesso ao seu site.
 */
define('PATH_PUBLIC', ROOT . 'public' . DS);

/**
 * Caminho fisico até a pasta layouts que contem as maters pages
 * que podem ser selecionadas.
 */
define('PATH_LAYOUT', APP . 'layouts' . DS);

/**
 * Caminho fisico até a pasta alcatraz na vendor
 */
define('ALCATRAZ_PATH', VENDOR . "alcatraz" . DS);

/**
 * Caminho fisico até os Validators que estão contidos no PATH ModelState.
 */
define('VALIDATORS_PATH', ALCATRAZ_PATH . "modelstate" . DS . "ModelState" . DS . "Validators" . DS);

/**
 * Caminho fisico até os Controllers, Views, Models, Areas e Entities
 */
define('PATH_CONTROLLER', APP . 'Controllers' . DS);
define('PATH_VIEWS',      APP . 'Views' . DS);
define('PATH_MODELS',     APP . 'Models' . DS);
define('PATH_AREA',       APP . 'Areas' . DS);
define('PATH_ENTITIES',       APP . 'Entities' . DS);

/**
 * Namespaces dos Controllers, Views, Models, Areas e Entities
 */
define('NAMESPACE_CONTROLLER', 'Controllers');
define('NAMESPACE_MODELS', 'Models');
define('NAMESPACE_AREAS', 'Areas');
define('NAMESPACE_VALIDATORS', 'ModelState\\Validators\\');
define('NAMESPACE_ENTITIES', 'Entities\\');

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

/**
 * Define os dados para conexão com o servidor de email para o envio de email atravez da Classe alcatraz/emailsend
 */
define("HOST_EMAIL","");
define("USER_EMAIL","");
define("PASS_EMAIL","");


/**
 * PREFIX PARA ADICIONAR NA ACTION QUANDO EXISTE POST NA TELA
 */
define("PREFIX_POST", "_post");

/**
 * DEFAULT Constroller,View
 */
define("DEFAULT_CONTROLLER","IndexController");
define("DEFAULT_CONTROLLER_ABV","Index");
define("DEFAULT_VIEW","Index");


/**
 * Constantes para a classe Layout.
 */
define('PREFIX_TITLE', 'MVC');
define("DEFAULT_LAYOUT", "basic");
define("DEFAULT_TITLE","Alcatraz");
define("DEFAULT_FAVICON","");
define("DEFAULT_DESC","");
define("DEFAULT_TAGS","");


/**
 * Caso true toda vez que submeter um formulario, todos os dados POST
 * serão enviados para o classe Standard e serão validados
 */
define('USE_STANDARD_VALIDATOR', true);


/**
 * Define o Controller e a view padrão para envio de erro 404
 */
define('CONTROLLER_404','ErrosController');
define('ACTION_404','Erro404');


//TODO: Tratamento de erro em produção

//register_shutdown_function( "error_tratamento" );

//error_reporting(1);

//function error_tratamento() {
//    $error = error_get_last();
//    if( $error !== NULL) {
//        $errno   = $error["type"];
//        $errfile = $error["file"];
//        $errline = $error["line"];
//        $errstr  = $error["message"];
//
//
//
//        var_dump($error);
//    }
//}