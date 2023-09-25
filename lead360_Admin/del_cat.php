<?php
include'connect/db.php';

$id = $_GET['id']; 

$query = dbconnect()->prepare("DELETE FROM category WHERE id=?");
$deleted = $query->execute([$id]);
if ($deleted) {
	echo "<script> alert('Category deleted !!!');window.location='view_cat';</script>";
	
}else{
	echo "<script> alert('operation failed!!!');window.location='view_cat';</script>";
}
?>