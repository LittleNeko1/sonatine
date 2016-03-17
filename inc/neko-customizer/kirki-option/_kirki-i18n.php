<?php 

add_filter( 'kirki/sonatine/l10n', function( $l10n ) {

	$l10n['background-color']      = esc_attr__( 'Background Color', 'sonatine' );
	$l10n['background-image']      = esc_attr__( 'Background Image', 'sonatine' );
	$l10n['no-repeat']             = esc_attr__( 'No Repeat', 'sonatine' );
	$l10n['repeat-all']            = esc_attr__( 'Repeat All', 'sonatine' );
	$l10n['repeat-x']              = esc_attr__( 'Repeat Horizontally', 'sonatine' );
	$l10n['repeat-y']              = esc_attr__( 'Repeat Vertically', 'sonatine' );
	$l10n['inherit']               = esc_attr__( 'Inherit', 'sonatine' );
	$l10n['background-repeat']     = esc_attr__( 'Background Repeat', 'sonatine' );
	$l10n['cover']                 = esc_attr__( 'Cover', 'sonatine' );
	$l10n['contain']               = esc_attr__( 'Contain', 'sonatine' );
	$l10n['background-size']       = esc_attr__( 'Background Size', 'sonatine' );
	$l10n['fixed']                 = esc_attr__( 'Fixed', 'sonatine' );
	$l10n['scroll']                = esc_attr__( 'Scroll', 'sonatine' );
	$l10n['background-attachment'] = esc_attr__( 'Background Attachment', 'sonatine' );
	$l10n['left-top']              = esc_attr__( 'Left Top', 'sonatine' );
	$l10n['left-center']           = esc_attr__( 'Left Center', 'sonatine' );
	$l10n['left-bottom']           = esc_attr__( 'Left Bottom', 'sonatine' );
	$l10n['right-top']             = esc_attr__( 'Right Top', 'sonatine' );
	$l10n['right-center']          = esc_attr__( 'Right Center', 'sonatine' );
	$l10n['right-bottom']          = esc_attr__( 'Right Bottom', 'sonatine' );
	$l10n['center-top']            = esc_attr__( 'Center Top', 'sonatine' );
	$l10n['center-center']         = esc_attr__( 'Center Center', 'sonatine' );
	$l10n['center-bottom']         = esc_attr__( 'Center Bottom', 'sonatine' );
	$l10n['background-position']   = esc_attr__( 'Background Position', 'sonatine' );
	$l10n['background-opacity']    = esc_attr__( 'Background Opacity', 'sonatine' );
	$l10n['on']                    = esc_attr__( 'ON', 'sonatine' );
	$l10n['off']                   = esc_attr__( 'OFF', 'sonatine' );
	$l10n['all']                   = esc_attr__( 'All', 'sonatine' );
	$l10n['cyrillic']              = esc_attr__( 'Cyrillic', 'sonatine' );
	$l10n['cyrillic-ext']          = esc_attr__( 'Cyrillic Extended', 'sonatine' );
	$l10n['devanagari']            = esc_attr__( 'Devanagari', 'sonatine' );
	$l10n['greek']                 = esc_attr__( 'Greek', 'sonatine' );
	$l10n['greek-ext']             = esc_attr__( 'Greek Extended', 'sonatine' );
	$l10n['khmer']                 = esc_attr__( 'Khmer', 'sonatine' );
	$l10n['latin']                 = esc_attr__( 'Latin', 'sonatine' );
	$l10n['latin-ext']             = esc_attr__( 'Latin Extended', 'sonatine' );
	$l10n['vietnamese']            = esc_attr__( 'Vietnamese', 'sonatine' );
	$l10n['hebrew']                = esc_attr__( 'Hebrew', 'sonatine' );
	$l10n['arabic']                = esc_attr__( 'Arabic', 'sonatine' );
	$l10n['bengali']               = esc_attr__( 'Bengali', 'sonatine' );
	$l10n['gujarati']              = esc_attr__( 'Gujarati', 'sonatine' );
	$l10n['tamil']                 = esc_attr__( 'Tamil', 'sonatine' );
	$l10n['telugu']                = esc_attr__( 'Telugu', 'sonatine' );
	$l10n['thai']                  = esc_attr__( 'Thai', 'sonatine' );
	$l10n['serif']                 = _x( 'Serif', 'font style', 'sonatine' );
	$l10n['sans-serif']            = _x( 'Sans Serif', 'font style', 'sonatine' );
	$l10n['monospace']             = _x( 'Monospace', 'font style', 'sonatine' );
	$l10n['font-family']           = esc_attr__( 'Font Family', 'sonatine' );
	$l10n['font-size']             = esc_attr__( 'Font Size', 'sonatine' );
	$l10n['font-weight']           = esc_attr__( 'Font Weight', 'sonatine' );
	$l10n['line-height']           = esc_attr__( 'Line Height', 'sonatine' );
	$l10n['font-style']            = esc_attr__( 'Font Style', 'sonatine' );
	$l10n['letter-spacing']        = esc_attr__( 'Letter Spacing', 'sonatine' );
	$l10n['top']                   = esc_attr__( 'Top', 'sonatine' );
	$l10n['bottom']                = esc_attr__( 'Bottom', 'sonatine' );
	$l10n['left']                  = esc_attr__( 'Left', 'sonatine' );
	$l10n['right']                 = esc_attr__( 'Right', 'sonatine' );
	$l10n['color']                 = esc_attr__( 'Color', 'sonatine' );
	$l10n['add-image']             = esc_attr__( 'Add Image', 'sonatine' );
	$l10n['change-image']          = esc_attr__( 'Change Image', 'sonatine' );
	$l10n['remove']                = esc_attr__( 'Remove', 'sonatine' );
	$l10n['no-image-selected']     = esc_attr__( 'No Image Selected', 'sonatine' );
	$l10n['select-font-family']    = esc_attr__( 'Select a font-family', 'sonatine' );
	$l10n['variant']               = esc_attr__( 'Variant', 'sonatine' );
	$l10n['subsets']               = esc_attr__( 'Subset', 'sonatine' );
	$l10n['size']                  = esc_attr__( 'Size', 'sonatine' );
	$l10n['height']                = esc_attr__( 'Height', 'sonatine' );
	$l10n['spacing']               = esc_attr__( 'Spacing', 'sonatine' );
	$l10n['ultra-light']           = esc_attr__( 'Ultra-Light 100', 'sonatine' );
	$l10n['ultra-light-italic']    = esc_attr__( 'Ultra-Light 100 Italic', 'sonatine' );
	$l10n['light']                 = esc_attr__( 'Light 200', 'sonatine' );
	$l10n['light-italic']          = esc_attr__( 'Light 200 Italic', 'sonatine' );
	$l10n['book']                  = esc_attr__( 'Book 300', 'sonatine' );
	$l10n['book-italic']           = esc_attr__( 'Book 300 Italic', 'sonatine' );
	$l10n['regular']               = esc_attr__( 'Normal 400', 'sonatine' );
	$l10n['italic']                = esc_attr__( 'Normal 400 Italic', 'sonatine' );
	$l10n['medium']                = esc_attr__( 'Medium 500', 'sonatine' );
	$l10n['medium-italic']         = esc_attr__( 'Medium 500 Italic', 'sonatine' );
	$l10n['semi-bold']             = esc_attr__( 'Semi-Bold 600', 'sonatine' );
	$l10n['semi-bold-italic']      = esc_attr__( 'Semi-Bold 600 Italic', 'sonatine' );
	$l10n['bold']                  = esc_attr__( 'Bold 700', 'sonatine' );
	$l10n['bold-italic']           = esc_attr__( 'Bold 700 Italic', 'sonatine' );
	$l10n['extra-bold']            = esc_attr__( 'Extra-Bold 800', 'sonatine' );
	$l10n['extra-bold-italic']     = esc_attr__( 'Extra-Bold 800 Italic', 'sonatine' );
	$l10n['ultra-bold']            = esc_attr__( 'Ultra-Bold 900', 'sonatine' );
	$l10n['ultra-bold-italic']     = esc_attr__( 'Ultra-Bold 900 Italic', 'sonatine' );
	$l10n['invalid-value']         = esc_attr__( 'Invalid Value', 'sonatine' );

	return $l10n;

} );