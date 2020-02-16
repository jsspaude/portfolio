<?php if( get_row_layout() === 'flexible_showcase' ) : 
    //VARS
        $sectionHeading         = get_sub_field('section_heading');
?>
<section class="showcase-container">

<div class='section-heading'>
     <h2><?php echo $sectionHeading; ?></h2>
</div>

    <?php if( have_rows('showcase_instance') ):

        while( have_rows('showcase_instance') ): the_row();
            //VARS
                $projectHeading     = get_sub_field('project_heading');
                $projectGraphic     = get_sub_field('project_graphic');
                $projectParagraph   = get_sub_field('project_paragraph');
                $projectLink        = get_sub_field('project_link'); 
    ?>

    <div class='showcase-wrapper' data-row='<?php echo get_row_index(); ?>'>
        
    </div>

    <div class='showcase-content-container' data-row='<?php echo get_row_index(); ?>'>
        <div class='showcase-graphic' style="background-image:url(<?php echo $projectGraphic['url']; ?>)">
        </div>
        <div class='showcase-content'>
            <div class='heading-container'>
                <h4>
                    <?php echo $projectHeading; ?>
                </h4>
            </div>

            <?php if( have_rows('tag_instance') ): ?>

            <div class='tag-container'>

                <?php while( have_rows('tag_instance') ): the_row();
                        //VARS
                            $projectTag     = get_sub_field('project_tag');
                ?>
                <h6>
                    <?php echo $projectTag; ?>
                </h6>

                <?php endwhile; ?>

            </div>

            <?php endif; ?>

            <div class='paragraph-container'>
                <p>
                    <?php echo $projectParagraph; ?>
                </p>
            </div>
            <div class='link-container'>
                <h5>
                    <?php echo $projectLink; ?>
                </h5>
            </div>
        </div>
    </div>

        <?php endwhile; 
    endif; ?>

</section>

<?php endif; ?>