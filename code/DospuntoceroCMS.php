<?php

class DospuntoceroCMS extends LeftAndMainExtension{
	
	function alternateAccessCheck(){
		// html display simplification
		$lines  = array('pastetext','ssmedia','separator','bold','italic','underline','strikethrough','hr','separator','styleselect','formatselect','separator','bullist','numlist','blockquote','sslink','unlink','anchor','separator','code');
		$config = HtmlEditorConfig::get('cms');
		$config->setButtonsForLine(1, $lines);
		$config->setButtonsForLine(2, null);
		$config->setButtonsForLine(3, null);

		HtmlEditorConfig::get('cms')->setOption('theme_advanced_blockformats', 'p,h1,h2,h3,h4'); 

	}
}