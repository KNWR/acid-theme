<?php get_header('front'); ?>


				<div id="site-content" class="wrap" style="text-align: center;> 

					<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry">

							<header id="article-header">

								<h1>404</h1>

							</header>

							<section class="entry-content">

								<p>//not lost, not found</p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>
							<br><br>
							<footer><a href=" <?php echo get_permalink(2); /*2 == id of about pg*/?> ">about</a>&nbsp;<a href=" <?php echo site_url();?> ">acid</a>&nbsp;<a href=" <?php echo get_permalink(2359);?> ">old</a></footer>

						</article>

					</main>

				</div>

<?php get_footer(); ?>
