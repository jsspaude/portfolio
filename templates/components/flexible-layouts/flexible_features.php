
<section class="features-container">
    <?php if( get_row_layout() === 'flexible_features' ):
        //VARS
        $sectionHeading     = get_sub_field('section_heading');
    ?>
    <div class='features-wrapper'>
    </div>
    <div class='section-heading'>
        <h2><?php echo $sectionHeading; ?></h2>
    </div>
    <div class='features-content-container'>
    <?php if( have_rows('feature_instance') ):
    ?>
        <?php while( have_rows('feature_instance') ): the_row();
            //VARS
            $svg                = get_sub_field('svg_animation', false, false);
            $featureHeading     = get_sub_field('heading');
            $featureDesc        = get_sub_field('description', false, false);
        ?>
        <div class="features-content">
            <div class='titles-container'>
                <div class='animation-container' data-row="<?php echo get_row_index();?>">
                    <div class="animation">
                        <?php echo $svg;?>
                    </div>
                </div>
                <div class='heading-container' data-row="<?php echo get_row_index();?>">
                    <h4><?php echo $featureHeading; ?></h4>
                </div>
            </div>
            <div class='descriptions-container'>
                <div class='paragraph-container' data-row="<?php echo get_row_index();?>">
                    <p><?php echo $featureDesc; ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</section><!-- end features-container -->