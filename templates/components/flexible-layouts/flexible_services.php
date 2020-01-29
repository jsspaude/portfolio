<?php 
    if( get_row_layout() === 'flexible_services')
?>

<section class="services-container">
    <div class='services-wrapper'>
        <div class ='section-heading-container'>
            <h3> <?php echo $sectionHeading; ?> </h3>
        </div>
        <div class='services-background'>
        </div>
    <?php if( have_rows('services_instance') ) : ?>
        <div class='column-container'>
            <?php while( have_rows('services_instance') ): the_row(); 
                //VARS
                $servicesHeading    = get_sub_field('heading');
                $servicesDesc       = get_sub_field('description');
            ?>
            <div class='column-<?php echo get_row_index(); ?>'>
                <div class='graphic-container'>
                
                </div>
                <div class='heading-container'>
                    <h5><?php echo $servicesHeading ?></h5>
                </div>
                <div class='description-container'>
                    <p><?php echo $servicesDesc; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
</section>

