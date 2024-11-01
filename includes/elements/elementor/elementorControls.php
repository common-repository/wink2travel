<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class winkDefault extends \Elementor\Base_Control {
	public function get_type() {
		return 'winkDefault';
	}

	public function content_template() {
		?>
		<div class="elementor-control-field">
			<div class="elementor-control-input-wrapper"><b><?php esc_html_e( "This component does not require any configuration.", "wink2travel" ); ?></b></div>
		</div>
		<div class="elementor-control-field">
			<div class="elementor-control-input-wrapper"><?php esc_html_e( "Simply ensure that you have entered the correct Client-ID and Client-Secret ", "wink2travel" ) . ' <a href="'.esc_url(admin_url( '/customize.php?autofocus[section]=wink')).'" title="'.esc_html__('WINK settings',"wink2travel").'" target="_blank">'.esc_html(__('here',"wink2travel")).'</a>'; ?> </div>
		</div>
		<?php
	}

}