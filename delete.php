<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"myfirstdb");
$delete = $_GET['del'];
$sql = "delete from student where id = '$delete'";
if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("view.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>