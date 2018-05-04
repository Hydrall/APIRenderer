<?php
/**
 * @file
 * Theme implementation for the Twitter feed.
 *
 * Available variables:
 * - $message: the error message.
 *
 */
?>
<div class="col-md-12">
<h1 style="display:inline">Tweets</h1><span>  by @<?php print $screen_name ?></span>
	<?php print $content ?>
  <a href="#" class="btn btn-default">Follow me on twitter </a>
</div>
