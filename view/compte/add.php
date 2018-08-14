<!DOCTYPE html>
<html>
<head>
	<title>Gestion des comptes</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<script type="text/javascript" src="../../public/js/jquery.js"></script>
	
	<script type="text/javascript" src="../../public/js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//alert("OK");
			$("#gclient").load("../../view/compte/gclient.php");
			$("#gcompte").load("../../view/compte/gcompte.php");
			$('body').on("keyup","#rechercher",function(){
				alert("OK");
			}
			
		});	
		
	</script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">Gestion de la création des comptes </div>
			<div class="panel-body">
				<div id="gclient"></div>
				<div id="gcompte"></div>
				
			</div>
		</div>

	</div>

</body>
</html>