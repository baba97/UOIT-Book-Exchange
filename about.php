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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

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
            <li><a href="addBook.php">Add a Book</a></li>
            <li class="active"><a href="about.php">About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- YOUR CONTENT HERE -->
<div class="sectionAbout" style="float:left;width:100%;padding-top:30px;">
  <div class=page-header>
  <h3>About Us</h3>
  </div>

                  <div class="row" id="aboutTop" style="margin:auto;">
                  <div class="col-md-6">
                    <div id="shivDonut" style="height:250px;">
                      <h4 style="text-align:center;">Shiv Yoganathan</h4>
                      <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam massa risus, molestie in aliquam eu, maximus et quam.
                        is mi, dictum viverra neque. Donec facilisis est nunc, at rhoncus odio bibendum et.</p>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div id="aliDonut" style="height:250px;">
                      <h4 style="text-align:center;">Ali Ahmadi</h4>
                      <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam massa risus, molestie in aliquam eu, maximus et quam.
                        is mi, dictum viverra neque. Donec facilisis est nunc, at rhoncus odio bibendum et.</p>
                    </div>
                  </div>

              </div>


              <div class="row top-buffer" id="aboutBot" style="margin:auto;">
              <div class="col-md-6">
                    <div id="sosoDonut" style="height:250px;">
                      <h4 style="text-align:center;">Musadiq Soso</h4>
                      <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam massa risus, molestie in aliquam eu, maximus et quam.
                        is mi, dictum viverra neque. Donec facilisis est nunc, at rhoncus odio bibendum et.</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div id="ashanDonut" style="height:250px;">
                      <h4 style="text-align:center;">Ashan Pathmanathan</h4>
                      <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam massa risus, molestie in aliquam eu, maximus et quam.
                        is mi, dictum viverra neque. Donec facilisis est nunc, at rhoncus odio bibendum et.</p>
                    </div>
                  </div>
                </div>

                <div class=page-header>
                <h3>Website Usage</h3>
                </div>

                <div class="row" id="usage" style="margin:auto;">
                <div class="col-md-2 col-md-offset-3">
                  <div id="usagePlot"></div>
                  <div>
                    <h4 style="text-align:center;">Website Visiters</h4>
                    <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Nam massa risus, molestie in aliquam eu, maximus et quam.
                      is mi, dictum viverra neque. Donec facilisis est nunc, at rhoncus odio bibendum et.</p>
                  </div>
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
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

      <script>
      Morris.Donut({
  element: 'shivDonut',
  data: [
    {label: "Java", value: 50},
    {label: "Android", value: 30},
    {label: "Web", value: 20}
  ]
});

Morris.Donut({
element: 'aliDonut',
data: [
{label: "Java", value: 50},
{label: "Android", value: 30},
{label: "Web", value: 20}
]
});

Morris.Donut({
element: 'sosoDonut',
data: [
{label: "Java", value: 50},
{label: "Android", value: 30},
{label: "Web", value: 20}
]
});

Morris.Donut({
element: 'ashanDonut',
data: [
{label: "Java", value: 50},
{label: "Android", value: 30},
{label: "Web", value: 20}
]
});

Morris.Line({
  element: 'usagePlot',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
      </script>

    </body>

  </html>
