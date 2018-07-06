<?php global $redux_builder_amp;
  wp_reset_postdata();?>
  <footer class="container">
      <div id="footer">
        <?php if ( has_nav_menu( 'amp-footer-menu' ) ) { ?>
          <div class="footer_menu"> 
           <?php // #1229 ?>
            <nav itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                <?php
                  $menu = wp_nav_menu( array(
                      'theme_location' => 'amp-footer-menu',
                      'link_before'     => '<span itemprop="name">',
                      'link_after'     => '</span>',
                      'echo' => false
                  ) );
                  $menu = apply_filters('ampforwp_menu_content', $menu);
                  $sanitizer_obj = new AMPFORWP_Content( $menu, array(), apply_filters( 'ampforwp_content_sanitizers', array( 'AMP_Img_Sanitizer' => array(), 'AMP_Style_Sanitizer' => array(), ) ) );
                  $sanitized_menu =  $sanitizer_obj->get_amp_content();
                  echo $sanitized_menu; ?>
            </nav>
          </div>
        <?php } ?>
        <p> <?php if($redux_builder_amp['ampforwp-footer-top']=='1') { ?>
                    <a href="#header"><?php echo ampforwp_translation( $redux_builder_amp['amp-translator-top-text'], 'Top'); ?> </a> 
                  <?php }
                  if($redux_builder_amp['amp-footer-link-non-amp-page']=='1') {
                    if($redux_builder_amp['ampforwp-footer-top']=='1') { ?>
                      | <?php ampforwp_view_nonamp(); 
                    }
                    else{
                      ampforwp_view_nonamp();
                    }
                  }
              global $allowed_html;
              echo wp_kses( ampforwp_translation($redux_builder_amp['amp-translator-footer-text'], 'Footer'),$allowed_html);
              ?>
        </p>
        <?php do_action('amp_footer_link'); ?>
      </div>
  </footer>
<?php do_action('ampforwp_global_after_footer'); ?>