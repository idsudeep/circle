<?php 

mysql://b927ea4a5a627f:1f60e45c@us-cdbr-east-02.cleardb.com/heroku_885bde7082c3658?reconnect=true
        $servername ="us-cdbr-east-02.cleardb.com";
        $username ="b927ea4a5a627f";
        $password="1f60e45c";
        $dbconnect="heroku_885bde7082c3658";

     /* $servername = "localhost";
      $username = 'root';
      $password = '';
      $dbconnect='form';*/

      $connect = mysqli_connect($servername,$username,$password,$dbconnect);
    
      if ($connect->connect_errno) 
      {
    echo "Failed to connect : (" . $connect->connect_errno . ") " . $connect->connect_error;
     }
     

?>