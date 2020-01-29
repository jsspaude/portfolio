
<section class="features-container">
    <?php if( get_row_layout() === 'flexible_features' ):
        //VARS
        $sectionHeading     = get_sub_field('section_heading');
    ?>
    <div class='features-wrapper'>
        <div class ='section-heading-container'>
            <h3> <?php echo $sectionHeading; ?> </h3>
        </div>
    <?php if( have_rows('feature_instance') ):
    ?>
        <div class='titles-container'>
            <?php while( have_rows('feature_instance') ): the_row();
                //VARS
                $featureHeading = get_sub_field('heading');
            ?>
            <div class='heading-container'>
                <h2><?php echo $featureHeading; ?></h2>
                <div class="animation-container">
                <?php if ( get_sub_field('svg_animation') ) {
                    $svg = get_sub_field('svg_animation', false, false);
                ?>
                 <?php echo $svg;?>
                <?php } ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class='descriptions-container'>
            <?php while( have_rows('feature_instance') ): the_row();
                //VARS
                $featureDesc    = get_sub_field('description', false, false);
            ?>
            <div class='paragraph-container'>
                <h4><?php echo $featureDesc; ?></h4>
            </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</section><!-- end features-container -->