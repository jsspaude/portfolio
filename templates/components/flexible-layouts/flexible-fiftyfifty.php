<div id="ff-component">
    <?php
        // vars
            $content                = get_sub_field('content');
            $component              = get_sub_field('component_details');
            $componentType          = $component['component_type'];
            $headingSize            = $content['heading_size'];
            $headingColor           = $content['heading_color'];
            $copyColor              = $content['copy_color'];
            $copyContent            = $content['copy'];
            $contentBGColor         = $content['background_color'];
            $mediaPosition          = get_sub_field('media_position');
            $positClass             = ($mediaPosition == 'left') ? 'right' : 'left';
            $image                  = get_sub_field('image');
            $map                    = get_sub_field('map');
            $parallaxSelection      = get_sub_field('parallax');
            $parallaxDataEnabled    = ($parallaxSelection == 'on') ? "data-parallax='scroll'" : ("style='background-image:url(" . '"' . $image . '"' . ")'");
            $parallaxClassEnabled   = ($parallaxSelection == 'on') ? "parallax-window" : "";
            $headingSizeOpen        = "<" . $headingSize . " style='color:" . $headingColor . ";'>";
            $headingSizeClose       = "<" . "/" . $headingSize . ">";
            $buttonDisplayOption    = get_sub_field('cta_button_select');
            $buttonPosition         = get_sub_field('button_position');
            $buttonDisplay          = get_sub_field('cta_button');
            $buttonLink             = get_sub_field('button_link');
    ?>

   <section id="<?php echo strtolower($component['component_title']);?>"></section>
    

    <div id='ff-container' class='flex-row-wrapper flex-center no-wrap  <?php echo $componentType; ?>'>
        <div class="background-color-container posit-<?php echo $positClass; ?>" style="background-color:<?php echo $contentBGColor; ?>">
        </div>
        <div id ='ff-text' class="posit-<?php echo $positClass; ?> flex-col-wrapper flex-middle" style="background-color:<?php echo $contentBGColor; ?>">
    
            <div class="content-position flex-col-wrapper flex-center flex-middle">

                <?php echo  $headingSizeOpen; ?>
                    <?php echo $content['heading']; ?>
                <?php echo $headingSizeClose; ?>

                <p style="color:<?php echo $copyColor; ?>"> <? echo $copyContent; ?></p>

                <button class="button-display-<?php echo $buttonDisplayOption; ?> posit-<?php echo $buttonPosition; ?>">
                    <a href="#<?php echo strtolower($buttonLink); ?>"><?php echo $buttonDisplay; ?></a>
                </button>

            </div>
        </div> <!-- ff text -->

        <div class="ff-image posit-<?php echo $mediaPosition; ?>">
            
            <?php if( get_sub_field('media_choice') === 'image') :?>

            <div class="image <?php echo $parallaxClassEnabled; ?>" <?php echo $parallaxDataEnabled; ?> data-image-src="<?php echo $image; ?>">
            </div>

            <?php elseif ( get_sub_field('media_choice') === 'map') : ?>

            <?php 

            $location = get_sub_field('map_embed');

            if( !empty($location) ):
            ?>
            <div id="map" class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            <?php endif; ?>


            <?php endif; ?>
        </div> <!-- ff-image -->
    </div> <!-- ff container -->
</div> <!-- ff-component -->
