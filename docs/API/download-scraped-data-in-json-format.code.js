import fs = require("fs");

const scrapingJobId = 500;
const outputFile = `/tmp/scrapingjob${scrapingJobId}.json`;
await client.downloadScrapingJobJSON(scrapingJobId, outputFile);

// read data from file with built in JSON reader
const reader = new JsonReader(outputFile);
for await (const row of reader.fetchRows()) {
	console.log(`ROW: ${JSON.stringify(row)} \n`);
}

// remove temporary file
fs.unlinkSync(outputFile);
