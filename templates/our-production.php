<?php
    // Template name: Наше производство
    get_header('other');
?>

<section class="section" id="our-production">
    <div class="container">
        <h2 class="h2">Наше производство</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit odio risus, eu pulvinar sem congue a. Aenean sed mollis nibh, at dapibus nulla. Cras ex sem, elementum egestas arcu sed, vulputate aliquam dolor. Proin odio nibh, tempus pulvinar vestibulum vitae, feugiat aliquam urna. Cras in eros molestie, pulvinar velit vitae, fringilla neque. Fusce elit urna, congue vitae urna ac, accumsan dapibus metus. Vestibulum erat tellus, laoreet vel libero ut, tristique sagittis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <div class="images">
            <div class="left">
                <img src="<?php bloginfo("template_url"); ?>/src/img/our-production/image-1.jpg" alt="img-1">
                <img src="<?php bloginfo("template_url"); ?>/src/img/our-production/image-3.jpg" alt="img-3">
            </div>
            <!-- left -->

            <div class="right">
                <img src="<?php bloginfo("template_url"); ?>/src/img/our-production/image-2.jpg" alt="img-2">
            </div>
            <!-- right --> 
        </div>

       

    </div>
</section>

<?php get_footer(); ?>