
<?php
header('Content-Type: text/html; charset=utf-8');

if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

require_once 'src/Feed.php';

$rss = Feed::loadRss('https://www.eurogamer.net/?format=rss&platform=MMO');

?>

<h1><?php echo htmlSpecialChars($rss->title) ?></h1>

<p><i><?php echo htmlSpecialChars($rss->description) ?></i></p>

<?php foreach ($rss->item as $item): ?>
	<h2><a href="<?php echo htmlSpecialChars($item->link) ?>"><?php echo htmlSpecialChars($item->title) ?></a>

	<?php if (isset($item->{'content:encoded'})): ?>
		<div><?php echo $item->{'content:encoded'} ?></div>
	<?php else: ?>
		<p><?php echo ($item->description) ?></p>
	<?php endif ?>
<?php endforeach ?>
