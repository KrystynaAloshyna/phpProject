<?php
$mysqli = new mysqli("localhost","root","","phpproject");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{echo("CONNECTED DB <br/>");}
 

$dataWanted="SELECT * FROM users";
$res=$mysqli->query($dataWanted); 
if(!$res) {
  die('ERROR select from bd');}
//  else echo('select from bd succes');
//  var_dump($res);

 $rows=$res->num_rows;
   for($i=0; $i<$rows; ++$i)
   {
      $res->data_seek($i);
      echo 'full name: '.$res->fetch_assoc()['full_name'].'<br/>';
      echo 'login: '.$res->fetch_assoc()['login'].'<br/>';
   }
  // print_r($rows);








?>