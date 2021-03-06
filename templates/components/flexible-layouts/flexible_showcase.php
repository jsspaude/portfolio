<?php if( get_row_layout() === 'flexible_showcase' ) : 
    //VARS
        $sectionHeading         = get_sub_field('section_heading');
?>
<section class="showcase-container component" data-js="showcase">

<div id="showcase" class='section-heading'>
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

    <div class='showcase-wrapper section-wrapper' data-row='<?php echo get_row_index(); ?>' data-js="wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 800">
        <path y="0" class="svg-line-path" d="M6.5 0v800"/>
        <path class="svg-line-dash" d="M6.5 0v800"/>
    </svg>
    </div>

    <div class='showcase-content-container section-content' data-row='<?php echo get_row_index(); ?>' data-js="contentContainer">
        <div class='showcase-graphic-container'> 
            <div class="showcase-graphic" style="background-image:url(<?php echo $projectGraphic['url']; ?>)">
            </div>
        </div>
        <div class='heading-container'>
            <h3>
                <?php echo $projectHeading; ?>
            </h3>
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
            <?php echo $projectParagraph; ?>
        </div>
        <div class='link-container'>
            <button>
                <a href="<?php echo $projectLink; ?>" target=_blank rel=noopener>
                    VISIT PAGE
                </a>
            </button>
        </div>
    </div>

        <?php endwhile; 
    endif; ?>

</section>

<?php endif; ?>