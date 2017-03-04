<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<title>Health Wellness Site</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>					
					</button>

					<a href="index.html" class="navbar-brand" id="brand">Health Wellness Site</a>
				</div>

			<div class="navbar-collapse collapse pull-right">
				<ul class="nav navbar-nav">
					<li class="active nav-tabs margin-custom"><a href="submit_display.html"><span class="glyphicon glyphicon-arrow-right">&nbsp;Quotes</span></a></li>
				</ul>			
			</div>
		</nav>

<div class="upload_quote">
	<button type="button" class="btn btn-info btn-lg center-block" data-toggle="modal" data-target="#myModal">Submit a Quote</button>
	<div id="submit"></div>
</div>
<br />
<div class="container back-check">
	<div class="row">
		<div class="col-sm-10 text-center">
			<?php
				$fh = fopen('Quotes.txt', 'r');
				while ($line = fgets($fh)) {
					echo "<p> {$line} </p>";
					echo "<hr />";
				}
			fclose($fh);
			?>
		</div>
	</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    	<div class="modal-body">
	      <form method="post">
	      		<input type="text" name="quote" placeholder="Enter Quote here" size="60" />
	      		<button name="submit">Submit</button>
	      </form>
      </div>
    </div>

  </div>
</div>


	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<?php

		if (isset($_POST['submit'])) {
			$content = $_POST['quote'];
			file_put_contents('Quotes.txt', $content.PHP_EOL, FILE_APPEND | LOCK_EX);
		}

	?>

	</body>
	</html>