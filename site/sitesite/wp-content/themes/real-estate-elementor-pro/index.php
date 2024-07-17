<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package real-estate-elementor
 */

get_header();
?>
<?php
    $sidebar_layout = get_theme_mod('real_estate_elementor_sidebar_layout_section', 'right');
    if ($sidebar_layout == 'left') {
        $sidebar_layout = 'has-left-sidebar';
    } elseif ($sidebar_layout == 'right') {
        $sidebar_layout = 'has-right-sidebar';
    } elseif ($sidebar_layout == 'no') {
        $sidebar_layout = 'no-sidebar';
    }
?>
	
<!-- Page Breadcrumb Start -->
<?php  real_estate_elementor_breadbrumb(); ?>
<!-- Page Breadcrumb Ends -->

<?php
if ( have_posts() ) : ?>

    <!-- blog detail start-->
    <div class="sp-100 bg-w">
        <div class="container">
            <div class="row <?php echo esc_attr($sidebar_layout); ?>">
                <div class="col-lg-8">
                    <div class="row">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-md-6">
                                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="pagination mt-5">
                                <?php echo paginate_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>	
				
				<?php
                if (($sidebar_layout == 'has-left-sidebar') || ($sidebar_layout == 'has-right-sidebar')) { ?>
                    <div class="col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php
else :
    get_template_part( 'template-parts/content', 'none' );
endif;
?>
<div id="freeTrialPopup" class="popup-parent">
    <div class="popup">
        <h2>Start your free trial now!</h2>
        <p>Start your free trial now! You can use the best features of Premium Themes for Free for 15 days.</p>
        <button class="popup-button" onclick="startFreeTrial()">Start Free Trial</button>
    </div>
</div>
<div id="endTrialPopup" class="popup-parent">
    <div class="popup">
        <h2>Your 15 days Free trial has expired. Purchase the theme now!</h2>
        <a href="https://testerwp.com/product/real-estate-elementor-pro/" target="_blank" class="popup-button">Purchase now</a>
    </div>
</div>
<script>
    function startFreeTrial() {
        const now = new Date();
        localStorage.setItem('freeTrialStart', now.toISOString());
        closePopup('freeTrialPopup');
    }

    function checkTrialStatus() {
        const startDateStr = localStorage.getItem('freeTrialStart');
        if (startDateStr) {
            const startDate = new Date(startDateStr);
            const now = new Date();
            const diffTime = now - startDate;
            const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 15));
            console.log(diffTime)
            console.log(diffDays)
            if (diffDays >= 15) {
                    // Show the end trial popup
                showPopup('endTrialPopup');
            }
        } else {
                // Show the start trial popup
            showPopup('freeTrialPopup');
        }
    }

    function showPopup(popupId) {
        document.getElementById(popupId).classList.add('show');
    }

    function closePopup(popupId) {
        document.getElementById(popupId).classList.remove('show');
    }

        // Check trial status on page load
    document.addEventListener('DOMContentLoaded', checkTrialStatus);
</script>
<?php
get_footer();
