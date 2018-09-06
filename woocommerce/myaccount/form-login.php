<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<?php wc_print_notices(); ?>

<?php do_action('woocommerce_before_customer_login_form'); ?>

<div id="login">
    <aside>
        <figure>
            <a href="<?php echo esc_url(get_home_url()); ?>">
                <img src="<?php echo esc_url($logoUrl); ?>" height="36" data-retina="true" alt="<?php bloginfo('name'); ?>" class="logo_sticky">
            </a>
        </figure>


        <div class="sign-in-wrapper">
            <form method="post">
                <?php do_action('woocommerce_login_form_start'); ?>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="username" id="username" autocomplete="username"
                           value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                    <i class="ec ec-user"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password"
                           autocomplete="current-password"/>
                    <i class="ec ec-customers"></i>
                </div>
                <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>

                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever"/>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php if (get_option('woocommerce_enable_myaccount_registration') === 'yes') : ?>
                        <div class="float-right mt-1">
                            <a href="javascript:void(0);">Forgot Password?</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn_1 full-width" name="login"
                            value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
                </div>
                <div class="divider"><span>Or</span></div>
                <?php do_action('woocommerce_login_form'); ?>
                <div class="text-center">
                    Don’t have an account? <a id="forgot"  href="javascript:void(0);">Sign up</a>
                </div>
            </form>
            <?php if (get_option('woocommerce_enable_myaccount_registration') === 'yes') : ?>
            <form method="post">
                <div id="forgot_pw">
                    <div class=" mt-1 mb-1">
                        <a id="back" href="javascript:void(0);">Back to Login</a>
                    </div>
                    <?php do_action('woocommerce_register_form_start'); ?>
                    <?php do_action('woocommerce_register_form'); ?>
                    <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" id="reg_username"
                                   autocomplete="username"
                                   value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                            <i class="ec ec-user"></i>
                        </div>

                    <?php endif; ?>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" id="reg_email" autocomplete="email"
                               value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                        <i class="ec ec-user"></i>
                    </div>

                    <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="reg_password"
                                   autocomplete="new-password"/>
                            <i class="ec ec-user"></i>
                        </div>

                    <?php endif; ?>



                    <p class="woocommerce-FormRow form-row">
                        <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                        <button type="submit" class="btn_1 full-width" name="register"
                                value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>
                    </p>

                    <?php do_action('woocommerce_register_form_end'); ?>



                </div>
                <?php endif; ?>
            </form>
        </div>
    </aside>
</div>
<?php do_action('woocommerce_after_customer_login_form'); ?>
