<!-- Plik z wpisami -->

<?php get_header(); ?>

<section class="blog">

<?php 
$blog_query = new WP_Query(array('post_type' => 'post'));
if($blog_query->have_posts()):
    while($blog_query->have_posts()):
        $blog_query->the_post(  );
?>


<div class="post">
    <h2><?php the_title(  ); ?></h2>
    <p><?php the_excerpt( ); ?></p>
    <a href="<?php the_permalink( ); ?>">Czytaj więcej</a>
</div>

<?php endwhile; ?>
<?php endif; ?>
</section>

<?php get_footer(); ?>