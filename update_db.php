<!-- update_db.php-->
<?
extract($_GET);
extract($_POST);
extract($_SERVER);
include "connet_db.php";
$sql = "update sport set $choice = $choice+1";
mysql_query ($sql, $con);
mysql_close($con);
?>
<html>
<meta charset="utf-8">
<head>
    <style>
        div{text-align: left;}
    </style>
    <title>결과</title>
    </head>
<body><center>
    ♠감사의 말씀♠
    <hr>
    <div>
    설문조사에 응해주셔서 감사합니다.
    <br>
    소중한 의견 를! 귀담아 반영할거에여~<br><br>
    </div>
    <form name="winclose">
    <input type="button" value="창닫기" onclick="window.close()">
    
    </form>
    </center>
    </body>
    </html>