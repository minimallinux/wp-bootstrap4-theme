<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true); 
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="keywords" content="progressive,web,apps,mobile apps,android app,business,android,iphone,ios,cordova,nodejs,expressjs,javascript,wordpress,woocommerce,bootstrap,roots,sage,mysql,mongodb,postgresql,frameworks,webpack,yarn,opa,gulp,blade,application,internet,smartphone">
 <meta name="description" content="Custom Built Mobile Web Technology.">
 <meta name="google-site-verification" content="QxfZ67qSjMymoFGqZGY3HLxvZxSa-pFgyhBlZYC_fyI" />
 <meta name="google-site-verification" content="9imlrztuqXXzb5TKK6HqrRERI-m-LUbmyh05BU0Wj7c" />
 <meta name="msvalidate.01" content="BBD5427226C1D59EF4FC8F2627669793" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="cover-1 text-left">
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
          <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mt-2 mt-md-0">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>
    </ul>
 </div>
  </div>
				</div>
			</nav>
			<div class="cover-container">
				<div class="cover-inner container">
						<div class="row justify-center">
							<div class="col-lg-12 mt-12 mb-12 text-center">
						    <br /><br />						
                	<h2 class="jumbotron-heading">Application Builds</h2>
									<p class="lead">We build stairs of your dreams to reality, most trusted, dynamic, accessible and widely used Word Press platform to build your website. Voila! Along with Website Design we provide you with free hosting, Domain Name, SSL, SEO too.</p>
	            </div>
						</div>
				</div>
			</div>
		</section>

