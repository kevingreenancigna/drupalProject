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
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
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
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="pull-left"><a href="<?php print $front_page; ?>"><img src="<?php print $base_path . $directory; ?>/images/CignaColourLogo.gif" alt="<?php print $site_name; ?>" class="floatLeft" title="Cigna" id="logo" /></a></p>
                
              <?php if (!empty($primary_nav)): ?>
                  <div class="navbar-collapse collapse">
                    <nav role="navigation">
                        <?php print render($primary_nav); ?>
                    </nav>
                  </div>
                <?php endif; ?>
              </div>
            <!--<div class="col-xs-12">
                <?php print render($page['search']); ?>
            </div>-->
            
        </div>
    </div>
</header> <!-- /#page-header -->

 
<div id="hero-home-image">
    <div class="container">
    	<div class="row">
            <!-- Home page hero section -->
            <?php print render($page['hero_home']); ?>
            <!-- /Home page hero section -->
        </div>
    </div>
</div>

<div class="container mt20px">
	<?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
    <?php endif; ?>
  	<div class="row">
		<?php print render($page['content']); ?>
  	</div>
</div>
 
<div id="what-is-image">
    <div class="container">
        <div class="row">
            <!-- Home page what is international health insurance section -->
            <?php print render($page['what_is']); ?>
            <!-- /Home page what is international health insurance section -->
        </div>
    </div>
</div>

  
<div id="expat-resources-image">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php print render($page['main_expat_resources_section']); ?>
            </div>
            <!-- Home page expat resources section -->
            <div class="col-md-2">
                <?php print render($page['first_expat_resources_section']); ?>
            </div>
            <div class="col-md-2">
                <?php print render($page['second_expat_resources_section']); ?>
            </div>
            <div class="col-md-4">
                <?php print render($page['third_expat_resources_section']); ?>
            </div>
            <div class="col-md-4">
                <?php print render($page['fourth_expat_resources_section']); ?>
            </div>
            <!-- /Home page expat resources section -->
        </div>
    </div>
</div>

<div id="contact-container"> 
    <div class="container">
        <div class="row">
            <!-- Home page what is international health insurance section -->
            <?php print render($page['home_contact']); ?>
            <!-- /Home page what is international health insurance section -->
        </div>
    </div>
</div>

<!-- Footer section -->
<footer class="footer">
	<div class="topFooter">
    	<div class="container">
    		<div class="row">
            	<div class="col-xs-9">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-xs-3">
                	<a href="#" class="btn btn-cigna-primary col-xs-12">Get a Quote</a>
                </div>
        	</div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
            <section class="col-sm-3">
              <?php print render($page['first_footer_section']); ?>
            </section>
            <section class="col-sm-3">
              <?php print render($page['second_footer_section']); ?>
            </section>
            <section class="col-sm-3">
              <?php print render($page['third_footer_section']); ?>
            </section>
            <section class="col-sm-3">
              <?php print render($page['fourth_footer_section']); ?>
            </section>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="copyright">
    	<div class="container">
        	<p>&copy; <?php echo date("Y");?> Cigna</p>
        </div>
    </div>
</footer>
<!-- /Footer section -->
