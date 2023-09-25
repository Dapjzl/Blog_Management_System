<?php 
if (!isset($_SESSION['user'])) {
	echo "<script>alert('Please login to access the Dashboard');window.location='index.php';</script>";
}

?>