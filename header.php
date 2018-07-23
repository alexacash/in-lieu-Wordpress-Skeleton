<!DOCTYPE html>
    <head>
	  <meta charset="utf-8">
      <meta name = "keywords" content = "layover travel, travel efficient, day trip travel, long layover ideas, city stop">
      <meta name = "description" content = " In Lieu of Layovers is a travel blog that specializes in giving efficient and adventurous travelers ideas for extended flight layovers, roadtrip stop-overs and quick day trips to new cities! We believe in making the most of our travels, so we created a community resource for like like-minded jetsetters.">
      <?php wp_head(); ?>
		<title>In Lieu of Layover</title> 
	</head>

	<?php 
		if( is_front_page() ):
			$inlieu_classes = array( 'inlieu_class', 'my-example-class' );
		else:
			$inlieu_classes = array( 'no-example-class' );
		endif;

	?>

	<body <?php body_class( $inlieu_classes ); ?> >

		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()-> width; ?>" alt="" />
	