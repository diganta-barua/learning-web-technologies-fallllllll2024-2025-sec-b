<?php
 $server = "localhost";
 $username = "root";
 $password ="";
 $db ="product_db";

$con = mysqli_connect($server , $username , $password,$db);
 if(!$con){
    die("could'nt connect".mysqli_connect_error());
 }
 else{
   
 }


 function write ($a){
    global $con;
    return mysqli_query($con,$a);
}


function readone($b){
   global $con;
   $result = mysqli_query($con, $b);
   $row = mysqli_fetch_array($result);
   return $row[0];
}

function read($c){
   global $con;
   $result=mysqli_query($con,$c); 
   $data=[];
   while($row = mysqli_fetch_assoc($result)){

    
    array_push($data,$row);
   } 
   return $data;
}

?>