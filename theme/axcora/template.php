<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>

<div class="col-12 col-md-12 p-3 border-bottom border-secondary">
				<h1 class="text-center"><strong><a ref="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></strong></h1>
				<marquee>
				<a class="text-secondary" href="<?php get_site_url(); ?>">Home</a>
				
				<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b class="text-secondary"><?php get_page_clean_title(); ?></b>
				
				<a class="text-secondary" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
				</marquee>
				</div>
<div class="col-12 col-md-3 p-3 p-md-5 border-right border-secondary text-center">
<!--
<img class="img-fluid rounded-circle" width="120" src="https://avatars.githubusercontent.com/u/52827888?v=4"/><br/><br/>
-->
<div class="row">
<a href="index.php" class="col-3 col-md-12 text-secondary">Home</a> 
<a href="index.php?id=about" class="col-3 col-md-12 text-secondary">About</a> 
<a href="index.php?id=order" class="col-3 col-md-12 text-secondary">Order</a> 
<a href="index.php?id=contact-us" class="col-3 col-md-12 text-secondary">Contact</a> 
</div>
</div>
<div class="col-12 col-md-8 p-3 p-md-5 ">
				<?php get_page_content(); ?>
				
</div>
<div class="col-12 col-md-1"></div>



<?php include('footer.inc.php'); ?>