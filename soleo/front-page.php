
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soleo
 */

get_header();

?>

<main class="g-0">
 
  <div class="position-relative overflow-hidden text-white bg-light s_intro_container row g-0 row-sm-col-1">
    <div class="col-1"></div>
    <div class="col-12 p-lg-5 my-5 col-sm-5 px-4 s_intro_left d-flex flex-wrap align-items-center">
        <div class="col-12">
            <h1 class="display-4 fw-normal"><?php the_field('main_title'); ?></h1>
            <p class="lead fw-normal text-secondary"><?php the_field('title_details'); ?></p>
            <p><a href="<?php the_field('button_link'); ?> " class="s_top_button btn text-light btn-primary "><?php the_field('button_text'); ?></a></p>
        </div>
    </div>
    <div class="col g-0 s_intro_right d-none d-sm-block">
        <div class="row g-0">
            <div class="col-3 align-middle m_sector_l row">

                <div class="align-middle sub_sec_1 row col-2">
                    <div class="sec_icon_1 col-3 justify-content-center text-center d-flex flex-wrap align-items-center">
                        <img src=" <?php the_field('badge_one_icon'); ?> " class="rounded" width="30">
                    </div>
                    <div class="row col">
                        <span class="sub_s_t col-12 text-secondary" > <?php the_field('budge_one_title'); ?> </span>
                        <span class="sub_s_c col-12 h3"><?php the_field('badge_one_body'); ?> </span>
                        <span class="sub_s_f col-12 "><img src=" <?php echo get_template_directory_uri() .'/assets/img/Vector2.png'; ?>" class="rounded text-secondary" width="10"><?php the_field('badge_one_percentage'); ?></span>
                    </div>
                </div>
                <div class="align-middle sub_sec_2 row col-2">
                    <div class="sec_icon_2 col-3 text-center d-flex flex-wrap align-items-center">
                        <img src=" <?php the_field('badge_two_icon'); ?> " class="rounded"width="30">
                    </div>
                    <div class="col row" >
                        <span class="sub_s_t col-12 text-secondary" > <?php the_field('budge_two_title'); ?></span>
                        <span class="sub_s_c col-12 h3"> <?php the_field('badge_two_body'); ?> </span>
                        <span class="sub_s_f col-12 text-secondary"><img src="<?php echo get_template_directory_uri() .'/assets/img/Vector2.png'; ?>" class="rounded" width="10"><?php the_field('badge_two_percentage'); ?></span>
                    </div>
                </div>
        </div>
            <div class="col-5 g-0">
                <img src=" <?php the_field('the_human_picture'); ?> " class="col-12"></div>
            <div class="col-2 row s_right_f" >
                <div class="col row" >
                    <span class="sub_s_t col-12" > <?php the_field('badge_three_title'); ?> </span>
                    <span class="sub_s_f col-12"><img src=" <?php the_field('badge_three_image'); ?> " class="rounded" class="col-12"></span>
                </div>
            </div>
        </div>
    </div>
  </div>

   <div class=" px-4 col-md-5 p-lg-5 mx-auto my-5 text-center ">
      <h5 class="display-4 fw-normal"> <?php the_field('title_'); ?> </h5>
      <p class="lead fw-normal text-secondary"> <?php the_field('intro_content'); ?> </p>
    </div>
     
  <div class="px-4 container py-5" id="hanging-icons">
      
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <img src=" <?php the_field('feature_one_icon'); ?> " class="rounded" class="col-12">
        </div>
        <div>
          <h2> <?php the_field('feature_one_tilte_'); ?></h2>
          <p> <?php the_field('feature_one_body'); ?> </p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <img src="<?php the_field('feature_two_icon'); ?> " class="rounded" class="col-12">
        </div>
        <div>
          <h2><?php the_field('feature_two_title_'); ?> </h2>
          <p> <?php the_field('feature_two_body'); ?> </p>          
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <img src=" <?php the_field('feature_three_icon'); ?> " class="rounded" class="col-12">
        </div>
        <div>
          <h2><?php the_field('feature_three_title_'); ?> Benefit from our Experience</h2>
          <p> <?php the_field('feature_three_content'); ?> Our 20+ years in call management make Soleo a pioneer and trusted expert in pay-per-call</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-5 p-lg-5 mx-auto my-5 text-center">
  <a href="<?php the_field('feature_calll_to_action_button_link'); ?>" class="btn btn-primary-outline btn_learnmores"> <?php the_field('feature_calll_to_action_button'); ?></a>
  </div>
  </div>

</main>

<?php get_footer(); ?>
<script type="text/javascript">

 jQuery(document).ready(function($){

	/* Search Menu */
	
	$(".search-icon").click(function() {
		$(".wpbsearchform").show();
	});

	$(document).keyup(function(e) {
		// Ref https://stackoverflow.com/questions/3369593/how-to-detect-escape-key-press-with-pure-js-or-jquery
		// Close search if esc key pressed
		if (e.key == "Escape") {
		  $(".wpbsearchform").hide();
		}
	});

});

</script>