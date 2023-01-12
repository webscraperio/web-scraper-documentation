let generator = client.getScrapingJobs({
	sitemap_id: 123, // optional
});
const scrapingJobs = await generator.getAllRecords();

// or iterate through all scraping jobs manually
generator = client.getScrapingJobs({
	sitemap_id: 123, // optional
});
for await (const record of await generator.fetchRecords()) {
	console.log(JSON.stringify(record));
}
