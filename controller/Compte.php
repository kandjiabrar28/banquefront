<?php
if(isset($_GET['page'])){

	switch ($_GET['page']) {
		case 'compte':
			require_once '../view/compte/add.php';
			break;
		case 'client':
			# code...
			break;
		
		default:
			# code...
			break;
	}

	

}
echo"OK";
?>