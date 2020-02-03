<?php

use League\Csv\Reader;

// Download CSV
$outputFile = "/tmp/scrapingjob-data{$scrapingJobId}.csv";
$client->downloadScrapingJobCSV($scrapingJobId, $outputFile);

// read CSV file
// NOTE! We recommend using json format since multiple CSV notations are
// being used by different products. For example:
// CSV Standard: https://tools.ietf.org/html/rfc4180
// MS Excel cannot handle escape sequences from the CSV standard
// PHP has incorrect default implementation. See https://wiki.php.net/rfc/kill-csv-escaping
$records = Reader::createFromPath($outputFile)->fetchAssoc();

foreach($records as $record) {
	// Import records into database. Importing records in bulk will speed up
	// the process.
}
