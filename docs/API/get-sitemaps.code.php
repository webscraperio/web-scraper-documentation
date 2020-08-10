$sitemapIterator = $client->getSitemaps();

// iterate through all sitemaps
foreach($sitemapIterator as $sitemap) {
	var_dump($sitemap);
}

// or iterate through all sitemaps while manually handling pagination
$page = 1;
do {
	$sitemaps = $sitemapIterator->getPageData($page);
	foreach($sitemaps as $sitemap) {
		var_dump($sitemap);
	}
	$page++;
} while($page <= $sitemapIterator->getLastPage());
