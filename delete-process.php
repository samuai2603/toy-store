<?php
	include ('productCRUD.php');
		$obj = new productCRUD();
		$success = $obj->deleteproducts($_GET['code']);
		header('Location: index.php');
?>