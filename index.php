<!DOCTYPE html>
<html>
<head>
	<title>Banque du peuple</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<script type="text/javascript" src="public/js/jquery.js"></script>
	
	<script type="text/javascript" src="public/js/jquery-ui.js"></script>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			//alert("OK");
			$("#envoyer").click(function(e){
			e.preventDefault();			
			$("#login").hide();
		});

		});
		
		/*$("#envoyer").on("click",function(){
			alert("no OK");
		

		});*/
		
		
	</script> -->
	
</head>
<body>
	<div class="container col-md-6 col-md-offset-3">
		<div  class="panel panel-primary">
			<div class="panel-heading">LOGIN</div>
			<div class="panel-body">
		<div>
			<form method="POST" action="/controller/User.php">
				<div class="form-group">
					<label class="control-label">email</label>
					<input class="form-control" type="email" name=""/>
					
				</div>
				<div class="form-group">
					<label class="control-label">Mot de passe</label>
					<input class="form-control" type="password" name=""/>
					
				</div>
				<div class="form-group" id="login">
					<input class="btn btn-success" type="submit" name="envoyer" value="Envoyer" id="envoyer" />
					<input class="btn btn-danger" type="reset" name="" value="annuler" />
					
				</div>
			</form>
			
		</div>
		
	</div>
				
			
		</div>
	</div>
	


</body>
</html>