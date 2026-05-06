<?php
$domains = array();
for ($i = 1; $i <= 50; $i++) {
	$domains[] = sprintf('molapp-%04d', $i);
}

foreach ($domains as $domain) {
   echo "\nChecked: [$domain].";
   sleep(1);
}