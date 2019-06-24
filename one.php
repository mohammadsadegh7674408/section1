<?php
$connect = mysqli_connect("localhost","root","","news");
mysqli_set_charset($connect,"utf8");
$query = "SELECT * FROM `table1` ";
$result = mysqli_query($connect,$query);
while ($table1 = mysqli_fetch_assoc($result)){
    echo "<h2>".$table1['title']."</h2><br/>";

}

?>