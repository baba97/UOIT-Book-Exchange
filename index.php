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
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
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


<div class="Home" style="padding-top:30px;">

  <div class=page-header>
  <h3>Welcome</h3>
  </div>

<div class="Welcome">
  <div class="row">

  <div class="col-xs-6">
    <div class="imageWelcome">
      <img src="images/books1.jpeg" id="image1"></img>
    </div>
  </div>

  <div class="col-xs-6">
    <div class="textWelcome">
      <h4>UOIT's Used Book Exchange</h4>
      <p>This website will allow you to upload information about
        books you wish to sell to other students. You can fill out the form to
         add a book <strong><a href="addBook.html">here</a></strong>.
         To upload information about your book you will need <em>atleast</em>
         the Title, Author, Condition, Faculties it belongs to, Price Range, Comments and Contact Info.</p>
       </div>
  </div>
</div>
</div>


<div class="section2" style="float:left;">
<div class=page-header>
<h3>Recent Uploads</h3>
</div>

<div class="row show-grid" id="recentRow">
<div class="col-lg-12">
  <div class="row">

  <div class="col-md-3" style="padding-bottom:10px;">
    <div class="panel panel-default" id="recent">
  <div class="panel-heading"><p class="text-center">Name of Book</p></div>
  <div class="panel-body">
      <img id="recentP" src="images/books1.jpeg" class="img-responsive center-block"></img>
  </div>
</div>
  </div>

  <div class="col-md-3"style="padding-bottom:10px;">
    <div class="panel panel-default" id="recent">
  <div class="panel-heading"><p class="text-center">Name of Book</p></div>
  <div class="panel-body">
    <img id="recentP" src="images/books1.jpeg" class="img-responsive center-block"></img>
  </div>
</div>
  </div>

  <div class="col-md-3"style="padding-bottom:10px;">
    <div class="panel panel-default" id="recent">
  <div class="panel-heading"><p class="text-center">Name of Book</p></div>
  <div class="panel-body">
    <img id="recentP" src="images/books1.jpeg" class="img-responsive center-block"></img>
  </div>
</div>
  </div>

  <div class="col-md-3"style="padding-bottom:10px;">
    <div class="panel panel-default" id="recent">
  <div class="panel-heading"><p class="text-center">Name of Book</p></div>
  <div class="panel-body">
    <img id="recentP" src="images/books1.jpeg" class="img-responsive center-block"></img>
  </div>
</div>
  </div>
</div>
</div>

</div>
<div class="Promo">

  <div class="row">
  <div class="col-xs-6">
    <div class="textPromo">
      <h4>Want your book to show here?</h4>
        <p>Make use of our <strong>Recent Upload</strong> section.
          This section displays the latest books uploaded to the website.
          To ensure your books shows up here as well, make sure to follow the checklist
          when uploading your books!</p>
    </div>
  </div>

  <div class="col-xs-6">
    <div class="listPromo">
    <ol type="a">
      <li><span class="list">Title/Author</span></li>
      <li><span class="list">Comments</span></li>
      <li><span class="list">Contact Info</span></li>
      <li><span class="list">Price Range</span></li>
      <li><span class="list">Faculties</span></li>
    </ol>
    </div>
  </div>

</div>

</div>
</div>

<div class="section4">
<div class=page-header>
<h3>Sponsors</h3>
</div>

  <div class="row" style="margin:auto;">

    <div class="col-xs-6">
      <iframe class="textPromo"width="500" height="315" src="https://www.youtube.com/embed/ueqbTJhmXH4" frameborder="0"
      allowfullscreen></iframe>
    </div>
      <div class="listPromo">
    <div class="col-xs-6">Do you want to be one of our sponsors?</div>
  </div>

    <div class="col-xs-6"></div>
    <div class="listPromo">
    <div class="col-xs-6">
      <ul>
        <li><span class="list">Lorem ipsum dolor</span></li>
        <li><span class="list">Lorem ipsum dolor</span></li>
        <li><span class="list">Lorem ipsum dolor</span></li>
        <li><span class="list">Lorem ipsum dolor</span></li>
        <li><span class="list">Lorem ipsum dolor</span></li>
      </ul></div>
    </div>
  </div>

</div>


<div class="section5">
<div class=page-header>
<h3>Books</h3>
</div>
<button style="float:right;"
class="btn btn-primary" onclick="location.href='addBook.php'"> Add  </button>
</div>


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

// check if the query succeeded/
if (!$result) {
    die('There was an error running the query[' . $db->error . ']');
}

echo "<table class=table table-striped table-hover >
<thead><tr><th>Title</th><th>Author(s)</th><th>Price Range</th><th>Contact</th>
</tr></thread>"; // start a table tag in the HTML


while($row = $result->fetch_assoc()) {
   //Creates a loop to loop through results
echo "<tr>
<td>" . $row['title'] . "</td>
<td>" . $row['author'] ."</td>
<td>" . $row['priceRange'] . "</td>
<td>
<form id='viewForm' method='post' action='contact.php'>
<input type='hidden' name='view' value=".$row['book_id']."> </input>
<input type='submit' name='submit' value='View' class='btn btn-default'>  </input>
</form>
</td>
</tr>";  //$row['index'] the index here is a field name
  // print_r (array_values($array)[$counter]);
}
echo "</table>"; //Close the table in HTML

// Close the database connection
$result->free();
$db->close();

?>
