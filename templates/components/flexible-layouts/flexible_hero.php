<?php
    if( get_row_layout() === 'flexible_hero') 
    //VARS
    $subHeading1        = get_sub_field('sub_heading_1');
    $subHeading2        = get_sub_field('sub_heading_1');
    $subHeading3        = get_sub_field('sub_heading_2');
    $heroForm           = get_sub_field('form');
?>


<section class="hero-container">
    <div class='hero-wrapper'>
        <div class='content-container'>
            <div>
                <h3> <?php echo $subHeading1;  ?> </h3>
            </div>
            <div>
                <h4> <?php echo $subHeading2;  ?> </h4>
            </div>
            <div>
                <h5> <?php echo $subHeading3;  ?> </h4>
            </div>
        </div>
        <div class="form-container">
            <div class='background-shape'>
            </div>
            <div class="form">
                <?php echo $heroForm; ?>
            </div>
        </div>
    </div><!-- end hero-wrapper -->
</section> <!-- end hero-container -->