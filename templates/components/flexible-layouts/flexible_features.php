
<section class="features-container component">
    <?php if( get_row_layout() === 'flexible_features' ):
        //VARS
        $sectionHeading     = get_sub_field('section_heading');
    ?>
    <div class='features-wrapper section-wrapper'>
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
            $featureDesc        = get_sub_field('description', false, false);      
        ?>
        <div class="features-content">
            <div class='titles-container'>
                <div class='animation-container' data-row="<?php echo get_row_index();?>">
                    <div class="animation">
                        <?php echo $svg;?>
                    </div>
                </div>
                <div class='heading-container' data-row="<?php echo get_row_index();?>">
                    <h4><?php echo $featureHeading; ?></h4>
                </div>
            </div>
            <div class='descriptions-container'>
                <div class='paragraph-container' data-row="<?php echo get_row_index();?>">
                    <p><?php echo $featureDesc; ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <div class='graphic-container'>
            <div class='graphic-svg'>      
                <svg id="features" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <filter id="screens-dropshadow-color" height="130%">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                        <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
                        <feColorMatrix in="offOut" result ="matrixOut" type="matrix"                           
                                            values="0 0 0 0 2
                                                    0 0 0 0 0
                                                    0 0 0 0 0 
                                                    0 0 0 2 0" />
                        <feComponentTransfer>
                            <feFuncA type="linear" slope=".1"/> <!-- slope is the opacity of the shadow -->
                        </feComponentTransfer>
                        <feMerge> 
                            <feMergeNode/> <!-- this contains the offset blurred image -->
                            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                        </feMerge>
                    </filter>
                    <filter id="screens-dropshadow" height="130%">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
                        <feComponentTransfer>
                            <feFuncA type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
                        </feComponentTransfer>
                        <feMerge> 
                            <feMergeNode/> <!-- this contains the offset blurred image -->
                            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                        </feMerge>
                    </filter>
                    <g id="screens">
                        <rect x="10" y="14.8" class="outer-screen" width="181" height="122.6" filter='url(#screens-dropshadow-color)'/>
                        <rect x="19" y="21" class="inner-screen" width="162.9" height="110.3"/>
                        <path class="outer-screen" filter='url(#screens-dropshadow)' d="M165.8,85.5H120c-4,0-7.3,3.3-7.3,7.3v74.1c0,4,3.3,7.3,7.3,7.3h45.8c4,0,7.3-3.3,7.3-7.3V92.8
                            C173.1,88.8,169.8,85.5,165.8,85.5z"/>
                        <path class="inner-screen" d="M162.2,90h-38.6c-3.5,0-6.4,2.8-6.4,6.4v67.1c0,3.5,2.8,6.4,6.4,6.4h38.6c3.5,0,6.4-2.8,6.4-6.4V96.3
                            C168.6,92.8,165.7,90,162.2,90z"/>
                        <path class="outer-screen" filter='url(#screens-dropshadow)' d="M73,121.4H54.2c-3.7,0-6.7,3-6.7,6.7V174c0,3.7,3,6.7,6.7,6.7H73c3.7,0,6.7-3,6.7-6.7v-45.9
                            C79.8,124.4,76.8,121.4,73,121.4z"/>
                        <path class="inner-screen" d="M71.5,124.3H55.8c-3.2,0-5.9,2.6-5.9,5.9v41.7c0,3.2,2.6,5.9,5.9,5.9h15.6c3.2,0,5.9-2.6,5.9-5.9v-41.7
                            C77.3,127,74.7,124.3,71.5,124.3z"/>
                    </g>
                    <g id="text">
                        <rect x="26.9" y="32.4" class="textbox" width="60.1" height="10.6"/>
                        <text transform="matrix(1 0 0 1 26.9253 41.103)" class="heading" id="heading1">Your Story</text>
                        <rect x="26.9" y="55.4" class="textbox" width="140.1" height="34.6"/>
                        <text transform="matrix(1 0 0 1 26.9253 59.9272)" class="subHeading" id="subHeading1">Told on all devices.</text>
                        <line class="line" id="line1" x1="27" y1="47" x2="91" y2="47"/>
                        <rect x="123" y="100" class="textbox" width="24" height="4.2"/>
                        <text transform="matrix(1 0 0 1 123.041 103.4658)" class="heading" id="heading2">Your Story</text>
                        <rect x="123" y="109.2" class="textbox" width="56" height="13.8"/>
                        <text transform="matrix(1 0 0 1 123.041 110.9863)" class="subHeading" id="subHeading2">Told on all devices.</text>
                        <line class="line" id="line2" x1="123.1" y1="105.8" x2="148.6" y2="105.8"/>
                        <rect x="53.1" y="134" class="textbox" width="14.4" height="2.5"/>
                        <text transform="matrix(1 0 0 1 53.082 136.0732)" class="heading" id="heading3">Your Story</text>
                        <rect x="53.1" y="139.5" class="textbox" width="33.5" height="8.3"/>
                        <text transform="matrix(1 0 0 1 53.082 140.5703)" class="subHeading" id="subHeading3">Told on all devices.</text>
                        <line class="line" id="line2" x1="53.1" y1="137.5" x2="68.4" y2="137.5"/>
                    </g>
                </svg>
            </div>
        </div>
    <?php endif; ?>
</section><!-- end features-container -->


