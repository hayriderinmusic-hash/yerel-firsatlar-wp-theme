<?php get_header(); ?>

<h1>Güncel Fırsatlar</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article style="background:#fff;padding:15px;margin-bottom:15px;">
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Detayı Gör</a>
    </article>
<?php endwhile; else : ?>
    <p>Henüz ilan yok.</p>
<?php endif; ?>

<?php get_footer(); ?>
