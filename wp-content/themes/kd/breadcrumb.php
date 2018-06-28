<?php 
	$queried_object = get_queried_object();	
	$count = 2;
?>
<div id="breadcrumb">
	<div class="container">
		<div class="row">
			<ol itemscope itemtype="http://schema.org/BreadcrumbList">
				
				<?php 				
				if(has_category(3, $queried_object)){
				?>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href="http://inoffsethcm.com/" itemscope itemtype="http://schema.org/Thing" itemprop="item">
						<span itemprop="name">In Offset HCM</span>
					</a> ›  
					<meta itemprop="position" content="<?php echo $count++; ?>">
				</li>	
				
				<?php
				}
				?>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href="<?php echo get_permalink(); ?>" itemscope itemtype="http://schema.org/Thing" itemprop="item">
						 <span itemprop="name"><?php echo $queried_object->post_title; ?></span>
					</a>
					<meta itemprop="position" content="<?php echo $count++; ?>">
				</li>
			</ol>
		</div>
	</div>
</div>