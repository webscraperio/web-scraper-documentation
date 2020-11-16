$problematicUrlsIterator = $client->getProblematicUrls($scrapingJobId);

// iterate through all urls
foreach($problematicUrlsIterator as $problematicUrl) {
	var_dump($problematicUrl);
}

// or iterate through all problematic urls while manually handling pagination
$page = 1;
do {
	$problematicUrls = $problematicUrlsIterator->getPageData($page);
	foreach($problematicUrls as $problematicUrl) {
		var_dump($problematicUrl);
	}
	$page++;
} while($page <= $problematicUrlsIterator->getLastPage());
