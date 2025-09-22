<?php
/**
 * Shipping Calculator
 *
 * @author  NasaTheme
 * @package Elessi-theme/WooCommerce
 * @version 9.7.0
 */
defined('ABSPATH') || exit;

do_action('woocommerce_before_shipping_calculator');
?>

<form class="woocommerce-shipping-calculator" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">

    <?php printf('<a href="#" class="shipping-calculator-button" aria-expanded="false" aria-controls="shipping-calculator-form" role="button">%s</a>', esc_html(!empty($button_text) ? $button_text : __('Calculate shipping', 'elessi-theme'))); ?>

    <section class="shipping-calculator-form" id="shipping-calculator-form" style="display:none;">

        <?php if (apply_filters('woocommerce_shipping_calculator_enable_country', true)) : ?>
            <p class="form-row form-row-wide" id="calc_shipping_country_field">
                <label for="calc_shipping_country"><?php esc_html_e('Country / region', 'elessi-theme'); ?></label>
                <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
                    <option value="default"><?php esc_html_e('Select a country / region&hellip;', 'elessi-theme'); ?></option>
                    <?php
                    $contries = WC()->countries->get_shipping_countries();
                    foreach ($contries as $key => $value) {
                        echo '<option value="' . esc_attr($key) . '"' . selected(WC()->customer->get_shipping_country(), esc_attr($key), false) . '>' . esc_html($value) . '</option>';
                    }
                    ?>
                </select>
            </p>
        <?php endif; ?>

        <?php if (apply_filters('woocommerce_shipping_calculator_enable_state', true)) : ?>
            <p class="form-row form-row-wide" id="calc_shipping_state_field">
                <?php
                $current_cc = WC()->customer->get_shipping_country();
                $current_r = WC()->customer->get_shipping_state();
                $states = WC()->countries->get_states($current_cc);

                if (is_array($states) && empty($states)) {
                    ?>
                    <input type="hidden" name="calc_shipping_state" id="calc_shipping_state" />
                    <?php
                } elseif (is_array($states)) {
                    ?>
                    <span>
                        <label for="calc_shipping_state"><?php esc_html_e('State / County', 'elessi-theme'); ?></label>
                        <select name="calc_shipping_state" class="state_select" id="calc_shipping_state">
                            <option value=""><?php esc_html_e('Select an option&hellip;', 'elessi-theme'); ?></option>
                            <?php
                            foreach ($states as $ckey => $cvalue) {
                                echo '<option value="' . esc_attr($ckey) . '" ' . selected($current_r, $ckey, false) . '>' . esc_html($cvalue) . '</option>';
                            }
                            ?>
                        </select>
                    </span>
                    <?php
                } else {
                    ?>
                    <label for="calc_shipping_state"><?php esc_html_e('State / County', 'elessi-theme'); ?></label>
                    <input type="text" class="input-text" value="<?php echo esc_attr($current_r); ?>" name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php esc_attr_e('State / County:', 'elessi-theme'); ?>" />
                    <?php
                }
                ?>
            </p>
        <?php endif; ?>

        <?php if (apply_filters('woocommerce_shipping_calculator_enable_city', true)) : ?>
            <p class="form-row form-row-wide" id="calc_shipping_city_field">
                <label for="calc_shipping_city"><?php esc_html_e('City:', 'elessi-theme'); ?></label>
                <input type="text" class="input-text" value="<?php echo esc_attr(WC()->customer->get_shipping_city()); ?>" name="calc_shipping_city" id="calc_shipping_city" placeholder="<?php esc_attr_e('Town / City', 'elessi-theme'); ?>" />
            </p>
        <?php endif; ?>

        <?php if (apply_filters('woocommerce_shipping_calculator_enable_postcode', true)) : ?>
            <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                <label for="calc_shipping_postcode"><?php esc_html_e('Postcode / ZIP:', 'elessi-theme'); ?></label>
                <input type="text" class="input-text" value="<?php echo esc_attr(WC()->customer->get_shipping_postcode()); ?>" name="calc_shipping_postcode" id="calc_shipping_postcode" placeholder="<?php esc_attr_e('Postcode / ZIP', 'elessi-theme'); ?>" />
            </p>
        <?php endif; ?>

        <p><button type="submit" name="calc_shipping" value="1" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php esc_html_e('Update', 'elessi-theme'); ?></button></p>
        
        <?php wp_nonce_field('woocommerce-shipping-calculator', 'woocommerce-shipping-calculator-nonce'); ?>
    </section>
</form>

<?php
do_action('woocommerce_after_shipping_calculator');
