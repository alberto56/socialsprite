<?php 

$icons = array(
  'generic',
  'youtube',
  'twitter',
  'rss',
  'flickr',
  'facebook',
  'printer',
);

$sizes = array(
  '32' => 0,
  '24' => 2*32,
  '16' => 2*(32+24),
  '52' => 2*(32+24+16),
  '64' => 2*(32+24+16+52),
);

?><html>
<head>
<style TYPE="text/css"><!--
<?php foreach ($sizes as $size => $y): ?>
.block {
  margin: 5px;
  display: block;
}
.social-icon-<?php print $size; ?> {
  width: <?php print $size; ?>px;
  height: <?php print $size; ?>px;
  background: url(sprite.png);
  text-indent: -20000px;
}
<?php foreach ($icons as $n => $icon): ?>
.social-icon-<?php print $icon; ?>.social-icon-<?php print $size; ?> { 
  background-position: -<?php print $n*$size; ?>px -<?php print $y; ?>px;
}
.social-icon-<?php print $icon; ?>.social-icon-<?php print $size; ?>:hover {
  background-position: -<?php print $n*$size; ?>px -<?php print $y+$size; ?>px;
}
<?php endforeach; ?>
<?php endforeach; ?>
--></style>
</head>
<body>
<?php foreach ($icons as $icon): ?>
<?php foreach ($sizes as $size => $pos): ?>
<a href="#" class="block social-icon-<?php print $icon; ?> social-icon-<?php print $size ?>">test</a>
<?php endforeach; ?>
<?php endforeach; ?>
</body>
</html>