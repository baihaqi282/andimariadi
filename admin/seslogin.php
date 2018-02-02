<?php
session_start();
if (empty($_SESSION['user']) AND empty($_SESSION['password']) AND empty ($_SESSION['level'])AND empty ($_SESSION['id_petugas']))
{


	
	 header('Location: ../index.php');
	 }
?>