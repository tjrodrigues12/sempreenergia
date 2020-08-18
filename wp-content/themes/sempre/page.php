<?php get_header(); ?>
<div class="space-24"></div>
<?php get_sidebar(); ?>
<div class="space-16"></div>
<div id="content">
  <div id="page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile;
    else : ?>
    <div class="row">
      <div class="col">
        <div class="entry-empty-content">
           <span>Nenhum conteúdo foi encontrado.</span>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>