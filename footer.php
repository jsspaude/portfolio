<!-- Footer -->	
<?php 
    $footerForm     = get_field('footer_form', 'option');
?>
<footer>

<section id="footer">
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
                <a>
                    linked
                </a>
                <a>
                    git
                </a>
            </div>
        </div>
    </div>
</section>


</footer>

<?php wp_footer(); ?>


</body>
</html>