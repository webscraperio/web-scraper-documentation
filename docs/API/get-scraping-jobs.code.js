let generator = await client.getScrapingJobs({
	sitemap_id: undefined,
});
const scrapingJobs = await generator.getAllRecords();

// or iterate through all scraping jobs manually
generator = await client.getScrapingJobs({
	sitemap_id: undefined,
});
for await (const record of await generator.fetchRecords()) {
	console.log(JSON.stringify(record));
}
