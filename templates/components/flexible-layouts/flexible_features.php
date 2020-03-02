
<section class="features-container component">
    <?php if( get_row_layout() === 'flexible_features' ):
        //VARS
        $sectionHeading     = get_sub_field('section_heading');
    ?>
    <div class='features-wrapper section-wrapper'>  
                <svg id="featuresSVG-desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <filter id="screens-dropshadow" height="130%">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
                        <feComponentTransfer>
                            <feFuncA id="slopeEffect" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
                        </feComponentTransfer>
                        <feMerge> 
                            <feMergeNode/> <!-- this contains the offset blurred image -->
                            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                        </feMerge>
                    </filter>

                    <rect id="screen-desktop" x="10" y="14.8" data-svg='1' class="outer-screen" width="181" height="122.6" filter='url(#screens-dropshadow)'/>
                </svg>
                <svg id="featuresSVG-tablet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <filter id="screens-dropshadow-tablet" height="130%">
                            <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                            <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
                            <feComponentTransfer>
                                <feFuncA id="slopeEffectTablet" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
                            </feComponentTransfer>
                            <feMerge> 
                                <feMergeNode/> <!-- this contains the offset blurred image -->
                                <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                            </feMerge>
                        </filter>
                    <path id="screen-tablet" class="outer-screen" data-svg='2' filter='url(#screens-dropshadow-tablet)' d="M165.8,85.5H120c-4,0-7.3,3.3-7.3,7.3v74.1c0,4,3.3,7.3,7.3,7.3h45.8c4,0,7.3-3.3,7.3-7.3V92.8
                                C173.1,88.8,169.8,85.5,165.8,85.5z"/>
                </svg>
                <svg id="featuresSVG-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <filter id="screens-dropshadow-mobile" height="130%">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
                        <feComponentTransfer>
                            <feFuncA id="slopeEffectMobile" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
                        </feComponentTransfer>
                        <feMerge> 
                            <feMergeNode/> <!-- this contains the offset blurred image -->
                            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                        </feMerge>
                    </filter>
                    <path id="screen-mobile" class="outer-screen" data-svg='3' filter='url(#screens-dropshadow-mobile)' d="M73,121.4H54.2c-3.7,0-6.7,3-6.7,6.7V174c0,3.7,3,6.7,6.7,6.7H73c3.7,0,6.7-3,6.7-6.7v-45.9
                        C79.8,124.4,76.8,121.4,73,121.4z"/>
                </svg>
    </div>
    <div class='section-heading'>
        <h2><?php echo $sectionHeading; ?></h2>
    </div>
    <div class='features-content-container section-content'>
    <?php if( have_rows('feature_instance') ):
    ?>
        <?php while( have_rows('feature_instance') ): the_row();
            //VARS
            $svg                = get_sub_field('svg_animation', false, false);
            $featureHeading     = get_sub_field('heading');
            $featureDesc        = get_sub_field('description');      
        ?>
        <div class="features-content" data-js="fContent">
            <div class='titles-container'>
                <div class='heading-container' data-row="<?php echo get_row_index();?>">
                    <h4><?php echo $featureHeading; ?></h4>
                </div>
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


