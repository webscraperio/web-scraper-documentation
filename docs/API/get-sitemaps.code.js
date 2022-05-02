let generator = client.getSitemaps();
const sitemaps = await generator.getAllRecords();

// or iterate through all sitemaps manually
generator = client.getSitemaps();
for await (const record of await generator.fetchRecords()) {
	console.log(JSON.stringify(record));
}
