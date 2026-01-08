<?php get_header(); ?>

<div class="page-title">
  <h2><?php single_term_title(); ?></h2>
</div>

<div class="ilan-listesi">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="ilan-card">

    <div class="ilan-img">
      <?php the_post_thumbnail('medium'); ?>
      <span class="indirim-oran">%<?php echo get_post_meta(get_the_ID(),'indirim_oran',true); ?></span>
    </div>

    <div class="ilan-info">
      <h3><?php the_title(); ?></h3>

      <div class="geri-sayim" 
           data-bitistarih="<?php echo get_post_meta(get_the_ID(),'bitis_tarih',true); ?>">
        Yükleniyor...
      </div>

      <a href="<?php the_permalink(); ?>" class="btn-incele">İncele</a>
    </div>

  </div>

<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
