<?php
use WebScraper\ApiClient\Client;
use WebScraper\ApiClient\Reader\JsonReader;

// NOTE! validate that request came from web scraper by sending a secret token
// in URL

$scrapingJobId = (int) $_POST['scrapingjob_id'];
$status = $_POST['status'];
$sitemapId = (int) $_POST['sitemap_id'];
$sitemapName = $_POST['sitemap_name'];

// Send web scraper a successful response that the notification is received and
// continue working on it. This speeds up notification delivery on web scraper
// part and the script won't be stopped after web scraper closes connection.
// More information here:
// http://stackoverflow.com/questions/15273570/continue-processing-php-after-sending-http-response
ignore_user_abort(true);
header('Connection: close');
header('Content-Length: '.ob_get_length());
ob_end_flush();
ob_flush();
flush();

// NOTE! Data import in this example is executed in the same request but it
// would be much smarter to do this in a queued job. Queued jobs can be
// restarted and rerun in case something fails.
$client = new Client([
	'token' => 'YOUR API TOKEN',
]);

// download JSON file locally
$outputFile = "/tmp/scrapingjob-data{$scrapingJobId}.json";
try {
	$client->downloadScrapingJobJSON($scrapingJobId, $outputFile);

	// read data from file with built in JSON reader
	$reader = new JsonReader($outputFile);
	$rows = $reader->fetchRows();
	foreach($rows as $row) {
		// Import records into database. Importing records in bulk will speed up
		// the process.
	}
} finally {
	// make sure output file is always deleted
	unlink($outputFile);
}

// delete scraping job because you probably don't need it
$client->deleteScrapingJob($scrapingJobId);
