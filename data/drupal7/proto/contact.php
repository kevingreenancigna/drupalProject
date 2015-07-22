<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Contact Us</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-right ">
<!-- top-nav starts -->
         <div id="top-nav" class="visible-sm visible-md visible-lg">
           <?php include "include-top-nav.php";?>
         </div>
<!-- top-nav ends -->
    <div class=" visible-xs">
<!-- navbar2 starts -->
     <div class="navbar navbar-default" role="navigation">
       <?php include "include-navbar2.php";?>
     </div>
<!-- navbar2 ends -->
<!-- sidebar starts -->
      <div class="col-xs-6 col-sm-3 sidebar-offcanvas showhide navbar-collapse" id="sidebar" role="navigation" >
        <?php include "include-sidebar.php";?>
      </div>
<!-- sidebar ends -->
    </div>
<!-- content starts -->
    <div class="col-xs-12 col-sm-12" id="content">
      <div class="row">
        <div class="jumbotron" id="shallow-banner">
          <div class="container">
            <div class="col-12 col-md-12 col-lg-8">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="col-12 col-sm-12 col-lg-8 left-col">
            <h4>If for any reason you need to contact us, you can reach us via the following methods: Remember to tell us your name and policy number if you are a customer.</h4>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title" id="panel-title">Main switchboard</h3>
            </div>
            <div class="panel-body info">
              <p><strong>+ 44 (0) 1475 492222</strong></p>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title" id="panel-title">Sales Team</h3>
            </div>
            <div class="panel-body info">
              <p><strong>Phone:</strong><p/>
                <p>+44 (0) 1475 492119 (Mon-Fri 8am-8pm GMT)</p>
                <p><strong>Email:</strong></p> 
                <p><a href="#">Cignaglobal_sales.team@cigna.com</a></p>
                <p><strong>Address:</strong> Sales Manager, Cigna Global Health Options, The Grosvenor Building, 72 Gordon Street, Glasgow, Scotland G13RS</p>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title" id="panel-title">Intermediary Team</h3>
            </div>
            <div class="panel-body info">
              <div class="row">
                <div class="col-md-6">
                    <p><strong class="text-warning">In the USA</strong></p>
                    <p><strong>Phone:</strong> 877.539.6296</p>
                </div>
                <div class="col-md-6">
                    <p><strong class="text-warning">Rest of world</strong></p>
                    <p><strong>Phone:</strong> +44 (0) 1475 788 682</p>
                </div>
              </div>
              <div class="col-md-12">
                  <p><strong>Email:</strong> <a href="#">cgi@cigna.com</a></p>
                <p><strong>Address:</strong> Head of Customer Service, 1 Knowe Road, Greenock, Scotland, PA15 4RJ</p>
              </div>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title" id="panel-title">Customer Care Team/Treatment Approval Team 24/7 helpline</h3>
            </div>
            <div class="panel-body info">
              <div class="row">
                <div class="col-md-6">
                    <p><strong class="text-warning">Worldwide</strong></p>
                    <p><strong>Phone:</strong></p> 
                    <p>+44 (0) 1475 788182 (International)<br/> 
                        1 800 835 7677 (US toll-free)</p>
                    <p><strong>Email:</strong></p>
                    <p><a href="#">Cignaglobal_customer.care@cigna.com</a></p>
                  <p><strong class="text-warning">In Singapore (Toll free)</strong></p>
                    <p><strong>Phone:</strong></p>
                    <p>800-96-112. When prompted, dial Cigna’s calling card number 808-672-7493-6554 (no PIN is required). Then dial the toll-free number (0) 800 835 76771.</p>
                    <p><strong>Address: </strong></p> 
                    <p>Cigna Global Health Options, Cigna Europe Insurance Company, S.A.-N.V. (Singapore Branch), 152 Beach Road, #26-05 The Gateway East, Singapore 189721</p>
                </div>
                <div class="col-md-6">
                  <p><strong class="text-warning">In Hong Kong (Toll free)</strong>
                    <p><strong>Phone:</strong></p> 
                    <p>8000-112-122 (Singtel) or 8000-010-002 (Star Hub). When prompted, dial Cigna’s calling card number 808-672-7493-6554 (no PIN is required). Then dial the toll-free number (0) 800 835 76771.</p>
                    <p><strong>Address: </strong></p>
                    <p>Cigna Worldwide Life Insurance Company25F, Sunning Plaza, Causeway Bay, Hong Kong</p>
                </div>
                
              </div>
            </div>
          </div>
            </div>
              <?php include "include-right-col-4.php";?>
          </div>
        </div>
      </div>
    </div>
      <!-- content ends -->
      <!-- footer starts -->
      <div id="footer" class="container-fluid">
          <?php include "include-footer.php";?>
      </div>
      <!-- footer starts -->
  </div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/responsive.js"></script>
</body>
</html>
