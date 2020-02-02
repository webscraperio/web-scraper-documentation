<?php

use League\Csv\Reader;

// Download CSV
$outputFile = "/tmp/scrapingjob-data{$scrapingJobId}.csv";
$client->downloadScrapingJobCSV($scrapingJobId, $outputFile);

// read CSV file
$records = Reader::createFromPath($outputFile)->fetchAssoc();

foreach($records as $record) {
	// Import records into database. Importing records in bulk will speed up
	// the process.
}
