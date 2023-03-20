<!DOCTYPE html>
	<head>
		<meta charset='utf-8'>
		<title>URL</title>
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="../fontawesome-free-5.10.2-web/css/all.css"/>
	</head>
	<body class="bodyIndex">
		<div class="container">
			<!-- Titre : DoliStats -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 titre">DoliStats</div>
			</div>
			<!--  -->
			<form action="login.php" method="post">
				<!-- Saisie URL-->
				<div class="row">
					<span class="fa fa-link fa-3x"></span>
					<input type="text" name="url" placeholder="URL de connexion" class="authentification">
				</div>
				<!-- Liste déroulante URL -->
				<div class="row">
					<select id="urlSave" class="urlSave">
					  <option value="url1">URL 1 </option>
					  <option value="url2" selected>URL 2</option>
					  <option value="url3">URL 3</option>
					</select>
				</div>
				<!-- Bouton "Se connecter" -->
				<div class="row">
					<input type="submit" name="valider" value="Valider" class="btnConnect">
				</div>
			</form>
		</div>
	</body>
</html>