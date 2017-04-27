<?
    require_once ("config.php");
    require_once ("lib/God.php");
    require_once ("lib/SafeMySQL.php");
    require_once ($_SERVER['DOCUMENT_ROOT']."/lib/Smarty/Smarty.class.php");


    if (!isset($_GET["url"])) $_GET["url"] = "/";
    $god = new God($_GET["url"]);
?>