<?php
/*
 * Copyright (C) joomla-monster.com
 * Website: http://www.joomla-monster.com
 * Support: info@joomla-monster.com
 *
 * JM Simple Image Slider is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * JM Simple Image Slider is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with JM Simple Image Slider. If not, see <http://www.gnu.org/licenses/>.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$version = new JVersion;
$jversion = '3';
if (version_compare($version->getShortVersion(), '3.0.0', '<')) {
		$jversion = '2.5';
}

$doc = JFactory::getDocument();

$moduleId = $module->id;
$id = 'jmm-simple-img-slider-' . $moduleId;

$data = trim( $params->get('slides') );

$json_data = ( !empty($data) ) ? json_decode($data) : false;

if ($json_data === false) {
	echo JText::_('MOD_JM_SIMPLE_IMG_SLIDER_NO_ITEMS');
	return false;
}

$field_pattern = '#^jform\[params\]\[([a-zA-Z0-9\_\-]+)\]#i';

$output_data = array();
foreach ($json_data as $item) {
	$item_obj = new stdClass();
	foreach($item as $field) {
		if (preg_match($field_pattern, $field->name, $matches)) {
			$attr = $matches[1];
			if (isset($item_obj->$attr)) {
				if (is_array($item_obj->$attr)) {
					$temp = $item_obj->$attr;
					$temp[] = $field->value;
					$item_obj->$attr = $temp;
				} else {
					$temp = array($item_obj->$attr);
					$temp[] = $field->value;
					$item_obj->$attr = $temp;
				}
			} else {
				$item_obj->$attr = $field->value;
			}
		}
	}
	$output_data[] = $item_obj;
}

$elements = count($output_data);

if( $elements < 1 ) {
	echo JText::_('MOD_JM_SIMPLE_IMG_SLIDER_NO_ITEMS');
	return false;
}

$load_fa = $params->get('load_fontawesome', 0);

if( $load_fa == 1 ) {
	$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

$theme = $params->get('theme', 1);
$theme_class = ( $theme == 1 ) ? 'default' : 'override';

if( $theme == 1 ) { //default
	$doc->addStyleSheet(JURI::root(true).'/modules/mod_jm_simple_img_slider/assets/default.css');
}

$style = '';

$auto_play = $params->get('auto_play', 0);
$interval = $params->get('play_interval', 0);
$interval = intval($interval);

$play = ( $auto_play == 1 && $interval > 0 ) ? $interval : 0;

$show_indicators = $params->get('show_indicators', 0);

$img_align = $params->get('img_align', 1);
if( $img_align == 2 ) {
	$img_align_class = 'img-left';
} elseif( $img_align == 3 ) {
	$img_align_class = 'img-right';
} else {
	$img_align_class = 'img-center';
}

JHtml::_('bootstrap.framework');

$doc->addScript(JURI::root(true).'/modules/mod_jm_simple_img_slider/assets/jquery.touchSwipe.min.js');

$doc->addScriptDeclaration('
	jQuery(document).ready(function(){
		jQuery(\'#' . $id . '\').carousel({
			interval: ' . $play . '
		});
		jQuery(\'#' . $id . '\').swipe({
			swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
				if (direction == \'left\') {
					jQuery(this).carousel(\'next\');
				}
				if (direction == \'right\') {
					jQuery(this).carousel(\'prev\');
				}
			},
			allowPageScroll: \'vertical\'
		});
	});
');

//text color
$color = $params->get('color', '');
if( !empty($color) ) {
	$style .= '#' . $id . ' .jmm-text .jmm-title, #' . $id . ' .jmm-text .jmm-desc { color: ' . $color . '; }';
}

//desc width
$desc_width = $params->get('desc_width', 0);
$desc_width_px = $params->get('desc_width_px', 0);
$desc_width_per = $params->get('desc_width_per', 0);

//desc position
$desc_position = $params->get('desc_position', 1); //over the image
if( $desc_position == 2 ) {
	$desc_position_class = 'desc-below';
} elseif( $desc_position == 3 ) {
	$desc_position_class = 'desc-above';
} elseif( $desc_position == 4 ) {
	$desc_position_class = 'desc-left';
} elseif( $desc_position == 5 ) {
	$desc_position_class = 'desc-right';
} else {
	$desc_position_class = 'desc-over';
}

$desc_position_over = $params->get('desc_position_over', 1);

if($desc_position == 1) {
	if( $desc_position_over == 4 ) {
		$desc_positon_class = 'desc-custom';
	} elseif($desc_position_over == 3 ) {
		$desc_positon_class = 'desc-bottom';
	} elseif($desc_position_over == 2 ) {
		$desc_positon_class = 'desc-center';
	} else {
		$desc_positon_class = 'desc-top';
	}
} else {
	$desc_positon_class = '';
}

$desc_positon_unit = $params->get('desc_positon_unit', 1);

$desc_top_per = $params->get('desc_top_per', '');
$desc_bottom_per = $params->get('desc_bottom_per', '');
$desc_left_per = $params->get('desc_left_per', '');
$desc_right_per = $params->get('desc_right_per', '');

$desc_top_px = $params->get('desc_top_px', '');
$desc_bottom_px = $params->get('desc_bottom_px', '');
$desc_left_px = $params->get('desc_left_px', '');
$desc_right_px = $params->get('desc_right_px', '');

//desc custom position over image
if( $desc_position == 1 ) {
	if( $desc_positon_unit == 1 && ($desc_top_px || $desc_bottom_px || $desc_left_px || $desc_right_px) ) {
		$style .= '#' . $id . ' .jmm-text.desc-custom {';
		if( !empty($desc_top_px) ) {
			$style .= 'top:' . $desc_top_px . 'px;';
		}
		if( !empty($desc_bottom_px) ) {
			$style .= 'bottom:' . $desc_bottom_px . 'px;';
		}
		if( !empty($desc_left_px) ) {
			$style .= 'left:' . $desc_left_px . 'px;';
		}
		if( !empty($desc_right_px) ) {
			$style .= 'right:' . $desc_right_px . 'px;';
		}
		$style .= '}';
	} elseif( $desc_positon_unit == 2 && ($desc_top_per || $desc_bottom_per || $desc_left_per || $desc_right_per) ) {
		$style .= '#' . $id . ' .jmm-text.desc-custom {';
		if( !empty($desc_top_per) ) {
			$style .= 'top:' . $desc_top_per . '%;';
		}
		if( !empty($desc_bottom_per) ) {
			$style .= 'bottom:' . $desc_bottom_per . '%;';
		}
		if( !empty($desc_left_per) ) {
			$style .= 'left:' . $desc_left_per . '%;';
		}
		if( !empty($desc_right_per) ) {
			$style .= 'right:' . $desc_right_per . '%;';
		}
		$style .= '}';
	}
}

//min height
$min_height = $params->get('min_height', 0);
$min_height = intval($min_height);

if( !empty($min_height) ) {
	$style .= '#' . $id . ' .jmm-simple-img-slider-in { min-height: ' . $min_height . 'px; }';
}

//desc width
if( $desc_width == 1 && !empty($desc_width_px) ) {
	$style .= '#' . $id . ' .jmm-text { max-width:'.$desc_width_px.'px; }';
} elseif( $desc_width == 2 && !empty($desc_width_per) ) {
	$style .= '#' . $id . ' .jmm-text { max-width:'.$desc_width_per.'%; }';
}

if( !empty($style) ) {
	$doc->addStyleDeclaration($style);
}


$link_title = $params->get('link_title', 0);

$mod_class_suffix = $params->get('moduleclass_sfx', '');

require JModuleHelper::getLayoutPath('mod_jm_simple_img_slider', $params->get('layout', 'default'));

?>
