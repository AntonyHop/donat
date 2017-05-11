<?
    require_once ("config.php");
   
    // начиная с версии PHP 5.3.0 можно использовать анонимные функции
    spl_autoload_register(function ($class) {
        include 'lib/' . $class . '.class.php';
    }); 

    session_start();

    if (!isset($_GET["url"])) $_GET["url"] = "/";
    $god = new God($_GET["url"]);

?>