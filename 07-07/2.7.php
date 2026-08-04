
<!-- 2.7 Write a PHP code to use mysql date and time functions as given 
bellow: 
1) HOUR() 
2) MINUTE() 
3) SECOND() 
4) DATE_FORMAT(). --> 
 
<?php 
date_default_timezone_set("Asia/Kolkata"); 
echo date("h"); 
echo "<br>"; 
echo date("m"); 
echo "<br>"; 
echo date("s"); 
echo "<br>"; 
echo date("d.m.y"." "."h.m.s"); 
?> 