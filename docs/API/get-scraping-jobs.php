<?php
$client->getScrapingJobs($sitemapId = null);

// response (iterator)
[
	[
		'id' => 500,
		'sitemap_name' => 'webscraper-io-landing',
		'status' => 'scheduling',
		'sitemap_id' => 123,
		'test_run' => 0,
		'jobs_scheduled' => 0,
		'jobs_executed' => 0,
		'jobs_failed' => 0,
		'jobs_empty' => 0,
		'stored_record_count' => 0,
		'request_interval' => 2000,
		'page_load_delay' => 2000,
		'driver' => 'fast',
		'scheduled' => 0, // scraping job was started by scheduler
		'time_created' => '1493370624', // unix timestamp
	],
	[
	...
	],
]

// iterate through all scraping jobs
$scrapingJobs = $client->getScrapingJobs();
foreach($scrapingJobs as $scrapingJob) {
	var_dump($scrapingJob);
}

// iterate through all scraping jobs while manually handling pagination
$iterator = $client->getScrapingJobs();
$page = 1;
do {
	$scrapingJobs = $iterator->getPageData($page);
	foreach($scrapingJobs as $scrapingJob) {
		var_dump($scrapingJob);
	}
	$page++;
} while($page <= $iterator->getLastPage());