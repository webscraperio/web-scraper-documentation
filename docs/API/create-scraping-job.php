<?php
$response = $client->createScrapingJob([
	'sitemap_id' => 123,
	'driver' => 'fast', // 'fast' or 'fulljs'
	'page_load_delay' => 2000,
	'request_interval' => 2000,
	'proxy' => 0, // optional. 0 - no proxy, 1 - use proxy. Or proxy id for Scale plan users
]);

// response
['id' => 500]
