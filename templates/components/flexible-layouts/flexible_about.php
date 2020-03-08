<?php if( get_row_layout() === 'flexible_about' ) :
    //VARS
    $sectionHeading     = get_sub_field('section_heading');
    $contentHeading     = get_sub_field('content_heading');
    $contentParagraph   = get_sub_field('content_paragraph');
    $aboutGraphic       = get_sub_field('graphic');
    $aboutLogo1         = get_sub_field('logo_1');
    $aboutLogo2         = get_sub_field('logo_2');
    $logo1Link          = get_sub_field('logo_1_link');
    $logo2Link          = get_sub_field('logo_2_link');

    if( $aboutGraphic ):

        // Image variables.
        $url    = $aboutGraphic['url'];
        $altAG  = $aboutGraphic['alt'];
    
        // Thumbnail size attributes.
        $size = 'laptopMed';
        $lapM = $aboutGraphic['sizes'][ $size ];
    
    endif;

    if( $aboutLogo1 ):

        // Image variables.
        $url    = $aboutLogo1['url'];
        $altL1  = $aboutLogo1['alt'];
    
        // Thumbnail size attributes.
        $size       = 'squareSmall';
        $abt_1_S    = $aboutLogo1['sizes'][ $size ];
    
    endif;

    if( $aboutLogo2 ):

        // Image variables.
        $url    = $aboutLogo2['url'];
        $altL2  = $aboutLogo2['alt'];
    
        // Thumbnail size attributes.
        $size       = 'squareSmall';
        $abt_2_S    = $aboutLogo2['sizes'][ $size ];
    
    endif;
?>

<section class="about-container component" data-js="abtContainer">
    <div class='about-wrapper section-wrapper'>
    </div>
    <div id="about"  class="section-heading">
        <h2>
            <?php echo $sectionHeading; ?>
        </h2>
    </div>
    <div class='about-content-container section-content'>
        <div class='about-content'>
            <div class='content-heading'>
                <h4 class="special-heading" data-js="abtStrContainer">
                    <?php echo $contentHeading; ?>
                </h4>
            </div>
            <div class='content-paragraph'>
                <?php echo $contentParagraph; ?>
            </div>
        </div>
        <div class='link-container'>
            <a href="<?php echo $logo1Link; ?>" target=_blank rel=noopener>
                <img srcset="<?php echo esc_url($abt_1_S); ?>" alt="<?php echo esc_attr($altL1); ?>" />
            </a>
            <a href="<?php echo $logo2Link; ?>" target=_blank rel=noopener>
                <img srcset="<?php echo esc_url($abt_2_S); ?>" alt="<?php echo esc_attr($altL2); ?>" />
            </a>
        </div>
        <div class='about-graphic-container'>
            <div class='about-graphic'>
                <img srcset="<?php echo esc_url($lapM); ?>" alt="<?php echo esc_attr($altAG); ?>" />
            </div>
        </div>
    </div>
</section>
<?php endif; ?>