<!DOCTYPE html>
<html>
<head>
    <style>  body {
            background-color: #d0e4fe;
        }
        u
        {
            color: purple;
        }
        h2 {

            text-align: center;
        } </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>

<form action="Realbalance.php">

    <table border="2" align="center">

        <tr style="background-color: pink" align="center">
            <th>
                Transaction Details
            </th>
        </tr>
    </table>
    <table border="2" align="center">
        <tr>
            <td>
                Enter Any Amount :
            </td>

            <td>
                <input type="text" name="text1" value="" />
            </td><br></tr>
        <table border="2" align="center">
            <tr>
                <td> <INPUT Type="submit" VALUE="Deposit" name="ds">
                    <input type="submit" value="WithDraw" name="wd">
                    <input type="button" value="Back" name="home"ONCLICK="window.location.href='home.php' ""/>

                    <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/></td>
            </tr>
        </table>

</form>
<?php
require_once "config.php";
$id = $_SESSION['user1'];

//echo '<br>',$id;

echo '<br>Your Initial balance is ', $_SESSION['user'];




$_SESSION['intamt'] = $_SESSION['user'];




if (isset($_GET['wd']))
{

    $withdraamt = ($_SESSION['z'] - $_GET['text1']);
    $enamt = $_GET['text1'];
    $_SESSION['user'];
    if ($withdraamt >= 0)
    {

        $d = 'withdraw';
        mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$d','$enamt')");
        // echo '<br>Your Intition balance:' . $i;
        echo '<br> Now Your Balance is :', '<b>', $withdraamt, '</b>';
        //$_SESSION['user']= $withdraamt;
        $_SESSION['z']=$withdraamt;
    } else
    {

        echo '<br>Not have Amount Balance';

        echo '<br>Please Enter ';
    }

}


// put your code here
?>
</body>
</html>

