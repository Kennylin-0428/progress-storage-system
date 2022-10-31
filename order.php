<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>訂單</title>
</head>

<body>
<h1>訂單</h1>
<table width="100%" border=1>
<tr>
    <td>編號</td>
    <td>近貨時間</td>
    <td>出貨時間</td>   
    <td>尺寸</td>
    <td>顏色</td>
    <td>數量</td>
    <td>單價</td>
    <td>總價</td>
    <td>客戶名稱</td>
    <td>負責員工</td>
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
$sql = "SELECT * FROM `order` ";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){?>
    
    <tr>
    <td><?php echo $row["O_ID"]?></td> 
    <td><?php echo $row["O_PurchasseDate"]?></td>
    <td><?php echo $row["O_ShipDate"]?></td>
    <td><?php echo $row["O_ShoesSize"]?></td>
    <td><?php echo $row["O_ShoesColor"]?></td>
    <td><?php echo $row["O_ShoesQuantity"]?></td>
    <td><?php echo $row["O_ShoesPrice"]?></td>
    <td><?php echo $row["O_ShoesPrice"]*$row["O_ShoesQuantity"]?></td>
    <td><?php echo $row["C_ID"]?></td>
    <td><?php echo $row["E_ID"]?></td>
    </tr>
   <?php
    }?>
    </table>
    
    </body>
</html>