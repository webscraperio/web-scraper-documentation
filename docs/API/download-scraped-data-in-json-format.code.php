use WebScraper\ApiClient\Reader\JsonReader;

$scrapingJobId = 500;
$outputFile = "/tmp/scrapingjob{$scrapingJobId}.json";
$client->downloadScrapingJobJSON($scrapingJobId, $outputFile);

// read data from file with built in JSON reader
$reader = new JsonReader($outputFile);
$rows = $reader->fetchRows();
foreach ($rows as $row) {
	echo "ROW: " . json_encode($row) . "\n";
}

// remove temporary file
unlink($outputFile);
