<?php
    $conn=new mysqli("localhost","root","","auto_complete");
    if($conn->connect_error){
    	die("Faild to Connect".$conn->connect_error);
    }
    if (isset($_POST['submit'])) {
    	$data=$_POST['search'];
    	$sql="SELECT * FROM movie_names WHERE NameOfMovie='$data' ";
    	$result=$conn->query($sql);
        $row=$result->fetch_assoc();

        echo "ID :".$row['ID']."<br>";
        echo "Movie Name :".$row['NameOfMovie']."<br>";
        echo "Rating :".$row['Rating']."<br>";
        echo "Cost Price :$".$row['Cost']."<br>";
    }
?>