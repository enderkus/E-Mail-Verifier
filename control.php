<?php

$email = $_POST['email'];
//Edit your access key.
$api_key = "30171fcefc375d018657601643e7033c";

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://apilayer.net/api/check?access_key='.$api_key.'&email='.$email.'&smtp=1');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
$control = $obj->smtp_check;

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>E-Mail Checker</title>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2 center">
			
			<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">
	<?php
	
	if ($control==1) {
		echo "* E-mail address true";
	} else {
		echo "E-mail address not found !";
	}
	
	
	?>
	
	</h1>
    <p class="lead">A simple tool to check whether an email address exists.</p>
	<hr class="my-4">
	
	<a href="index.html" class="btn btn-success btn-block">Home</a>
	
  </div>
</div>
				
				
			
			</div>
		</div>
	</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

