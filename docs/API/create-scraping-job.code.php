$response = $client->createScrapingJob([
	'sitemap_id' => 123,
	'driver' => 'fast', // 'fast' or 'fulljs'
	'page_load_delay' => 2000,
	'request_interval' => 2000,
	'proxy' => 0, // optional. 0 - no proxy, 1 - use proxy. Or proxy id for Scale plan users
	'start_urls' => [   // optional, if set, will overwrite sitemap start URLs
		'https://www.webscraper.io/test-sites/e-commerce/allinone/computers',
		'https://www.webscraper.io/test-sites/e-commerce/allinone/phones'
	],
	'custom_id' => 'custom-scraping-job-12' // optional, will be included in webhook notification
]);
