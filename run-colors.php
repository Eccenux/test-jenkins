<?php
$domains = array();
for ($i = 1; $i <= 30; $i++) {
    $domains[] = sprintf('molapp-%04d', $i);
}

foreach ($domains as $domain) {
    // echo "\nChecked: [$domain].";
    echo "\n\033[32mChecked\033[0m: [$domain].";
    sleep(1);
}