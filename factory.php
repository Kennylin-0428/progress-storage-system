<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>廠商名單</title>
</head>

<body>
<h1>廠商名單</h1>
<table width="100%" border=1>
<tr>
    <td>廠商編號</td>
    <td>廠商姓名</td>
    <td>廠商電話</td>   
    <td>廠商Email</td>   
    <td>廠商地址</td>
</tr>

<?php
error_reporting(0);
$DBNAME = "company";
$DBUSER = "root";
$DBPASSWD = "";
$DBHOST = "localhost";
$conn = mysqli_connect( $DBHOST, $DBUSER, $DBPASSWD);

if (empty($conn))
{
    print mysqli_error($conn);
    die ("無法連結資料庫");
    exit;
}
if( !mysqli_select_db($conn, $DBNAME)) 
{
    die ("無法選擇資料庫");
}
mysqli_query( $conn, "SET NAMES 'utf8'");
$sql = "SELECT * FROM `factory` ";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){?>
    
    <tr>
    <td><?php echo $row["F_ID"]?></td> 
    <td><?php echo $row["F_name"]?></td>
    <td><?php echo $row["F_phone"]?></td>
    <td><?php echo $row["F_email"]?></td>
    <td><?php echo $row["F_address"]?></td>
    </tr>
   <?php
    }?>
    </table>
    
    </body>
</html>