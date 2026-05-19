<?php
$green = chr(27) . '[32m';
$reset = chr(27) . '[0m';

$domains = array();
for ($i = 1; $i <= 30; $i++) {
	$domains[] = sprintf('molapp-%04d', $i);
}

foreach ($domains as $domain) {
	echo "\n{$green}Checked{$reset}: [$domain].";
	sleep(1);
}