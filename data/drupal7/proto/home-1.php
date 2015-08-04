<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Home</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/theme.css" rel="stylesheet">
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
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas showhide navbar-collapse" id="sidebar" role="navigation" >
      <?php include "include-sidebar.php";?>
    </div>
    <!-- sidebar ends --> 
  </div>
  <!-- content starts -->
  <div class="col-xs-12 col-sm-12" id="content">
    <div class="row">
      <?php include "include-fat-banner-3.php";?>
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="col-lg-12 narrow-left-col bg-primary">
                <div class="list-group">
                  <h2>Our Plans </h2>
                  <h4>At Cigna Global we offer you the reassurance of comprehensive core cover, and the flexibility of adding the extra benefits as you want.</h4>
                  <a href="#" class="list-group-item">Our Plans Explained<span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></a> <a href="#" class="list-group-item">View All Our Plans<span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></a> </div>
                <p class="text-center"><a class="btn btn-warning btn-lg center-block" href="#" role="button">Get a Quote</a> </p>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-8 right-col">
              <div class="bg-primary"> 
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                      <h4>Core Cover</h4></a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h4>Optional Benefits</h4>
</a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                      <h4>International Medical Insurance</h4>
                      <h3>Our core policies cover for inpatient, day case surgery and accommodation costs. In addition, essential cover for cancer and psychiatric care are provided for. </h3>
                      <div class="col-md-11">
                        <p>Three levels of essential core cover, Silver, Gold and Platinum to choose from.</p>
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-success">More</button>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-md-6">
                            <h4>International Outpatient</h4>
                            <p>additional and more extensive outpatient cover that protects you for any treatments that don't require a hospital stay.</p>
                            <ul class="list-unstyled">
                                <li><a href="#">Learn More</a> <span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></li>
                            </ul>
                            <h4>International Medical Evacuation</h4>
                            <p>peace of mind cover for transport and repatriation costs for you and a family member if you need treatment in another country.</p>
                            <ul class="list-unstyled">
                                <li><a href="#">Learn More</a> <span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>International Health and Wellbeing</h4>
                            <p>allows you to manage your health in your own way with cover for screenings, tests, examinations and other wellbeing activities.</p>
                            <ul class="list-unstyled">
                                <li><a href="#">Learn More</a> <span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></li>
                            </ul>
                            <h4>International Vision and Dental</h4>
                            <p>complete cover for all your vision and dental costs.</p>
                            <ul class="list-unstyled">
                                <li><a href="#">Learn More</a> <span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></li>
                            </ul>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="icon-box" class="container">
          <div class="col-lg-12 bg-info">
            <div class="col-md-3 text-center info"> <img src="images/apply-online.png" height="85" alt="">
              <h4>Apply <br>
                Online</h4>
            </div>
            <div class="col-md-2 text-center info"> <img src="images/customer-area.png" height="85" alt="">
              <h4>Customer <br>
                Area</h4>
            </div>
            <div class="col-md-2 text-center info"> <img src="images/country-guides.png" height="85" alt="">
              <h4>Country <br>
                Guides</h4>
            </div>
            <div class="col-md-2 text-center info"> <img src="images/health-insurance.png" height="85" alt="">
              <h4>Health insurance Buying Guide</h4>
            </div>
            <div class="col-md-3 text-center info"> <img src="images/contact-us.png" height="85" alt="">
              <h4>Contact <br>
                Us</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="col-lg-4">
          <div class="row">
            <h2>4.2 <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-o text-warning"></i></h2>
            <div class="col-md-11 info" style="height: 200px;"> </div>
          </div>
          <div class="row">
            <p>33 reviews in the past 12 months</p>
            <p>Highlighted reviews</p>
            <button type="button" class="btn btn-primary">More Reviews</button>
          </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <h4 class="text-primary pull-left">Customer Reviews</h4>
                <img src="images/reevoo-logo.png" class="pull-right" width="130" height="26" alt=""/> </div>
              <div class="row"> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i>
                <p>It's a very expensive product but you buy it knowing that you will receive quality service.</p>
                <p>Written on January 26, 2015</p>
              </div>
              <div class="row"> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i>
                <p>As stated above, everything so far has been excellent. Provided I maintain the plan, it follows that there may very well be a claim one day. At that time, we will discover exactyl how good the policy is. However, I have no reason to believe it will be other than 'As sold' which is why we decided to proceed with the purchase. It may not be possible as this is 'Health' insurance policy and not a 'Life' insurance policy, but I might suggest that the inclusion of an Optional 'Death Benefit' would have been a very good selling point. Of course, this would require an additional premium but being 'Optional' the purchaser would have ther choice to include it or not.</p>
                <p>Written on January 28, 2015</p>
              </div>
            </div>
          </div>
        </div>
        <div class="jumbotron" id="inter-health" >
          <div class="row">
            <div class="container">
              <div id="text" class="col-12 col-md-12 col-lg-8">
              <h2>What is International Health Insurance?</h2>
              <p>The cost of healthcare abroad can be extremely expensive and without a comprehensive expatriate health plan in place, you may find that you are out of pocket if you require any medical treatment. Consider what would happen if you were working abroad and required an emergency procedure or needed to visit the doctor. Without overseas health insurance, you may be liable for any expenses related to the treatment you received. A worldwide medical plan will give you peace of mind and confidence that your health and wellbeing are covered when living and working in a foreign country.</p>
              <button type="button" class="btn btn-success">More</button>
              </div>
            </div>
          </div>
        </div>
        <div class="jumbotron" id="expat-banner">
          <div class="row">
            <div class="container">
              <div class="col-12 col-md-12 col-lg-8">
              <h1 class="text-center">Expat Resources</h1>
              <div class="col-md-4">
                <h4>Country Guide</h4>
                <div class="row">
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                      <li><a href="#"> United States </a></li>
                      <li><a href="#"> United Kingdom </a></li>
                      <li><a href="#"> France </a></li>
                      <li><a href="#"> United Arab Emirates</a></li>
                      <li><a href="#"> Australia </a></li>
                      <li><a href="#"> New Zealand </a></li>
                      <li><a href="#"> Germany</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                      <li><a href="#"> United States </a></li>
                      <li><a href="#"> United Kingdom </a></li>
                      <li><a href="#"> France </a></li>
                      <li><a href="#"> United Arab Emirates</a></li>
                      <li><a href="#"> Australia </a></li>
                      <li><a href="#"> New Zealand </a></li>
                      <li><a href="#"> Germany</a></li>
                    </ul>
                  </div>
                </div>
                <button type="button" class="btn btn-primary">View All Guides</button>
              </div>
              <div class="col-md-4">
                <h4>Resource centre</h4>
                <p>Moving abroad can be a daunting experience with everything from taxes to housing and healthcare being different from country to country.</p>
                <p>We have put together a list of resources to help you with your move abroad and answer some of the questions we get from others going through this experience. Featuring everything from country guides to visa and immigration information we have everything you need to help you adjust to your new life.</p>
                <button type="button" class="btn btn-primary">More information</button>
              </div>
              <div class="col-md-4">
                <h4>Find an international school</h4>
                <p>International schools are designed to serve the families of people living abroad and teach an international curriculum. These schools support students who are not nationals of the host country and include the children of expatriates on work placement, international organisations, embassies and missionaries.</p>
                <p>Our search tool provides information on international schools in different countries including the nationality, curriculum, age range and general school information.</p>
                <button type="button" class="btn btn-primary">Find a School</button>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-4">
                <h3 class="col-sm-12 col-md-4 col-lg-12"><span class="fa fa-phone" aria-hidden="true"> </span> Give us a call</h3>
                <p class="col-sm-12 col-md-4 col-lg-12">Inside the US: <strong>877.539.6265</strong><br/>
                  Outside the US: <strong>+44(0)1475 779161</strong></p>
                <p class="col-sm-12 col-md-4 col-lg-12"><a class="btn btn-primary" href="#">Or Contact Us</a></p>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <h3 class="col-sm-12 col-md-4 col-lg-12"><span class="fa fa-phone" aria-hidden="true"> </span><sup class="fa fa-reply small" aria-hidden="true"> </sup> Want us to call you back?</h3>
                <p class="col-sm-12 col-md-4 col-lg-12">Send us your phone number and one of our staff will call you back as soon as possible.</p>
                <p class="col-sm-12 col-md-4 col-lg-12"><a class="btn btn-primary" href="#">Request Callback</a></p>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <h3 class="col-sm-12 col-md-4 col-lg-12"><span class="glyphicon glyphicon-send" aria-hidden="true"> </span> Send us a message</h3>
                <p class="col-sm-12 col-md-4 col-lg-12">For any queries or questions please do not hestitate to send us a message.</p>
                <p class="col-sm-12 col-md-4 col-lg-12"><a class="btn btn-primary" href="#">Send Message</a></p>
              </div>
            </div>
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
<script>
    
    $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)  
    
    </script>
</body>
</html>