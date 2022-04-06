<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="Yes"){
        echo "<a href='logout.php'>登出系統</a>";
    }else{
        echo"非法進入";
        exit();
    }
}else{
    echo"非法進入";
    exit();

}



//echo"歡迎註冊"
?>

<html>
    <head>
    <title>註冊</title>
    </head>
    <center><h1>註冊</h1></center>
    <hr color ="black" width="80%">

    <form action="wregister.php" method="post" style="eidth:80%;" enctype="multipart/form-data">

    
    <br>
    <br/><center>&nbsp&nbsp&nbsp&nbsp帳號:&nbsp<input type ="text" name="id" placeholder="id" require></center>
    <br> 
    <br/> <center>&nbsp&nbsp&nbsp&nbsp密碼:&nbsp<input type ="password" name="password" placeholder="password" require></center>
    <br> 
    <br/> <center>&nbsp&nbsp&nbsp&nbspEmail:&nbsp<input type ="email" name="email" placeholder="email" require></center>
    <br> 
    <br/> <center>Telephone:&nbsp<input type ="tel" name="tel" placeholder="tel" require ></center>
    <br> <!--數值型-->
    <br/> <center>&nbsp&nbsp&nbsp&nbsp<input type="submit"></center>



    </form>
</html>