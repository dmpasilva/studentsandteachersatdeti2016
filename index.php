<?php 
    
    // get WordPress header

    get_header(); 
    
    // Since we're creating a really basic application with no blog, we don't need the WP Loop

    $the_page = get_post();

    // this post's title and content

    $title = $the_page->post_title;
    $content = $the_page->post_content;

    // Ready to go!

?>
    
    <!-- Page Content -->

    <a  name="content"></a>
    
    <!-- this is just a blank line -->
    <div class="content-section-a">
        <div class="container">
            <div class="container"><div class="clearfix"></div></div>
        </div>
    </div>

    <!-- blank line end -->

    <div class="content-section-b">
    <div class="container">
        <div class="row">
            <!-- padding left -->
            <div class="col-lg-3"></div>
            <!-- end padding left -->

            <!-- the main content -->
            <div class="col-lg-9">
                    <!-- <h1 class="section-heading"><?php echo $title; ?></h1> -->
                    <?php echo $content; ?>
            </div>
        </div>
    </div>
    </div>
    

</body>

<?php get_footer(); ?>

</html>