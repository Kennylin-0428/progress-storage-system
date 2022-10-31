<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>客戶名單</title>
</head>

<body>
<h1>客戶名單</h1>
<table width="100%" border=1>
<tr>
    <td>客戶編號</td>
    <td>客戶姓名</td>
    <td>客戶Email</td>   
    <td>客戶地址</td>
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
$sql = "SELECT * FROM `client` ";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){?>
    
    <tr>
    <td><?php echo $row["C_ID"]?></td> 
    <td><?php echo $row["C_name"]?></td>
    <td><?php echo $row["C_email"]?></td>
    <td><?php echo $row["C_address"]?></td>
    </tr>
   <?php
    }?>
    </table>
    
    </body>
</html>