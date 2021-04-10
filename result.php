<?
extract($_GET);
extract($_POST);
extract($_SERVER);
include "connet_db.php";

$sql = " select * from sport";
$res = mysql_query($sql, $con);
$row = mysql_fetch_array($res);

$total=$row[det1]+$row[det2]+$row[det3]+$row[det4]+$row[det5];

$det1_pro = floor($row[det1]/$total*100);
$det2_pro = floor($row[det2]/$total*100);
$det3_pro = floor($row[det3]/$total*100);
$det4_pro = floor($row[det4]/$total*100);
$det5_pro = floor($row[det5]/$total*100);
?>


<html>
    <head><title>전공 인기쟁이 설문조사 </title>
        <style> #goguma{color:white;}
            
        </style></head>
    <body>
        <table width="280px" height="250px" border="0">
            <tr><td height="1" bgcolor="#3300CC"></td></tr>
            <tr bgcolor="#3300CC" height="35px">
            <td id="goguma"> 
            &nbsp; ■전공 인기쟁이 설문조사 결과 </td>
        </tr>
        <tr ><td height="2px"></td></tr>
        <tr align="center">
            <td height="30px">설문참여 : [총 <? echo $total; ?>명]</td>
        </tr>
         <tr height="2px"><td></td></tr>
        <tr bgcolor="#3300CC">
            <td  height="1px"></td>
        </tr>
        
        
        <tr height="2px"><td></td></tr>
        <tr><td>1.코: <? echo $row[det1]; ?>명</td></tr>
       <tr>
       <td>
        <table width="150px" border="0px">
           <tr>
            <?
                echo"<td width='$det1_pro%'height='1' bgcolor='green'>";
                echo"<td width='50'>&nbsp;";
                echo" {$det1_pro}%";
                echo"</td>";
            ?>
        </tr>
           <tr><td height="15"></td></tr>
            </table>
            </td>
            </tr>
            
            
           
         
        <tr><td>2.타지리: <? echo $row[det2]; ?>명</td></tr>
       
        <tr>
        <td>
        <table width="150px" border="0px">
        <tr>
            <?
                echo"<td width='$det2_pro%'height='1' bgcolor='#green'>";
                echo"<td width='50'>&nbsp;";
                echo" {$det2_pro}%";
                echo"</td>";
            ?>
        </tr>
        <tr><td height="15"></td></tr>
        </table>
        </td>
        </tr>
        
         
        <tr><td>3.김성근: <? echo $row[det3]; ?>명</td></tr>
       
        <tr>
        <td>
        <table width="150px" border="0px">
        <tr>
            <?
                echo"<td width='$det3_pro%'height='1' bgcolor='brown'>";
                echo"<td width='50'>&nbsp;";
                echo" {$det3_pro}%";
                echo"</td>";
            ?>
        </tr>
        <tr><td height="15"></td></tr>
        </table>
        </td>
        </tr>
            
        <tr><td>4.바퀴퀴님: <? echo $row[det4]; ?>명</td></tr>
    
        <tr>
        <td>
        <table width="150px" border="0px">
        <tr>
            <?
                echo"<td width='$det4_pro%'height='1' bgcolor='red'>";
                echo"<td width='50'>&nbsp;";
                echo" {$det4_pro}%";
                echo"</td>";
            ?>
        </tr>
        <tr><td height="15"></td></tr>
        </table>
        </td>
        </tr>
        
        <tr><td>5.노인: <? echo $row[det5]; ?>명</td></tr>
            
        <tr>
        <td>
        <table width="150px" border="0px">
        <tr>
            <?
                echo"<td width='$det5_pro%'height='1' bgcolor='purple'>";
                echo"<td width='50'>&nbsp;";
                echo" {$det5_pro}%";
                echo"</td>";
            ?>
        </tr>
        <tr><td height="15"></td></tr>
        </table>
        </td>
        </tr>
        <tr><td  height="2px"></td></tr>
        <tr bgcolor="#3300CC"><td  height="1px"></td></tr>
         <tr height="10px"><td></td></tr>
        <tr align="center"><td><input type="button" value="창닫기" onclick="window.close()"></td></tr>
        </table>
    </body>
</html>