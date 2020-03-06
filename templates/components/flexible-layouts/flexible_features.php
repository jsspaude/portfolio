
<section class="features-container component" data-js="featComp">
    <?php if( get_row_layout() === 'flexible_features' ):
        //VARS
        $sectionHeading     = get_sub_field('section_heading');
        $svgTemplate        = "features_1";
    ?>
    <div class='features-wrapper section-wrapper'>  
        <?php get_template_part("templates/template-parts/svg", $svgTemplate); ?>
    </div>
    <div class='section-heading'>
        <h2><?php echo $sectionHeading; ?></h2>
    </div>
    <div class='features-content-container section-content' data-js="featConContainer">
    <?php if( have_rows('feature_instance') ):
    ?>
        <?php while( have_rows('feature_instance') ): the_row();
            //VARS
            $svg                = get_sub_field('svg_animation', false, false);
            $featureHeading     = get_sub_field('heading');
            $featureDesc        = get_sub_field('description');      
        ?>
        <div class="features-content" data-js="featureContent">
            <div class='heading-container' data-row="<?php echo get_row_index();?>">
                <h3><?php echo $featureHeading; ?></h3>
            </div>
            <div class='paragraph-container' data-row="<?php echo get_row_index();?>">
                <?php echo $featureDesc; ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</section><!-- end features-container -->


