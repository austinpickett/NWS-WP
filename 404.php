<?php
/**
 * replaceMe
 *
 * 404
 */

get_header();
?>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content">

<div class="wrapper">
	<!-- Page -->
	<div id="page" class="small-12 columns">
		<h2>Sorry, that page could not be found.</h2>
		<p>
			The page you were looking for couldn't be found. Please try again by using the navigation above.
		</p>

		<ul>
			<li><a href="<?=home_url()?>">Homepage</a></li>
			<li><a href="javascript:history.go(-1);">Go back</a></li>
		</ul>
	</div>
</div>

</section>

<?php get_footer() ?>