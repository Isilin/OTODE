<?php
	namespace OTODE ;

	class OTODE{
		protected $_mode ;
		static private $_self ;

		private function __construct(){
			$_mode = 'DEBUG' ;
		}

		static public function Initialize(){
			if(is_a(OTODE::$_self, 'OTODE')){
				echo 'OTODE already initialized. <br>' ;
			} else{
				OTODE::$_self = new OTODE() ;
				echo 'OTODE initialized successfully !<br>' ;
			}
		}

		static public function SwitchToDebug(){
			if(is_a(OTODE::$_self, 'OTODE')){
				OTODE::$_self->_mode = 'DEBUG' ;
				echo 'Switch to debug mode.<br>' ;
			} else{
				echo 'OTODE not initialized !<br>' ;
			}
		}

		static public function SwitchToRelease(){
			if(is_a(OTODE::$_self, 'OTODE')){
				OTODE::$_self->_mode = 'RELEASE' ;
				echo 'Switch to release mode.<br>' ;
			} else{
				echo 'OTODE not initialized !<br>' ;
			}
		}

		static public function IsDebugMode(){
			if(is_a(OTODE::$_self, 'OTODE')){
				return OTODE::$_self->_mode === 'DEBUG' ;
			} else{
				echo 'OTODE not initialized !<br>' ;
			}
		}

		static public function IsReleaseMode(){
			if(is_a(OTODE::$_self, 'OTODE')){
				return OTODE::$_self->_mode === 'RELEASE' ;
			} else{
				echo 'OTODE not initialized !<br>' ;
			}
		}
	}
?>