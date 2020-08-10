$scrapingJobIterator = $client->getScrapingJobs($sitemapId = null);

// iterate through all scraping jobs
foreach($scrapingJobIterator as $scrapingJob) {
	var_dump($scrapingJob);
}

// or iterate through all scraping jobs while manually handling pagination
$page = 1;
do {
	$scrapingJobs = $scrapingJobIterator->getPageData($page);
	foreach($scrapingJobs as $scrapingJob) {
		var_dump($scrapingJob);
	}
	$page++;
} while($page <= $scrapingJobIterator->getLastPage());
