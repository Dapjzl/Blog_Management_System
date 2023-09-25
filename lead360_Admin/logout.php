<?php
include 'connect/db.php';

session_destroy();

echo "<script>alert('logout successful');window.location='../index.php';</script>";



?>