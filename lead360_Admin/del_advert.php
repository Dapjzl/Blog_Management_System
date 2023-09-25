<?php
include 'connect/db.php';



$id = $_GET['id']; 

$sql = "SELECT image FROM advert WHERE id=$id";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($res);
$newName = $row['image'];
$destination = 'uploads/' . $newName;

	if($res == TRUE){
		if(!unlink($destination)){
			echo "<script> alert('An Error Occurred'); window.location='view_advert' </script>";
		}else{
			$query = dbconnect()->prepare("DELETE FROM advert WHERE id=?");
			$deleted = $query->execute([$id]);
			if ($deleted) {
				echo "<script> alert('Advert deleted !!!');window.location='view_advert';</script>";
				
			}else{
				echo "<script> alert('Operation failed!!!');window.location='view_advert';</script>";
			}
				}

	}
?>