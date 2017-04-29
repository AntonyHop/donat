<?
$start = microtime(true); 
    require_once ("config.php");
    require_once ("lib/God.php");
    require_once ("lib/SafeMySQL.php");
    require_once ("lib/TplMaster.php");


    if (!isset($_GET["url"])) $_GET["url"] = "/";
    $god = new God($_GET["url"]);

	if(PREFOME_TIME){
		echo "<style> .prefome-time{position: fixed;bottom: 5px;right: 5px;background: #fff;opacity: 0.05;cursor: pointer;transition-duration: 0.2s;}.prefome-time:hover{opacity: 1;}</style>";
		echo '<div class="prefome-time">Время выполнения скрипта: '.(microtime(true) - $start).' сек.</div>'; 
	}
?>