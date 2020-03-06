<?php 
    if( get_row_layout() === 'flexible_services') :
    $sectionHeading = get_sub_field('section_heading');
?>

<section class="services-container component" data-js="servContainer">
    <div class='services-wrapper section-wrapper'>
    </div>
    <div class ='section-heading' data-js="servicesHeading">
        <h2> <?php echo $sectionHeading; ?> </h2>
    </div>
<?php if( have_rows('services_instance') ) : ?>
    <div class='services-content-container section-content' data-js="servConContainer">
        <?php while( have_rows('services_instance') ): the_row(); 
            //VARS
            $servicesHeading    = get_sub_field('heading');
            $servicesDesc       = get_sub_field('description');
            $svgTemplate        = "services_" . get_row_index();
        ?>
        <div class='services-content' data-col='<?php echo get_row_index(); ?>' data-js="servicesContent">
            <div class='graphic-container' data-js="servGraphCon">
                <?php get_template_part("templates/template-parts/svg", $svgTemplate); ?>
            </div>
            <div class='text-container'>
                <div class='heading-container' data-js="servHeadingCon">
                        <h3><?php echo $servicesHeading ?></h3>
                    </div>
                <div class='paragraph-container'>
                    <?php echo $servicesDesc; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php endif; ?>
</section>

