 <?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header role="banner" class="navbar  navbar-default  navbar--util">
    <div class="navbar-header">
      	<div class="pull-right">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
      </div>
        <?php print render($page['header']); ?>
    </div>
</header>

<header role="banner" class="main-header">

    <a href="<?php print $front_page; ?>" class="float--left">
        <h1 class="cigna-logo  svg-cigna-logo  svg-cigna-logo-dims"></h1>
    </a>

    <a href="#" class="toggle-nav">&#x2261;</a>

    <?php if (!empty($primary_nav)): ?>
        <div class="navbar-collapse collapse">
            <nav role="navigation">
                <?php print render($primary_nav); ?>
            </nav>
        </div>
    <?php endif; ?>

    <?php print render($page['search']); ?>

</header> <!-- /#page-header -->


<div class="shell  hero-home  text-center" id="hero-home-image">
    <!-- TODO: Make dynamic  -->
    <h1 class="hero-home__header">International health insurance</h1>

    <p class="hero-home__text">Create a plan that's tailored perfectly for <strong>your</strong> needs.</p>

    <button class="hero-home__btn  btn  btn-cigna-primary  col-xs-12">Get a quote</button>

    <p class="hero-home__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero est, viverra.</p>

    <p class="hero-home__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>

        <!-- Home page hero section -->
    <?php print render($page['hero_home']); ?>
    <!-- /Home page hero section -->
</div>

<div class="clearfix">
	<?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
    <?php endif; ?>
		<?php print render($page['content']); ?>
</div>

<div class="what-is-image" id="what-is-image">
    <!-- Home page what is international health insurance section -->
    <?php print render($page['what_is']); ?>
    <!-- /Home page what is international health insurance section -->
</div>


<div class="expat-resources-image" id="expat-resources-image">

    <?php print render($page['main_expat_resources_section']); ?>
    <!-- Home page expat resources section -->
    <?php print render($page['first_expat_resources_section']); ?>
    <?php print render($page['second_expat_resources_section']); ?>
    <?php print render($page['third_expat_resources_section']); ?>
    <?php print render($page['fourth_expat_resources_section']); ?>
    <!-- /Home page expat resources section -->
</div>
    </div>
</div>

<div class="contact-container" id="contact-container">
                    <!-- Home page what is international health insurance section -->
            <?php print render($page['home_contact']); ?>
            <!-- /Home page what is international health insurance section -->


