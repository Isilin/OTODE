<?php
	namespace OTODE ;
	
	class OwnException extends Exception{
		public function __construct($messageIn){
			parent::__construct($messageIn) ;
		}

		public function __toString(){
			$message = '<div class="exception">' ;
			$message .= '<h5 class="exception">Exception</h5>' ;
			$message .= '<p class="exception">Code : '.$this->getCode().'</p>' ;
			$message .= '<p class="exception">Throw origin : File '.$this->getFile().' - Line '.$this->getLine().'</p>' ;
			$message .= '<p class="exception">Message : '.$this->getMessage().'</p>' ;
			$message .= '<p class="exception">Trace :<br>' ;
			$message .= '<table class="exception">' ;
			$message .= '	<thead class="exception">' ;
			$message .= '		<tr class="exception">' ;
			$message .= '			<th class="exception">#</th>' ;
			$message .= '			<th class="exception">File</th>' ;
			$message .= '			<th class="exception">Line</th>' ;
			$message .= '			<th class="exception">Function</th>' ;
			$message .= '		</tr>' ;
			$message .= '	</thead>' ;
			foreach ($this->getTrace() as $key => $value){
				$message .= '		<tr class="exception">' ;
				$message .= '			<td class="exception">'.$key.'</td>' ;
				$message .= '			<td class="exception">'.$value['file'].'</td>' ;
				$message .= '			<td class="exception">L.'.$value['line'].'</td>' ;
				$message .= '			<td class="exception">'.$value['class'].$value['type'].$value['function'].'()</td>' ;
				$message .= '		</tr>' ;
			}
			$message .= '	</tbody>' ;
			$message .= '</table>' ;
			$message .= '</p>' ;
			$message .= '</div>' ;
			return $message ;
		}
	}
?>