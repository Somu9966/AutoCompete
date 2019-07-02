<?php
    $conn=new mysqli("localhost","root","","auto_complete");
    if($conn->connect_error){
    	die("Faild to Connect".$conn->connect_error);
    }
    if (isset($_POST['query'])) {
    	$inputtext=$_POST['query'];
    	$query="SELECT NameOfMovie FROM movie_names NameOfMovie LIKE '%$inputtext%'";
    	$result=$conn->query($query);
    	if ($result->num_rows<0) {
    		while ($row=$result->fetch_assoc()) {
    			echo "<a href='#'' class='list-group-item list-group-item-action border-1'>
                   ".$row['NameOfMovie']."
    			</a>";
    		}
    	}else
    	{
    		echo "<p class='list-group-item border-1'>No Record Found </p>";
    	}
    }
?>