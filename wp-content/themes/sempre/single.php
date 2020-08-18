<?php get_header(); ?>
<div class="space-24"></div>
<?php get_sidebar(); ?>
<div class="space-16"></div>
<div id="content">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- #post-<?php the_ID(); ?> -->
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <!-- .entry-content -->
          <div class="row">
            <div class="col-sm-12 single-post-content">
              <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } ?>
              <div class="space-24"></div>

              <span class="single-entry-title">
                <h1><?php the_title(); ?></h1>
              </span>
              <div class="space-24"></div>
              <span class="single-entry-date">
                <?php
                    the_date('d/m/Y');
                    echo ' - Por ';
                    the_author();
                    edit_post_link(__(' [Editar Post]', 'your-theme'), '<span class="edit-link">', '</span>');
                    wp_link_pages('before=<div class="page-link">' . __('Pages:', 'your-theme') . '&after=</div>');
                    ?>
              </span>
              <div class="space-24"></div>
              <span class="single-entry-content">
                <?php the_content();  ?>
              </span>

              <span class="single-entry-author">

              </span>

            </div>
          </div>
        </div>
        <!-- #end the post -->
      <?php endwhile;
      else : ?>
      <div class="row">
        <div class="col">
          <div class="entry-empty-content">
             <span>Nenhuma postagem foi encontrada.</span>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<div class="space-24"></div>
<?php get_footer(); ?>