<?php
/* Template Name: Home Page */

get_header(); ?>

<div id="wrapper">
    
    <main class="main" role="main" data-js="main">
    <?php // open the WordPress loop

// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if ( have_rows( 'flexible_layouts', $id ) ) :

    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'flexible_layouts', $id ) ) : the_row();

        get_template_part( 'templates/components/flexible-layouts/' . get_row_layout() );
    endwhile;
    
elseif ( get_the_content() ) :

    // no layouts found

endif;

?>

    </main>

</div>



<?php get_footer(); ?>