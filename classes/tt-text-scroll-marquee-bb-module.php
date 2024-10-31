<?php
 
class TT_Text_Scroll_Module_Loader {
	
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}
	
	static public function setup_hooks() {
		
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;	
		}
		
		add_action( 'init', __CLASS__ . '::load_modules' );
		
	}
	
	static public function load_modules() {
		require_once TT_MODULE_SCROLL_DIR . 'modules/basic-hscroll/basic-hscroll.php';
	}
	
}

TT_Text_Scroll_Module_Loader::init();