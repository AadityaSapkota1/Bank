<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<form action="Total_Transfer.php.">
    <table border="2" align="auto">

        <tr><td>
                <input type="button" value="Back" name="home"ONCLICK="window.location.href='home.php' ""/>
                <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/>
    </table>
</form>
<?php
session_start();
$id=$_SESSION['user1'];
mysql_connect("localhost","root","");
mysql_select_db("bank");
$total1=  mysql_query("SELECT `Toid`, `Fromid`, `amt` FROM `transfer` WHERE `Toid`='$id' or `Fromid`=$id");


echo '</br>';
echo '<table border="2" align="center">';

echo '<tr style="background-color: red">';
echo '<td>Your Total Transection: <br></td>';
echo '<tr style="background-color: pink"><td>';
echo 'To Acc No';
echo '</td>';
echo '<td>';
echo 'From Acc No';
echo '</td>';
echo '<td>';
echo 'Amount';
echo '</td>';


echo '</tr>';
while($row=  mysql_fetch_array($total1))
{
    echo '<tr>';


    echo '<td>';
    echo $row['Toid'];
    echo '</td>';
    echo '<td>';
    echo $row['Fromid'];
    echo '</td>';


    echo '<td>';
    echo $row['amt'];
    echo '</td>';


    echo '</tr>';
}
// put your code here
?>
</body>
</html>

