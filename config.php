<?php
        $dbhost = "148.66.138.145";
        $dbuser = "portfolioSh";
        $dbpass = "portShUsr21!";
        $dbname = "portfolioSh";
        $connection = mysqli_connect($dbhost,$dbuser, $dbpass,$dbname);
        if(mysqli_connect_errno()) {
          die("DB connection failed: ");
        }

?>