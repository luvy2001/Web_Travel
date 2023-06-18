<?php
    $server_name = "localhost";
    $username="root";
    $password="";
    $databasename ="book";
    $connection = mysqli_connect($server_name,$username,$password,$databasename,3306);
    if(mysqli_connect_error()){
        echo "failed";
    }

   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $people =$_POST['people'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $desti = $_POST['desti'];
    $number = $_POST['number'];

    echo "hello";

    $query = "insert into booked(name, email, people, time, date, days, desti, number) values 
    ('$name','$email','$people','$time','$date','$days','$desti','$number')";

   $sql= mysqli_query($connection, $query);
   if($sql){
    header('location:index.html');

   }else {
    echo "failed";
   }
?>