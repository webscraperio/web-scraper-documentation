generator = client.get_scraping_jobs({
	"sitemap_id": None
})
scraping_jobs = generator.get_all_records()

# or iterate through all scraping jobs manually
generator = client.get_scraping_jobs({
	"sitemap_id": None
})
for record in generator.fetch_records():
	print(record)
