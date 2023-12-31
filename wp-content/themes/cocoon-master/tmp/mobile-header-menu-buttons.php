<?php //モバイル用のヘッダーボタンメニューの表示
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

if (!is_amp() && (is_mobile_button_layout_type_header_mobile_buttons() || is_mobile_button_layout_type_header_and_footer_mobile_buttons())): ?>

<?php
if (has_nav_menu( NAV_MENU_HEADER_MOBILE_BUTTONS )) {
  //モバイルヘッダーメニュー
  cocoon_template_part( 'tmp/mobile-header-custom-navi-buttons' );
} else {
  //デフォルトモバイルボタン
  cocoon_template_part( 'tmp/mobile-header-default-buttons' );
}
?>

<?php endif ?>

