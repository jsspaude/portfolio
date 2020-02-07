<?php 
    if( get_row_layout() === 'flexible_services')
    $sectionHeading = get_sub_field('section_heading');
?>

<section class="services-container">
    <div class='services-wrapper'>
    </div>
    <div class ='section-heading-container'>
        <h2> <?php echo $sectionHeading; ?> </h2>
    </div>
<?php if( have_rows('services_instance') ) : ?>
    <div class='services-content-container'>
        <?php while( have_rows('services_instance') ): the_row(); 
            //VARS
            $servicesHeading    = get_sub_field('heading');
            $servicesDesc       = get_sub_field('description');
            $servicesGraphic    = get_sub_field('services_graphic', false, false);
        ?>
        <div class='services-content' data-col='<?php echo get_row_index(); ?>'>
            <div class='graphic-container'>
                <?php echo $servicesGraphic ?>
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
</section>
