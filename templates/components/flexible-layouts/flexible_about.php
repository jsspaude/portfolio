<?php if( get_row_layout() === 'flexible_about' ) :
    //VARS
    $sectionHeading     = get_sub_field('section_heading');
    $contentHeading     = get_sub_field('content_heading');
    $contentParagraph   = get_sub_field('content_paragraph');
    $aboutGraphic       = get_sub_field('graphic');

    if( $aboutGraphic ):

        // Image variables.
        $url = $aboutGraphic['url'];
        $alt = $aboutGraphic['alt'];
    
        // Thumbnail size attributes.
        $size = 'laptopMed';
        $lapM = $aboutGraphic['sizes'][ $size ];
    
    endif;?>

<section class="about-container">
    <div class='about-wrapper'>
    </div>
    <div class="section-heading">
        <h2>
            <?php echo $sectionHeading; ?>
        </h2>
    </div>
    <div class='about-content-container'>
        <div class='about-content'>
            <div class='content-heading'>
                <h4 class="special-heading">
                    <?php echo $contentHeading; ?>
                </h4>
            </div>
            <div class='content-paragraph'>
                <p>
                    <?php echo $contentParagraph; ?>
                </p>
            </div>
        </div>
        <div class='about-graphic-container'>
            <div class='about-graphic'>
                <img srcset="<?php echo esc_url($lapM); ?>" alt="<?php echo esc_attr($alt); ?>" />
            </div>
        </div>
    </div>
</section>
<?php endif; ?>