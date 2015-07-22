<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/fix.css">
 <link rel="stylesheet" type="text/css" href="css/patch.css">

 <script src="js/jquery-1.11.2.min.js"></script>
 <script src="js/bootstrap.min.js"></script>

    

<!--$(document).ready(larg);-->

<!--$(window).resize(larg);-->

<!--function larg(){-->
<!--  var larghezza = $(document).width();-->
<!--  $("p.width").text("The width for the " + larghezza + " is px.");-->
<!--}-->


<script>
var windowsize = $(window).width();
    
$(document).ready(function () {
    "use strict";
    windowsize = $(window).width();
    if (windowsize > 1200) {
        $('body').css("background-color", "yellow");
        $('h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("show");
        $('#collapse2').collapse("show");
        $('#collapse3').collapse("show");
        $('#collapse4').collapse("show");
        $('#collapse5').collapse("show");
	} else if (windowsize > 992 || windowsize > 1199) {
        $('body').css("background-color", "orange");
        $('h4 a').attr("data-toggle", "collapse");
        $('#accordion3 h4 a').removeAttr("data-toggle");
        $('#accordion4 h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("hide");
        $('#collapse2').collapse("hide");
        $('#collapse3').collapse("hide");
        $('#collapse4').collapse("show");
        $('#collapse5').collapse("show");
    } else if (windowsize > 768 || windowsize > 991) {
        $('body').css("background-color", "red");
        $('h4 a').attr("data-toggle", "collapse");
        $('#accordion4 h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("hide");
        $('#collapse2').collapse("hide");
        $('#collapse3').collapse("hide");
        $('#collapse4').collapse("hide");
        $('#collapse5').collapse("show");
    } else {
        $('body').css("background-color", "green");
        $('h4 a').attr("data-toggle", "collapse");
        $('#accordion4 h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("hide");
        $('#collapse2').collapse("hide");
        $('#collapse3').collapse("hide");
        $('#collapse4').collapse("hide");
        $('#collapse5').collapse("show");
    }
});
 
$(window).resize(function () {
    "use strict";
    windowsize = $(window).width();
    if (windowsize > 1200) {
        $('body').css("background-color", "yellow");
        $('h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("show");
        $('#collapse2').collapse("show");
        $('#collapse3').collapse("show");
        $('#collapse4').collapse("show");
        $('#collapse5').collapse("show");
	} else if (windowsize > 992 || windowsize > 1199) {
        $('body').css("background-color", "orange");
        $('h4 a').attr("data-toggle", "collapse");
        $('#accordion3 h4 a').removeAttr("data-toggle");
        $('#accordion4 h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("hide");
        $('#collapse2').collapse("hide");
        $('#collapse3').collapse("hide");
        $('#collapse4').collapse("show");
        $('#collapse5').collapse("show");
    } else if (windowsize > 768 || windowsize > 991) {
        $('body').css("background-color", "red");
        $('h4 a').attr("data-toggle", "collapse");
        $('#accordion4 h4 a').removeAttr("data-toggle");
        $('#collapse1').collapse("hide");
        $('#collapse2').collapse("hide");
        $('#collapse3').collapse("hide");
        $('#collapse4').collapse("hide");
        $('#collapse5').collapse("show");
    } else {
        $('body').css("background-color", "green");
        $('h4 a').attr("data-toggle", "collapse");
        $('#accordion4 h4 a').removeAttr("data-toggle");
       $('#collapse1').collapse("hide");
        $('#collapse2').collapse("hide");
        $('#collapse3').collapse("hide");
        $('#collapse4').collapse("hide");
         $('#collapse5').collapse("show");
    }
});
    
    </script>
    


</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
    </div>
    
    
    </div><!-- /.container-fluid -->
</nav>
    
    
<div class="container">    
<h2>Collapse</h2>
<div class="col-sm-12 col-md-6 col-lg-9">
<div class="col-md-12 col-lg-4">    
    <div class="panel-group" id="accordion1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-parent="#accordion1" href="#collapse1" aria-expanded="true" class="">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-expanded="true">
        <div class="panel-body">
          <div class="list-group">
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-parent="#accordion" href="#collapse2" aria-expanded="true" class="">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-expanded="true">
        <div class="panel-body">
          <div class="list-group">
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            </div>
          </div>
      </div>
    </div>
  </div> 
</div>
<div class="col-md-12 col-lg-4">    
    <div class="panel-group" id="accordion2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-parent="#accordion2" href="#collapse3" aria-expanded="true" class="">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse in" aria-expanded="true">
        <div class="panel-body">
          <div class="list-group">
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            </div>
          </div>
      </div>
    </div>
  </div> 
</div>
<div class="col-md-12 col-lg-4">    
    <div class="panel-group" id="accordion3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-parent="#accordion3" href="#collapse4" aria-expanded="true" class="">Collapsible Group 4</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse in" aria-expanded="true">
        <div class="panel-body">
            <div class="list-group">
                <a href="#" class="list-group-item">Cras justo odio</a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Cras justo odio</a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
            </div>
          </div>
      </div>
    </div>
    </div>
  </div> 
</div>
    <div class="col-sm-12 col-md-6 col-lg-3">    
    <div class="panel-group" id="accordion4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-parent="#accordion4" href="#collapse5" disabled="disabled" aria-expanded="true" class="">Collapsible Group 5</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse in" aria-expanded="true">
        <div class="panel-body">
                    <div class="list-group">
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
            </div>

          </div>
      </div>
    </div>
    </div>
  </div> 
</div>    
</div>
    
    

</body>
</html>
