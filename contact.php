<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UOIT Book Exchange</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* YOUR CSS HERE */
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- YOUR CONTENT HERE -->

    <nav class="navbar navbar-fixed-top" style="background-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color:#2e6da4;" href="index.php#Home">UOIT</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-expanded="false">Faculty<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Buisness & IT</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Engineering</a></li>
            <li><a href="#">Nuclear & Energy</a></li>
            <li><a href="#">Health Science</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Social Science</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
        <!-- CHANGE TO SEARCH ICON -->
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="addBook.php">Add a Book</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
</body>
</html>

<?php
$db = new mysqli('localhost', 'root', '', 'lab');

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "" . '<br />';
}

// Query to return data from your database
$result = $db->query("SELECT * FROM library");

// check if the query succeeded
if (!$result) {
    die('There was an error running the query[' . $db->error . ']');
}

echo "<table class=table table-striped table-hover>
<thead><tr><th>Title</th><th>Author(s)</th><th>Price Range</th><th>Contact</th>
</tr></thread>"; // start a table tag in the HTML

while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
echo "<tr><td>" . $row['title'] . "</td><td>" . $row['author'] .
"</td><td>" . $row['priceRange'] . "</td>
<td><button class=btn btn-primary onclick=location.href='contact.php';
>View</button></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML


// Close the database connection
$result->free();
$db->close();

?>
