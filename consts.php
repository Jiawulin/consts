<?php 
/**
 * 全局常量
 * @author JiawuLin
 */


//当前请求时间
define('TIME',      	$_SERVER['REQUEST_TIME']);

//当前UNIX时间戳秒秒数
define('MTIME', 		microtime(true));

//目录分隔符
define('DS',			DIRECTORY_SEPARATOR);

//是否是AJAX请求
define('IS_AJAX',       isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' );


?>