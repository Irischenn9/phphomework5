<?php
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phphw');  // 預設使用的資料庫名稱

//     $dbname="php";
//     if ( !mysqli_select_db($link, $dbname) )
//         die("無法開啟 $dbname 資料庫!<br/>");
//  else
//     echo "資料庫: $dbname 開啟成功!<br/>";


 $SQL="SELECT*FROM user";
 if ( $result = mysqli_query($link, $SQL) ) { 
     echo"<table border='1'>";
    while( $row = mysqli_fetch_assoc($result) ){ 
        echo"<tr>";
        
        echo"<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPWD"]."</td><td>".$row["uRole"]."</td><br/>";
        echo"</tr>";
    }
    echo"</table>";
  }
  else ( $result = mysqli_query($link, $SQL) ) { 
    echo"<table border='2'>";
   while( $row = mysqli_fetch_assoc($result) ){ 
       echo"<tr>";
       
       echo"<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPWD"]."</td><td>".$row["uRole"]."</td><br/>";
       echo"</tr>";
   }
   echo"</table>";
 }
?>