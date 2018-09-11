<?php 

/**
 * @file
 * Default theme implementation to format photo-gallery page
 *
 * Available variables:
 * - $content: Feed content
 * - $page_link: Link to 'photo-gallery'
 * 
 */
 ?>
<div id="photo-feed-list-sidebar" class="photo-feed">
	<h2 class="photo-feed-title"><?php print $title ?></h2>
	<div class="photo-feed-content"><?php print $content ?></div>
	<?php if ($page_link != ''): ?>
		<div class="read-more"><?php print $page_link ?></div>
	<?php endif; ?>
</div>