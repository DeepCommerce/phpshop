<?php

namespace Deepcommerce\Phpshop\Helper;

class HtmlHelper {

	/**
	 * Generate a list of rating stars *****
	 * @param float $rating
	 * @param int $size
	 * @return string
	 */
	public static function ratingStars($rating, $size = 5) {
		$html = '';
		for ($i = 0; $i < 5; $i++) {
			$color = ($i+0.5 <= $rating) ? 'yellow' : 'gray';
			$html .= '<svg class="h-' . $size . ' w-' . $size . ' shrink-0 inline-block text-' . $color . '-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
				</svg>';
		}
		return $html;
	}

}