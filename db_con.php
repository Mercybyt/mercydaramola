<?php
$con = new mysqli("localhost", "wetinde1_port", "Livelystone@1", "wetinde1_portfolio");
if(mysqli_connect_errno()){
    printf("connection failed: %s\n", mysqli_connect_error());
    exit();
          }
?>