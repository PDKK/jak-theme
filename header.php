

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href="<?php bloginfo('template_url');?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
  </head>

  <body>
<div id="header">
    <div class="header-wrapper">
        <img id="left" src="<?php bloginfo('template_url'); ?>/images/left.jpg"/>
        <img id="title" src="<?php bloginfo('template_url'); ?>/images/title.jpg"/>
        <img id="subtitle" src="<?php bloginfo('template_url'); ?>/images/subtitle.jpg">
    </div>

</div>
<div class="container">
    <div id="menu">
<?php 
  $pages = get_pages(array( 'sort_column' => 'menu_order') ); 
  foreach ( $pages as $page ) {
  	$option = '<a href="' . get_page_link( $page->ID ) . '">';
	$option .= $page->post_title;
	$option .= '</a>';
	echo $option;
  }
 ?>
    </div>
</div>


