<?php
    if( get_row_layout() === 'flexible_hero') 
    //VARS
    $subHeading1        = get_sub_field('sub_heading_1');
    $subHeading2        = get_sub_field('sub_heading_2');
    $heroForm           = get_sub_field('contact_form');
    $svgTemplate        = "hero_1";
?>


<section id="home" class="hero-container component" data-js="hero">
    <div class='hero-wrapper section-wrapper'>
        <?php get_template_part("templates/template-parts/svg", $svgTemplate); ?>
    </div>
    <div class='content-container'>
        <div>
            <h3> <?php echo $subHeading1;  ?> </h3>
        </div>
        <div>
            <h4> <?php echo $subHeading2;  ?> </h4>
        </div>
    </div>
    <div class="form-container">
        <?php echo $heroForm; ?>
    </div>
</section> <!-- end hero-container -->

