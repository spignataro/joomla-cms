<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$params = $displayData->params;
$images = json_decode($displayData->images);

?>
<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<figure class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image">
		<img
		<?php if ($images->image_intro_caption) : ?>
			<?php echo 'title="' .htmlspecialchars($images->image_intro_caption) .'"'; ?>
		<?php endif; ?>
		src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
		<?php if ($images->image_intro_caption) : ?>
			<figcaption><?php echo htmlspecialchars($images->image_intro_caption); ?></figcaption>
		<?php endif; ?>
	</figure>
<?php endif; ?>
