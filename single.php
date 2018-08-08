<?php get_header();?>

<h1>A single post</h1>
<?php
  // while there are posts for that single day or posting session
  while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title();?></h2>
      <?php the_content(); ?>
<?php  } 
?>

<?php get_footer();?>
