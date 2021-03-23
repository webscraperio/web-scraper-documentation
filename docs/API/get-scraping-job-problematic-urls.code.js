let generator = await client.getProblematicUrls(scrapingJobId);
const problematicUrls = await generator.getAllRecords();

// or iterate through all problematic urls manually
generator = await client.getProblematicUrls(scrapingJobId);
for await (const record of await generator.fetchRecords()) {
	console.log(JSON.stringify(record));
}
