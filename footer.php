<!-- Footer -->	
<?php 
    $footerForm     = get_field('footer_form', 'option');
    $logo1          = get_field('logo_1', 'option');
    $logo2          = get_field('logo_2', 'option');

    if( $logo1 ):

        // Image variables.
        $url = $logo1['url'];
        $alt = $logo1['alt'];
    
        // Thumbnail size attributes.
        $size = 'squareSmall';
        $logo_1_S = $logo1['sizes'][ $size ];
    
    endif;

    if( $logo2 ):

        // Image variables.
        $url = $logo2['url'];
        $alt = $logo2['alt'];
    
        // Thumbnail size attributes.
        $size = 'squareSmall';
        $logo_2_S = $logo2['sizes'][ $size ];
    
    endif;
?>
<footer>
    <div class='cta-container'>
        <h3>
            GET IN TOUCH
        </h3>
    </div>
    <div class='footer-content-container'>
        <div class='form-container'>
            <?php echo $footerForm; ?>
        </div>
        <div class='contact-container'>
            <div class='email-container'>
                <h4>
                    jsspaude@gmail.com
                </h4>
            </div>
            <div class='link-container'>
                <a href="https://www.linkedin.com/in/jess-spaude/" rel=noopener targret=_blank>
                    <img srcset="<?php echo esc_url($logo_1_S); ?>" alt="<?php echo esc_attr($alt); ?>" />
                </a>
                <a href="https://github.com/jsspaude" rel=noopener targret=_blank>
                    <img srcset="<?php echo esc_url($logo_2_S); ?>" alt="<?php echo esc_attr($alt); ?>" />
                </a>
            </div>
        </div>
    </div>
    <div class='footer-nav'>
        <div class='footer-nav-links'>
            <a href="#services">
                SERVICES
            </a>
            |
            <a href="#showcase">
                SHOWCASE
            </a>
        </div>
        <div class='footer-nav-info'>
            <p>
                &copy; 2019 Jess Spaude
            </p>
        </div>
       
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>