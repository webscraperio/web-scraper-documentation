<?php
$sitemaps = $client->getSitemaps();

// response (Iterator):
[
	[
		'id' => 123,
		'name' => 'webscraper-io-landing',
	],
];

// iterate through all sitemaps
$sitemaps = $client->getSitemaps();
foreach($sitemaps as $sitemap) {
	var_dump($sitemap);
}

// iterate through all sitemaps while manually handling pagination
$iterator = $client->getSitemaps();
$page = 1;
do {
	$sitemaps = $iterator->getPageData($page);
	foreach($sitemaps as $sitemap) {
		var_dump($sitemap);
	}
	$page++;
} while($page <= $iterator->getLastPage());
