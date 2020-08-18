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
            <div class="col post">
              <div class="entry-thumbnail">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php
                      if (has_post_thumbnail()) {
                        set_post_thumbnail_size(293, 170, true);
                        the_post_thumbnail();
                      } else { ?>
                    <div class="entry-default-img"></div>
                  <?php } ?>
                </a>
              </div>
              <div class="entry-content">
                <span class="entry-title">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <h1><?php the_title(); ?></h1>
                  </a>
                </span>
                <span class="entry-date">
                  <?php the_date('d/m/Y'); ?>
                </span>
                <span class="entry-summary">
                  <?php
                      echo substr(get_the_content(), 0, 450) . '...';
                      edit_post_link(__(' [Editar Post]', 'your-theme'), '<span class="edit-link">', '</span>');
                      wp_link_pages('before=<div class="page-link">' . __('Pages:', 'your-theme') . '&after=</div>');
                      the_tags('<ul class="entry-tag"><li>', '</li><li>', '</li></ul>');
                      ?>
                </span>
              </div>
            </div>
          </div>
        </div>
        <hr class="post-line" />
        <!-- #end the post -->
      <?php endwhile;
      else : ?>
      <div class="row">
        <div class="col">
          <div class="entry-empty-content">
             <span>Desculpe, não foi encontrado nenhum resultado.</span>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>