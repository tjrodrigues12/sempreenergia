<?php get_header(); ?>
<div class="space-24"></div>
<?php get_sidebar(); ?>
<div class="space-16"></div>
<div id="content">
  <div class="container">
    <?php if (have_posts()) : ?>  
      <?php while (have_posts()) : the_post() ?>
        <?php if ($post->post_type == 'post') { ?>
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
        <?php } ?>
      <?php endwhile; ?>
      <?php global $wp_query;
        $total_pages = $wp_query->max_num_pages;
        if ($total_pages > 1) { ?>
        <div id="nav-below" class="navigation">
          <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">«</span> Older posts', 'seu-template')) ?></div>
          <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">»</span>', 'seu-template')) ?></div>
        </div>
        <!– #nav-below –>
        <?php } ?>
      <?php else : ?>
        <div class="row">
          <div class="col">
            <div class="entry-empty-content">
               <span>Desculpe, não foi encontrado nenhum resultado para sua pesquisa.</span>
            </div>
          </div>
        </div>
        <?php endif; ?>   
  </div>
</div>
<div class="space-24"></div>
<?php get_footer(); ?>