


	<?php if(!have_posts()){ ?>

		<!-- No Results Returned -->
		<div id="p404">

			<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>

			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>

			<?php get_search_form(); ?>

		</div>

	<?php }else{ ?>


		<!-- Articles -->
		<?php get_template_part( 'content' ); ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if (  $wp_query->max_num_pages > 1 ){ ?>
			<footer>
				<nav class="clearfix"><?php

					//Get the Query
					global $wp_query;

					//Get the Page
					$page = ( get_query_var('paged') ? get_query_var('paged') : 1 );

					//Page Number
					echo '<span>Page ' . $page . ' of ' . $wp_query->max_num_pages . '</span>';
				
					//Pages Link
					echo '<div class="pages">';

						//Previous Posts Link
						previous_posts_link( __( '&larr; Previous', 'twentyten' ) );
						
						//If Both Pages Exist
						if( $page > 1 && $page < $wp_query->max_num_pages ){
							echo '<hr />';
						}

						//Next Posts Link
						next_posts_link( __( 'Next &rarr;', 'twentyten' ) );
				
					echo '</div>';
				?></nav>
			</footer>
		<?php } ?>




	<?php } ?>