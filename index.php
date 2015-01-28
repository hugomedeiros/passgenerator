<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link type="text/css" rel="stylesheet" href="../Jaguar/assets/css/style.css"/>
	<style>
		body {
			background: #3a3335;
		}
		.panel { margin-top: 2em;}
	</style>
</head>
<body>
	<script>
		function randomPassword(length)
		{
			chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
			pass = "";

			for(x=0;x<length;x++)
			{
				i = Math.floor(Math.random() * 62);
				pass += chars.charAt(i);
			}

			return pass;
		}

		function formSubmit()
		{
			passform.passbox.value = randomPassword(passform.length.value);
		}
	</script>

	
	<div class="col col-lg-5">
		
	</div>
	<div class="col col-lg-5">
		<div class="panel panel-default">
			<form name="passform">
				<div class="panel-heading">
					<h1 class="text-center">Password Generator</h1>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Length:</label>
						<input type="number" name="length" value="12" class="form-control">
					</div>


					<div class="form-group">
						<label>Password:</label>
						<input name="passbox" type="text" size="50" tabindex="1" class="form-control">
					</div>
				</div>

				<div class="panel-footer nopadding">
					<div class="form-actions">
						<input class="btn btn-success" type="button" value="Gerar" onClick="javascript:formSubmit()" tabindex="2">
						<input class="btn btn-default" type="reset" value="Clear" tabindex="3">	
					</div>
				</div>
				
				
			</form>	
		</div>

		
	</div>
	<div class="col col-lg-5"></div>

	
</body>
</html>