<?php
include'connect/db.php';

$id = $_GET['id']; 

$query = dbconnect()->prepare("DELETE FROM messages WHERE id=?");
$deleted = $query->execute([$id]);
if ($deleted) {
	echo "<script> alert('Message deleted !!!');window.location='messages';</script>";
	
}else{
	echo "<script> alert('operation failed!!!');window.location='messages';</script>";
}
?>