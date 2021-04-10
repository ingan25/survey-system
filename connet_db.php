<meta charset="utf-8">
<?
$host = "localhost";
$user = "root";
$passwd = "apmsetup";
$con = mysql_connect($host, $user, $passwd) or die("mysql서버 접속 에러");

mysql_select_db("transport_db",$con ) or die("db 접속 오류");
?>