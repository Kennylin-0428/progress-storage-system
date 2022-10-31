<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>採購單</title>
</head>

<body>
<h1>採購單</h1>
<table width="100%" border=1>
<tr>
    <td>編號</td>
    <td>採購時間</td>
    <td>採購細節</td>   
    <td>負責員工</td>
    <td>採購廠商</td>
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
$sql = "SELECT * FROM `purchase_order` ";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){?>
    
    <tr>
    <td><?php echo $row["P_ID"]?></td> 
    <td><?php echo $row["P_date"]?></td>
    <td><?php echo $row["P_detail"]?></td>
    <td><?php echo $row["E_ID"]?></td>
    <td><?php echo $row["F_ID"]?></td>
    </tr>
   <?php
    }?>
    </table>
    
    </body>
</html>