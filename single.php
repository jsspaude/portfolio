<?php get_header(); ?>

	<main id="blog-single" class="wrapper">
	
		<!-- Articles -->
		<?php while(have_posts()){ ?>
			<?php the_post(); ?>			

				<article itemscope itemtype="http://schema.org/BlogPosting"> 

					<!-- Article Header -->
					<header>
                            
                           <!-- Title -->
                        <h1 class="blog-single-title">
                            
                            <?php the_title(); ?>
                            
                        </h1>	


					</header>

					<div class="clear"></div>

					<section class="blog-single-article clearfix">

						<!-- Excerpt -->
						<?php the_content(); ?>

					</section>

					<?php //comments_template( '', true ); ?>

				</article>
					
		<?php } ?>

    </main>


<?php get_footer(); ?>