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
if(isset($_POST['plus'])){
    $O_ID = $_POST["O_ID"];
    $O_PurchasseDate = $_POST["O_PurchasseDate"];
    $O_ShipDate = $_POST["O_ShipDate"];
    $O_ShoesSize = $_POST["O_ShoesSize"];
    $O_ShoesQuantity = $_POST["O_ShoesQuantity"];
    $O_ShoesPrice = $_POST["O_ShoesPrice"];
    $O_ShoesColor = $_POST["O_ShoesColor"];
    $C_ID = $_POST["C_ID"];
    $E_ID = $_POST["E_ID"];
    
    $sql2 = "INSERT INTO `order` (`O_ID`, `O_PurchasseDate`, `O_ShipDate`, `O_ShoesSize`, `O_ShoesQuantity`, `O_ShoesPrice`, `O_ShoesColor`, `C_ID`, `E_ID`) VALUES ('$O_ID', '$O_ShipDate', '$O_PurchasseDate', '$O_ShoesSize', '$O_ShoesQuantity', '$O_ShoesPrice', '$O_ShoesColor', '$C_ID', '$E_ID');";
    
    $result2 = mysqli_query($conn,$sql2);
    }
?> 
<form method="post" action="insertorder.php">
  <table width="100%"  border=1 >              
      <tr>
      <td width="15%"align="left" >編號</td>
      <td width="15%"><input type='text' name='id'/></td>                               
      </tr>
      
     <tr>
      <td width="15%" align="left" >近貨時間</td>
      <td width="15%"><input type='date' name='conpany'/></td>                               
      </tr>
      
      <tr>
      <td width="15%" align="left" >出貨時間</td>
      <td width="15%"><input type='date' name='content'/></td>                               
      </tr>
      
      <tr>
      <td width="15%" align="left" >尺寸</td>
      <td width="15%"><input type='text' name='date'/></td>                               
      </tr>
      
      <tr>
      <td width="15%" align="left" >價格</td>
      <td width="15%"><input type='text' name='date'/></td>                               
      </tr>
      
      <tr>
      <td width="15%" align="left" >顏色</td>
      <td width="15%"><input type='text' name='date'/></td>                               
      </tr>
      
      <tr>
      <td width="15%" align="left" >客戶</td>
      <td width="15%"><input type='text' name='date'/></td>                               
      </tr>
      
      <tr>
      <td width="15%" align="left" >負責員工</td>
      <td width="15%"><input type='text' name='date'/></td>                               
      </tr>
      
 </table>
</form>

    
<form method="post" >
<button type = 'submit' name= "plus">新增
</button>
</form>