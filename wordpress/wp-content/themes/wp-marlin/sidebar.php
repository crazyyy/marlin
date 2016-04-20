<aside class="col-md-12 callback-form">
  <h6><?php _e( 'FEEDBACK FORM', 'wpeasy' ); ?></h6>

  <?php if ( ICL_LANGUAGE_CODE=='ru' ) : ?>
    <?php echo do_shortcode('[contact-form-7 id="39" title="ContactFormRu"]'); ?>
  <?php endif; ?>

  <?php if ( ICL_LANGUAGE_CODE=='bg' ) : ?>
    <?php echo do_shortcode('[contact-form-7 id="42" title="ContactFormBg"]'); ?>
  <?php endif; ?>

  <?php if ( ICL_LANGUAGE_CODE=='en' ) : ?>
    <?php echo do_shortcode('[contact-form-7 id="43" title="ContactFormEn"]'); ?>
  <?php endif; ?>

</aside><!-- /.callback-form -->
