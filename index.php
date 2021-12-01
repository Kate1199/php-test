<?php
require_once 'FileReader.php';
require_once 'PointHandler.php';
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<div class="form-file">
	<div class="container col-8 mx-auto mt-5">
	<form action="/index.php" method="POST">
		<div class="mb-3">
  			<label for="inputFileName" class="form-label">Укажите путь к файлу</label>
 			<input type="text" class="form-control" id="inputFileName" placeholder="D://..." name="filename">
		</div>
		<div class="col-auto">
    		<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  		</div>
  </form>
  <?php
  if(isset($_POST['filename']))
  {
	$fileReader = new FileReader;
	$points = $fileReader->readAllPoints($_POST['filename']);
	$pointHandler = new PointHandler;
	$pointHandler->outputIfBelongs($points);
  }
?>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
