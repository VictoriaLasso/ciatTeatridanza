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

$count = 0;

?>

<div id="<?php echo $id; ?>" class="jmm-simple-img-slider carousel slide carousel-fade <?php echo $theme_class . ' ' . $desc_position_class . ' ' . $mod_class_suffix; ?>">
	<div class="jmm-simple-img-slider-in carousel-inner">
	<?php

	foreach($output_data as $item) {

	$active = ( $count == 0 ) ? ' active' : '';
	$count++;
	$itemID = $id . '-' . $count;

	?>

	<div id="<?php echo $itemID; ?>" class="jmm-item item item-<?php echo $count . $active; ?>">

		<?php

		$alt = '';

		$image = '<div class="jmm-image ' . $img_align_class . '"><img alt="' . $alt . '" src="' . $item->imagebg . '"></div>';

		?>

		<?php if ( $item->imagebg && $desc_position != 3 ) {
			echo $image;
		} ?>

		<?php if ( $item->title || $item->description ) { ?>
			<div class="jmm-text <?php echo $desc_positon_class; ?>">

				<?php if ( $item->title ) { ?>
					<div class="jmm-title">
						<?php if ( $link_title == 1 && $item->btn_url ) { ?>
							<a href="<?php echo $item->btn_url; ?>">
						<?php } ?>
								<?php echo $item->title; ?>
						<?php if ( $link_title == 1 && $item->btn_url ) { ?>
							</a>
						<?php } ?>
					</div>
				<?php } ?>

				<?php if ( $item->description ) { ?>
					<div class="jmm-desc"><?php echo $item->description; ?></div>
				<?php } ?>

				<?php if ( ($item->btn_name && $item->btn_url) || ($item->btn2_name && $item->btn2_url)  ) { ?>
					<div class="jmm-buttons">

						<?php if ( $item->btn_name && $item->btn_url ) {

							$btn_icon = ( $item->btn_icon ) ? '<span class="' . $item->btn_icon . '" aria-hidden="true"></span>' : '';
							$btn_name = $item->btn_name;

						?>
							<a class="btn" href="<?php echo $item->btn_url; ?>"><?php echo $btn_name . $btn_icon ?></a>
						<?php } ?>

						<?php if ( $item->btn2_name && $item->btn2_url ) {

							$btn2_icon = ( $item->btn2_icon ) ? '<span class="' . $item->btn2_icon . '" aria-hidden="true"></span>' : '';
							$btn2_name = $item->btn2_name;

						?>
							<a class="btn" href="<?php echo $item->btn2_url; ?>"><?php echo $btn2_name . $btn2_icon ?></a>
						<?php } ?>

					</div>
				<?php } ?>

			</div>
		<?php } ?>

		<?php if ( $item->imagebg && $desc_position == 3 ) {
			echo $image;
		} ?>

	</div>

	<?php

	}

	?>
	</div>

	<?php if( $show_indicators == 1 && $elements > 1 ) : ?>
	<ol class="carousel-indicators">
		<?php for($i = 0; $i < $elements; $i++ ) {
			$class = ( $i == 0 ) ? ' class="active"' : '';
			$idi = $i + 1;
			$itemID = $id . '-' . $idi;
		?>
		<li data-target="#<?php echo $id; ?>" data-slide-to="<?php echo $i; ?>"<?php echo $class; ?>><a href="#<?php echo $itemID; ?>" class="sr-only"><span class="name"><?php echo JText::_('MOD_JM_SIMPLE_IMG_SLIDER_FIELD_SLIDE'); ?></span><span class="number"><?php echo $idi; ?></span></a></li>
		<?php } ?>
	</ol>
	<?php endif; ?>
</div>
