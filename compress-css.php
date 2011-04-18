<?
ob_start("ob_gzhandler");
header("content-type: text/css; charset: UTF-8");
header ("expires: " . gmdate ("D, d M Y H:i:s", time() + 302400) . " GMT");
header("Cache-Control: max-age=302400, public, must-revalidate", true);
echo file_get_contents($_GET['file']);
?>