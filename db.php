<?php

 $server="sql311.epizy.com";
 $username="epiz_25627658";
 $password="yxmGHyy9sZ";
  $dbname="epiz_25627658_Pieaimacademygurgaon";

$conn=mysqli_connect($server , $username , $password , $dbname);
if(!$conn)
{
   die("connection failed:".mysqli_connect_error());
}
?>