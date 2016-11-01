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


        <nav class="navbar navbar-fixed-top" style="background-color:white;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#2e6da4;" href="index.php#Home">UOIT</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li><a href="index.php#Home">Home<span class="sr-only">(current)</span></a></li>
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
            <li class="active"><a href="addBook.php">Add a Book</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- YOUR CONTENT HERE -->
<div class="section3" style="float:left;width:100%;padding-top:30px;">
  <div class=page-header>
  <h3>Add Book</h3>
  </div>

  <div id="form">
    <form id="test" class="form-horizontal" method="post" action="addBook.php">
  <fieldset>

    <div class=page-header>
    <h5>Book Info</h5>
    </div>

    <div class="form-group">
      <label for="title" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="title" name="title" placeholder="Title of Book">
      </div>
    </div>

    <div class="form-group">
      <label for="author" class="col-lg-2 control-label">Author</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="author" name="author" placeholder="Author">
      </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Faculties</label>
      <div class="col-lg-10">

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FBIT" value="Buisness & IT"> Buisness & IT
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FE" value="Education"> Education
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FEAS" value="Engineering"> Engineering
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FESNS" value="Nuclear and Energy"> Nuclear and Energy
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FHS" value="Health Science"> Health Science
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FS" value="Science"> Science
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="FSSH" value="Social Science"> Social Science
          </label>
        </div>

      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Condition</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="mint" value="Mint">
            Mint
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="vgood" value="Very Good">
            Very Good
          </label>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="fair" value="Fair">
              Fair
            </label>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="poor" value="Poor">
                Poor
              </label>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-lg-2 control-label">Price Range</label>
  <div class="col-lg-10">
    <select class="form-control" name="priceRange">
      <option value="" selected disabled>Select Price Range</option>
        <option value="Less than $50">Less than $50</option>
        <option value="$50 - $100">$50 - $100 </option>
        <option value="$100 -$200">$100-$200</option>
        <option value="$200+">$200+</option>
      </select>
</div>
</div>

<div class="form-group">
  <label class="col-lg-2 control-label">Comments about Book</label>
  <div class="col-lg-10">
  <label for="comment"></label>
  <textarea class="form-control" rows="5" name="comments"></textarea>
</div>
</div>

<!-- <div class="form-group">
  <label class="col-lg-2 control-label">Picture of the Book</label>
  <div class="col-lg-10">
  <label for="pics"></label>
  <input type="file" name="fileToUpload" id="bookPic">
</div>
</div> -->


<br>

    <div class=page-header>
    <h5>Contact Info</h5>
    </div>

    <div class="form-group">
      <label for="nameF" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nameF" placeholder="First Name">
      </div>
    </div>

    <div class="form-group">
      <label for="nameL" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nameL" placeholder="Last Name">
      </div>
    </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" name="password" placeholder="Password" />
        </div>
    </div>

<br>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Clear</button>
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
            </div>

  </fieldset>
</form>

  </div>

</div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/formValidation.min.js"></script>
      <script src="js/framework/bootstrap.min.js"></script>
      <script src="js/raphael-min.js"></script>
      <script src="js/morris.min.js"></script>

      <script>

      $(document).ready(function() {

  $('#test').formValidation({
      framework: 'bootstrap',
      icon: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
          title: {
              validators: {
                  notEmpty: {
                      message: 'The Title of the Book is required'
                  },
              }
          },
          author: {
              validators: {
                  notEmpty: {
                      message: 'The Author of the Book is required'
                  },
              }
          },
          'checkbox': {
              validators: {
                  notEmpty: {
                      message: 'Atleast one Faculty must be specified'
                  }
              }
          },

          'optionsRadios': {
              validators: {
                  notEmpty: {
                      message: 'The Condition of the book must be specified'
                  }
              }
          },

          priceRange: {
              validators: {
                  notEmpty: {
                      message: 'The price range must be specified'
                  },
              }
          },

          comments: {
                  validators: {
                      notEmpty: {
                          message: 'Comments must be provided'
                      },
                      stringLength: {
                          min: 15,
                          max: 60,
                          message: 'Comment is too short/long'
                      },
                  }
              },

              nameF: {
                validators: {
                    notEmpty: {
                        message: 'Contact name is required'
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0]+$/,
                        message: 'Illegal Name'
                    }
                }
            },

            nameL: {
              validators: {
                  notEmpty: {
                      message: 'Contact name is required'
                  },

                  regexp: {
                      regexp: /^[a-zA-Z0]+$/,
                      message: 'Illegal Name'
                  }
              }
          },

          email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                }
            },
      }
  });
});

  </script>

    </body>

  </html>

  <?php
  $db = new mysqli('localhost', 'root', '', 'lab');

  // TODO You must process the POST data from the form and then set the variables
  // below to be inserted in the database

  // You should see sucess if you can connect
  if($db->connect_errno > 0){
      echo "ERROR";
      die('Unable to connect to database [' . $db->connect_error . ']');
  }
  else {
      echo "";
  }

  // Insert sample data into the database
  $sql = $db->prepare("INSERT INTO library(title, author, conditions, priceRange, " .
                      "comments, nameF, nameL, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

  // Bind the parameters to the SQL query above, s is a string i is an integer
  $sql->bind_param("ssssssss", $_POST['title'], $_POST['author'],
  $_POST['optionsRadios'], $_POST['priceRange'], $_POST['comments'], $_POST['nameF'], $_POST['nameL'], $_POST['email']);
  // Execute the query, inserting the data
  $sql->execute();

  $sql = $db->prepare("INSERT INTO faculties(FBIT, FE, FEAS, FESNS, " .
                      "FHS, FS, FSSH) VALUES (?, ?, ?, ?, ?, ?, ?)");

  $FBIT = isset($_POST['FBIT'])?true:false;
  $FE = isset($_POST['FE'])?true:false;
  $FEAS = isset($_POST['FEAS'])?true:false;
  $FESNS = isset($_POST['FESNS'])?true:false;
  $FHS = isset($_POST['FHS'])?true:false;
  $FS = isset($_POST['FS'])?true:false;
  $FSSH = isset($_POST['FSSH'])?true:false;

  $sql->bind_param("iiiiiii", $FBIT, $FE, $FEAS, $FESNS, $FHS, $FS, $FSSH);
  $sql->execute();

  // Close the connection
  $sql->close();
  $db->close();

  ?>
