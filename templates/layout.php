<!-- templates/layout.php -->
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="http://www.benchlamp.co.uk/mvc/templates/style.css">
    </head>
    <body>
<script>console.log("script in layout.php is running")</script>
	  <script src="https://code.jquery.com/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	  <div class="container">
	  <div class="jumbotron">
		    <h1>Benchmark</h1>
		      <hr />
		    <h4>Investigate. Participate.</h4>
	  </div> <!-- /jumbotron -->
	    <h5 class="login-details">logged in as <?php echo $_SESSION["userName"]; ?></h5> 
	 	<hr />

         <?= $content ?> 

	  </div> <!-- /container-->
    </body>
</html>
