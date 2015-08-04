<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Home</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/responsive.js"></script> 
<script src="js/includes.js"></script>
<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-right active"> 
    <!-- top-nav starts -->
    <div id="top-nav" class="visible-lg"></div>
    <!-- top-nav ends -->
    <div class="visible-xs visible-sm visible-md">
      <!-- navbar2 starts -->
      <div class="navbar navbar-default" role="navigation"></div>
      <!-- navbar2 ends --> 
      <!-- sidebar starts -->
      <div class="col-xs-6 col-sm-3 sidebar-offcanvas showhide navbar-collapse" id="sidebar" role="navigation" ></div>
      <!-- sidebar ends --> 
    </div>
    <!-- content starts -->
    <div id="banner-home" class="container-fluid">
      <div class="container">
        <div class="row">
          <div id="text" class="col-xs-12 col-md-12 text-center">
            <h1>International Health Insurance</h1>
            <h3>Create a plan that’s perfectly tailored for your needs.</h3>
            <div class="col-md-12">
              <button type="button" class="btn btn-warning center-block">Get a Quote</button>
            </div>
            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
            <h4>Independently rated by our customers.</h4>
            <img src="images/reevoo-logo.png" alt="" width="124" height="25"/> </div>
        </div>
      </div>
    </div>
    <div id="content" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div id="narrow-left-col" class="col-xs-12 primary">
              <div class="col-md-12">
                <h2>Our Plans</h2>
                <h4>At Cigna Global we offer you the reassurance of comprehensive core cover, and the flexibility of adding the extra benefits as you want.</h4>
                <ul class="list-unstyled">
                  <li> </li>
                  <li><a href="#">Our Plans Explained</a> <span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></li>
                  <li><a href="#">View All Our Plans</a><span class="fa fa-angle-right pull-right" aria-hidden="true"> </span></li>
                </ul>
                <button type="button" class="btn btn-warning btn-lg center-block">Get a Quote</button>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div id="core-cover" class="col-md-12">
              <div class="col-md-12">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                      <h4>Core Cover</h4>
                      </a></li>
                    <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                      <h4>Optional Benefits</h4>
                      </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane active in" id="home" aria-labelledby="home-tab">
                      <h4>International Medical Insurance</h4>
                      <h3>Our core policies cover for inpatient, day case surgery and accommodation costs. In addition, essential cover for cancer and psychiatric care are provided for. </h3>
                      <div class="col-md-11">
                        <p>Three levels of essential core cover, Silver, Gold and Platinum to choose from.</p>
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-success">More</button>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile" aria-labelledby="profile-tab">
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
      </div>
      <div id="icon-box" class="container">
        <div class="col-md-2 text-center info"> <img src="images/apply-online.png" height="85" alt="">
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
        <div class="col-md-2 text-center info"> <img src="images/contact-us.png" height="85" alt="">
          <h4>Contact <br>
            Us</h4>
        </div>
        <div class="col-md-2 text-center info"> <img src="images/arrows.png" height="85" alt="">
          <h4>Extra <br>
            Link</h4>
        </div>
      </div>
      <div id="customer-reviews" class="container">
        <h4 class="text-center">Customer Reviews</h4>
        <div class="row">
          <div class="col-md-4">
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
          <div class="col-md-8">
            <div class="row"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i><img src="images/reevoo-logo.png" class="pull-right" width="130" height="26" alt=""/>
              <p>It's a very expensive product but you buy it knowing that you will receive quality service.</p>
              <p>Written on January 26, 2015</p>
            </div>
            <div class="row"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i>
              <p>As stated above, everything so far has been excellent. Provided I maintain the plan, it follows that there may very well be a claim one day. At that time, we will discover exactyl how good the policy is. However, I have no reason to believe it will be other than 'As sold' which is why we decided to proceed with the purchase. It may not be possible as this is 'Health' insurance policy and not a 'Life' insurance policy, but I might suggest that the inclusion of an Optional 'Death Benefit' would have been a very good selling point. Of course, this would require an additional premium but being 'Optional' the purchaser would have ther choice to include it or not.</p>
              <p>Written on January 28, 2015</p>
            </div>
          </div>
        </div>
      </div>
      <div id="inter-health" class="container-fluid">
        <div class="container-fluid">
          <div class="row">
            <div id="text" class="col-xs-12 col-md-6">
              <h2>What is International Health Insurance?</h2>
              <p>Expatriate health insurance is designed for those who are living and working abroad.  It is designed to give you and your family access to the best healthcare possible, wherever you are in the world.</p>
              <p>The cost of healthcare abroad can be extremely expensive and without a comprehensive expatriate health plan in place, you may find that you are out of pocket if you require any medical treatment. Consider what would happen if you were working abroad and required an emergency procedure or needed to visit the doctor. Without overseas health insurance, you may be liable for any expenses related to the treatment you received. A worldwide medical plan will give you peace of mind and confidence that your health and wellbeing are covered when living and working in a foreign country.</p>
              <button type="button" class="btn btn-success">More</button>
            </div>
          </div>
        </div>
      </div>
      <div id="expat-banner" class="container-fluid">
        <div class="container">
          <div class="row">
            <div id="text" class="col-xs-12 col-md-12">
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
      <div id="content" class="container-fluid">
        <div class="container">
          <div id="text" class="col-xs-12 col-md-12">
            <div class="col-md-4">
              <div class="row">
                <h3><span class="fa fa-phone" aria-hidden="true"> </span> Give us a call</h3>
                <p>Inside the US: <strong>877.539.6295</strong><br>
                  Outside the US: <strong>+44(0)1475 779161</strong></p>
                <button type="button" class="btn btn-primary">Or Contact Us</button>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <h3><span class="fa fa-phone" aria-hidden="true"> </span><sup class="fa fa-reply small" aria-hidden="true"> </sup> Let us call you back</h3>
                <p>Send us your phone number and we will<br>
                  call you back as soon as possible.</p>
                <button type="button" class="btn btn-primary">Request Callback</button>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <h3><span class="glyphicon glyphicon-send" aria-hidden="true"> </span> Send us a message</h3>
                <p>For any queries or questions please do<br>
                  do not hesitate to send us a message.</p>
                <button type="button" class="btn btn-primary">Send message</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content ends --> 
    <!-- footer starts -->
    <div id="footer" class="container-fluid"></div>
    <!-- footer starts --> 
  </div>
</div>
<script src="js/bootstrap.min.js"></script> 
<script src="js/off-canvas.js"></script>
</body>
</html>
