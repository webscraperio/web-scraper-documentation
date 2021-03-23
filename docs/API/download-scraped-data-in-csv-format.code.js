import fs = require("fs");

const scrapingJobId = 500;
const outputFile = `/tmp/scrapingjob-data${scrapingJobId}.csv`;
await client.downloadScrapingJobCSV(scrapingJobId, outputFile);

// Use a library that supports RFC 4180 standard to parse the csv file.
// That said we recommend downloading data and using JSON format data.
// CSV format readers and writers have been incorrectly implemented in multiple applications and programming languages.

// remove temporary file
fs.unlinkSync(outputFile);
