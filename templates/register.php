<?php do_action('uwp_template_before', 'register'); ?>
<div class="uwp-content-wrap">
    <div class="uwp-registration">
        <div class="uwp-rf-icon"><i class="fa fa-pencil fa-fw"></i></div>
        <?php do_action('uwp_template_form_title_before', 'register'); ?>
        <h2><?php echo __( 'Create Account', 'users-wp' ); ?></h2>
        <?php do_action('uwp_template_form_title_after', 'register'); ?>
        <form class="uwp-registration-form" method="post">
            <?php do_action('uwp_template_fields', 'register'); ?>
            <input type="hidden" name="uwp_register_nonce" value="<?php echo wp_create_nonce( 'uwp-register-nonce' ); ?>" />
            <input name="uwp_register_submit" value="<?php echo __( 'Create Account', 'users-wp' ); ?>" type="submit">
        </form>
        <div class="uwp-login-now"><?php echo __( 'Already a Member?', 'users-wp' ); ?> <a rel="nofollow" href="<?php echo uwp_get_page_link('login'); ?>"><?php echo __( 'Login Here', 'users-wp' ); ?></a></div>
    </div>
</div>
<?php do_action('uwp_template_after', 'register'); ?>