<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>lendit</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="logo.png" id="logo" alt="Logo" width="" height="70"/></a>
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">home</a>
          <a class="blog-nav-item" href="#">profile</a>
          <a class="blog-nav-item active" href="#">about</a>
          <a class="btn btn-default" type="button" href="#">Login</a>
        </nav>
      </div>
    </div>
    
    <!-- HEADER ENDS -->
    
    <div class="container">
      <div class="row space">
        <div class="col-sm-3 blog-sidebar">
          <form role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
          <div class="sidebar-module">
            <h4>Categories</h4>
            <div class="checkbox">
              <label><input type="checkbox" value="">Bikes</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="">Electronics</label>
            </div>
            <div class="checkbox disabled">
              <label><input type="checkbox" value="" disabled>Houseware</label>
            </div>
            <div class="checkbox disabled">
              <label><input type="checkbox" value="" disabled>Tools</label>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>Social media</h4>
            <ol class="list-unstyled">
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

        <div class="col-sm-8 col-sm-offset-1 blog-main">
        
        <h1>Mark Hansen</h1>
        <table>
        <tr>
        <td>  <?php	
$sql = "SELECT * FROM forhandler;";
$result = mysqli_query($dbc, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

		
		echo "<div class='webbox'>
		<a href='". $row["link"] ."'>
		<div class='webboxbillede' style='background: url(billeder/forhandler/". $row["billede"] .".png) no-repeat; background-size:cover;'></div>
	
	" .$row["marke"].  "</a></div>";
		
	}
	}
 
?></td>
        </tr>
        </table>
        
        
          </div><!-- /.blog-post -->
          
        

        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>
        <a href="#">lendit 2016</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
