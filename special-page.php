<?php
/*
    Template Name: Special Template
*/
  get_header();
  if (have_posts()) :
    while(have_posts()) : the_post(); ?>
      <article class="post page">
        <h2><?php the_title(); ?></h2>
        <!-- Info Box -->
        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatibus a fugiat repellendus sed amet velit delectus assumenda enim! Ex laborum dolorum sapiente architecto sunt corporis alias quae natus corrupti?</p>
        </div>
        <?php the_content(); ?>
      </article>
    <?php endwhile;
    else :
        echo '<h2>No Content Found.</h2>';
    endif;
  get_footer();
?>