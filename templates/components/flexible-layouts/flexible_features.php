<section class="features-container">
    <?php if( have_rows('feature_instance') ):?>
    <div class='features-wrapper'>
        <div class='titles-container'>
            <?php while( have_rows('feature_instance') ): the_row();
                //VARS
                $featureHeading = get_sub_field('heading');
            ?>
            <div class='heading-container'>
                <h2><?php echo $featureHeading; ?></h2>
                <div class="animation-container">
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
    </div>
    <?php endif; ?>
</section><!-- end features-container -->