</div>

 <div id="footer" class="container-fluid">
     <div id="quote-bar" class="container-fluid hidden-xs">
         <div class="container ">
             <div class="col-xs-8 col-md-8">
                 <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
             </div>
             <div class="col-xs-4 col-md-4">
                 <button type="button" class="btn btn-warning btn-lg center-block">Get a Quote</button>
             </div>
         </div>
     </div>
     <div id="links" class="container-fluid" style="background-color:rgb(21, 130, 197);">
         <div class="container">
             <div id="quote-box" class="col-md-12 text-center hidden-lg hidden-md hidden-sm show-xs">
                 <h3>Get a quote today</h3>
                 <p>Get a price in seconds with our quick and easy quote tool.</p>
                 <button type="button" class="btn btn-warning btn-lg center-block">Get a Quote</button>
             </div>
             <div class="row center-block text-center hidden-lg hidden-md hidden-sm show-xs">
                 <div class="copyRight jumpLink"><a href="#">
                         <div class="fa fa-caret-up" aria-hidden="true"> </div>
                         Top of the Page</a></div>
             </div>
             <div class="col-md-9 col-sm-6">
                 <div class="col-md-4 first">
                     <div class="panel-group" role="tablist">
                         <div class="panel panel-default">
                             <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                                 <h4 class="panel-title" id="-collapsible-list-group-"> <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true" aria-controls="collapseListGroup1"> Why Choose Cigna? </a><span class="fa fa-angle-down pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span> <a class="anchorjs-link" href="#-collapsible-list-group-"><span class="anchorjs-icon"></span></a> </h4>
                             </div>
                             <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
                                 <ul class="list-group">
                                     <li class="list-group-item"><a href="#">Why Choose Cigna?</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Expatriate Medical Insurance Explained </a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="panel-group" role="tablist">
                         <div class="panel panel-default">
                             <div class="panel-heading" role="tab" id="collapseListGroupHeading2">
                                 <h4 class="panel-title" id="-collapsible-list-group-"> <a class="" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="true" aria-controls="collapseListGroup2"> Our Plans </a><span class="fa fa-angle-down pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span> </h4>
                             </div>
                             <div id="collapseListGroup2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading2" aria-expanded="true">
                                 <ul class="list-group">
                                     <li class="list-group-item"><a href="#">International Medical Insurance</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">International Medical Evacuation</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">International Health and Wellbeing</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">International Vision and Dental</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="panel-group" role="tablist">
                         <div class="panel panel-default">
                             <div class="panel-heading" role="tab" id="collapseListGroupHeading3">
                                 <h4 class="panel-title" id="-collapsible-list-group-"> <a class="" data-toggle="collapse" href="#collapseListGroup3" aria-expanded="true" aria-controls="collapseListGroup3"> Expat Resource Centre </a><span class="fa fa-angle-down pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span> </h4>
                             </div>
                             <div id="collapseListGroup3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading3" aria-expanded="true">
                                 <ul class="list-group">
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Resource Sub Link Goes Here</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="panel-group" role="tablist">
                         <div class="panel panel-default">
                             <div class="panel-heading" role="tab" id="collapseListGroupHeading4">
                                 <h4 class="panel-title" id="-collapsible-list-group-"> <a class="" data-toggle="collapse" href="#collapseListGroup4" aria-expanded="true" aria-controls="collapseListGroup4"> Cigna Website </a> </h4>
                             </div>
                             <div id="collapseListGroup4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapseListGroupHeading4" aria-expanded="true">
                                 <ul class="list-group">
                                     <li class="list-group-item"><a href="z-examples/about.html">About Us</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Partners</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="z-examples/contact.html">Contact</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Get A Quote</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Transferring To Cigna</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Customer Reviews</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Heat map/Twitter Map</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="#">Help</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                     <li class="list-group-item"><a href="z-examples/faq.html">FAQ</a><span class="fa fa-angle-right pull-right hidden-lg hidden-md show-sm show-xs" aria-hidden="true"> </span></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-12 last">
                 <h4> Call Us:</h4>
                 <ul class="list-unstyled">
                     <li> Worldwide : +44(0)1475 777625 </li>
                     <li> United States : 877.539.6295</li>
                 </ul>
                 <h4> Social</h4>
                 <ul class="list-unstyled">
                     <li> <span class="fa fa-facebook" aria-hidden="true"> </span> Find us on Facebook</li>
                     <li> <span class="fa fa-twitter" aria-hidden="true"> </span> Follow us on Twitter</li>
                 </ul>
                 <div class="row">
                     <div class="col-lg-8 col-md-6 col-xs-6">
                         <p>
                             <button type="button" class="btn btn-primary btn-block">Claims</button>
                         </p>
                     </div>
                     <div class="col-lg-8 col-md-6 col-xs-6">
                         <p>
                             <button type="button" class="btn btn-primary btn-block">Client Login</button>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="bottom-bar" class="container-fluid" style="background-color:rgb(14,110,168);">
         <div class="container">
             <div id="bottomNav" class="col-md-8 pull-left">
                 <ul class="list-inline">
            <span class="copyRight">
            <li>© 2015 Cigna</li>
            |</span>
                     <li><a href="#">Sitemap</a></li>
                     |
                     <li><a href="#">Accessibility</a></li>
                     |
                     <li><a href="#">Privacy statement</a></li>
                     |
                     <li><a href="#">Disclaimer</a></li>
                     |
                     <li><a href="#">Cookie policy</a></li>
                     |
                     <li><a href="#">Singapore Legal</a></li>
                 </ul>
             </div>
             <div class="row center-block text-center">
                 <div class="copyRight">© 2015 Cigna</div>
             </div>

         </div>
     </div>
 </div>

