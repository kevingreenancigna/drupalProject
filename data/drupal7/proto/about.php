<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>About Cigna</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
  <div class="row row-offcanvas row-offcanvas-right active">
<!-- top-nav starts -->
         <div id="top-nav" class="visible-lg">
           <?php include "include-top-nav.php";?>
         </div>
<!-- top-nav ends -->
    <div class="visible-xs visible-sm visible-md">
<!-- navbar2 starts -->
     <div class="navbar navbar-default" role="navigation">
       <?php include "include-navbar2.php";?>
     </div>
<!-- navbar2 ends -->
<!-- sidebar starts -->
      <div class="sidebar-offcanvas showhide navbar-collapse" id="sidebar" role="navigation" >
        <?php include "include-sidebar-3.php";?>
      </div>
<!-- sidebar ends -->
    </div>
<!-- content starts -->
    <div class="col-xs-12 col-sm-12" id="content">
      <div class="row">

        <?php include "include-fat-banner-1.php";?>
        
        <div class="row">
          <div class="container">
            <div class="col-12 col-sm-12 col-lg-8 left-col">
              <h2>For the people</h2>
              <p>Cigna is one of the largest health service organisations in the United States. Our mission is to help the people we serve improve their health, wellbeing and sense of security. Cigna operating subsidiaries provide an integrated suite of medical, dental, behavioural health, pharmacy and vision care benefits, as well as group and individual life, accident and disability insurance, to millions of people throughout the United States and around the world. </p>
              <p>From our roots in the US cities of Philadelphia, Pennsylvania and Hartford, Connecticut, Cigna has grown to become a global organisation. Today, we have 60 million customer relationships across the world and support this with a worldwide staff of 30,000 employees.</p>
              <div class="jumbotron" id="smiling-people">
                <h3>You are covered wherever you go</h3>
                <p>Cigna International provides access to superior quality healthcare and related financial protection programmes to employers, affinity groups and individuals around the globe.</p>
              </div>
              <h2>Leaders in Global Healthcare Benefits</h2>
              <p>With more than 30 years international experience, Cigna is the leader in providing global healthcare benefits to multi-national businesses. In fact, we cover over 700,000 expatriates for more than 2,000 clients. </p>
              <h4>We offer:</h4>
              <div class="clearfix">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <ul class="fa-ul">
                    <li><i class="fa-li fa fa-check"></i>Individual international healthcare plans</li>
                    <li><i class="fa-li fa fa-check"></i>Corporate international plans</li>
                    <li><i class="fa-li fa fa-check"></i>Corporate travel plan</li>
                    <li><i class="fa-li fa fa-check"></i>Dental and vision plans</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <ul class="fa-ul">
                    <li><i class="fa-li fa fa-check"></i>International employee assistance programme</li>
                    <li><i class="fa-li fa fa-check"></i>Continuation options</li>
                    <li><i class="fa-li fa fa-check"></i>Wellbeing programmes</li>
                  </ul>
                </div>
              </div>
              <h2>What is International Health Insurance?</h2>
              <p>Expatriate health insurance is designed for those who are living and working abroad.  It is designed to give you and your family access to the best healthcare possible, wherever you are in the world.</p>
                            <p>The cost of healthcare abroad can be extremely expensive and without a comprehensive expatriate health plan in place, you may find that you are out of pocket if you require any medical treatment. Consider what would happen if you were working abroad and required an emergency procedure or needed to visit the doctor. Without overseas health insurance, you may be liable for any expenses related to the treatment you received. A worldwide medical plan will give you peace of mind and confidence that your health and wellbeing are covered when living and working in a foreign country.</p>
              <p><a class="btn btn-success btn-lg" href="#">More</a></p>
            </div>
            <?php include "include-right-col-1.php";?>

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
<!--<script src="js/responsive.js"></script>-->
</body>
</html>