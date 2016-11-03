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
      <a class="navbar-brand" style="color:#2e6da4;" href="index.php">UOIT</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="index.php#Home">Home<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-expanded="false">Faculty<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="fbit.php">Buisness & IT</a></li>
            <li><a href="fe.php">Education</a></li>
            <li><a href="feas.php">Engineering</a></li>
            <li><a href="fesns.php">Nuclear & Energy</a></li>
            <li><a href="fhs.php">Health Science</a></li>
            <li><a href="fs.php">Science</a></li>
            <li><a href="fssh.php">Social Science</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left" role="search" method="post" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" name="searchBar" placeholder="Search">
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

<div class="Home" style="padding-top:30px;">

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

if(!isset($_POST['view'])) {
    echo " No valid Post ";
}
 else
{

if (isset($_POST['view']))
{
   $book_id = $_POST['view'];

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
   $result = $db->query("SELECT * FROM library WHERE book_id=".$book_id);


   // check if the query succeeded
   if (!$result) {
       die('There was an error running the query[' . $db->error . ']');
   }

  $row = $result->fetch_assoc();

  //Applicable Faculties
      $facult="";
      if($row['FBIT']==1){$facult.="Buisness and IT, ";}
      if($row['FE']==1){$facult.="Education, ";}
      if($row['FEAS']==1){$facult.="Engineering, ";}
      if($row['FESNS']==1){$facult.="Nuclear and Energy, ";}
      if($row['FHS']==1){$facult.="Health Science, ";}
      if($row['FS']==1){$facult.="Science, ";}
      if($row['FSSH']==1){$facult.="Social Science, ";}

echo "
<ul class='nav nav-tabs' style='padding:15px;'>
  <li class='active'> <a href='#home' data-toggle='tab' aria-expanded='true'>Book Info</a></li>
  <li class=''>       <a href='#profile' data-toggle='tab' aria-expanded='false'>Contact Info</a></li>
</ul>

  <div id='myTabContent' class='tab-content'>

  <div class='tab-pane fade active in' id='home'>
  <div class='list-group'>
    <a href='#' class='list-group-item active'>
    <b>Title</b>: ". $row['title']." <br>
    <b>Author</b>: " .$row['author']. "
    </a>

    <a href='#' class='list-group-item'>
    <b>Faculties</b>: ".$facult."
    </a>

    <a href='#' class='list-group-item'>
    <b>Condition</b>: ".$row['conditions']."
    </a>

    <a href='#' class='list-group-item'>
    <b>Price Range</b>: ".$row['priceRange']."
    </a>

    <a href='#' class='list-group-item'>
    <b>Comments</b>: ".$row['comments']."
    </a>
  </div>
  </div>

  <div class='tab-pane fade' id='profile'>
  <div class='list-group'>

    <a href='#' class='list-group-item active'>
    <b>Name</b>: ". $row['nameF']." ".$row['nameL']. " <br>
    </a>

    <a href='#' class='list-group-item'>
    <b>Email</b>: ".$row['email']."
    </a>

  </div>
</div>

</div>
";

   // Close the database connection
   $result->free();
   $db->close();


}} ?>
