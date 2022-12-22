<?php
//  This is to create a different
//  template for the portfolio page
?>

<?php
  get_header();
  if (have_posts()) :
    while(have_posts()) : the_post(); ?>
      <article class="post page">
        <div class="column-container clearfix">
            <div class="column-title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="column-text">
                <?php the_content(); ?>
            </div>
        </div>
      </article>
    <?php endwhile;
    else :
        echo '<h2>No Content Found.</h2>';
    endif;
  get_footer();
?>