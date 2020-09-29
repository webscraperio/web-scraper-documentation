use League\Csv\Reader;

$scrapingJobId = 500;
$outputFile = "/tmp/scrapingjob-data{$scrapingJobId}.csv";
$client->downloadScrapingJobCSV($scrapingJobId, $outputFile);

$records = Reader::createFromPath($outputFile)->fetchAssoc();

foreach($records as $record) {
	// Import records into database. Importing records in bulk will speed up
	// the process.
}

// remove temporary file
unlink($outputFile);
