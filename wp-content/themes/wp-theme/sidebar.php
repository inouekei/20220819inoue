      <aside class="sidebar">
        <ul class="menu">
          <li class="widget site-banner">
            <a href="https://coachtech.site">
              <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="no-img" />
            </a>
          </li>
          <li class="widget widget-about">
            <div class="sidebar-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png">
            </div>
            <h2 class="widget-ttl"><?php the_author(); ?></h2>
            <p><?php the_author_meta("description", 1); ?></p>
          </li>
          <li id="categories-3" class="widget widget_categories">
            <h2 class="widget-ttl">Category</h2>
            <ul>
              <a href="<?php echo get_category_link(9); ?>">
                <li class="cat-item">
                  HTML
                </li>
              </a>
              <a href="<?php echo get_category_link(8); ?>">
                <li class="cat-item">
                  CSS
                </li>
              </a>
              <a href="<?php echo get_category_link(7); ?>">
                <li class="cat-item">
                  JavaScript
                </li>
              </a>
              <a href="<?php echo get_category_link(5); ?>">
                <li class="cat-item">
                  PHP
                </li>
              </a>
              <a href="<?php echo get_category_link(4); ?>">
                <li class="cat-item">
                  MySQL
                </li>
              </a>
            </ul>
          </li>
        </ul>
      </aside>