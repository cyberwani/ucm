<?php
// $Header: /cvsroot/html2ps/css.border.right.inc.php,v 1.1 2006/09/07 18:38:13 Konstantin Exp $

class CSSBorderRight extends CSSSubFieldProperty {
	function get_property_code() {
		return CSS_BORDER_RIGHT;
	}

	function get_property_name() {
		return 'border-right';
	}

	function parse( $value ) {
		if ( $value == 'inherit' ) {
			return CSS_PROPERTY_INHERIT;
		};

		$border = CSSBorder::parse( $value );

		return $border->right;
	}
}

?>