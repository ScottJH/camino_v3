<?php
 
// Make sure SimplePie is included. You may need to change this to match the location of autoloader.php
// For 1.0-1.2:
#require_once('../simplepie.inc');
// For 1.3+:
require_once('php/autoloader.php');
 
// We'll process this feed with all of the default options.
$feed = new SimplePie();
 
// Set which feed to process.
$feed->set_feed_url('http://caminodocumentary.org/blog/');
 
// Run SimplePie.
$feed->init();
 
// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();
 
// Let's begin our XHTML webpage code.  The DOCTYPE is supposed to be the very first thing, so we'll keep it on the same line as the closing-PHP tag.
?>
	
<!-- error reporting -->

    <?php if ($feed->error): ?>
    	<p><?php echo $feed->error; ?></p>
    <?php endif; ?>

    <?php foreach ($feed->get_items(0, 5) as $item): ?>
				
		<a href="<?php echo $item->get_permalink(); ?>" class="post-link"><?php echo $item->get_title(); ?></a>
	
	<hr />
	
	<?php endforeach; ?>