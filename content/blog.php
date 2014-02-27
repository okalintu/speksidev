<div class="blog">
	<?php
include '../lib/parsedown.php';

$parser = new Parsedown();

$files = array_reverse(glob('blog/*.txt'));
foreach($files as $filename) {
	$f = file_get_contents($filename);
	echo $parser->parse($f);
	echo '<hr>';
}
?>
</div>