<div id="list-services">
<?php 
	$args = array(
		'numberposts' => 0,
		'tax_query'     => array(
			array(
				'taxonomy'  => 'category',
				'field'     => 'id',
				'terms'     => 11,
			),
		),
		'orderby' => 'post_date',
		'order'   => 'ASC',
	);

	$wp_query = new WP_Query($args);
	if ($wp_query->have_posts()) {            
		while ($wp_query->have_posts()) : $wp_query->the_post();
			echo '<li><a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a></li>';
		endwhile;                       
	}
?>
</div>

<div id="header-row-3">
	<a href="/lien-he"><div class="row-1"></div></a>
	<div class="row-2">In Offset HCM</div>
	<div class="row-3">Chất lượng, uy tín, giá hợp lý</div>
</div>