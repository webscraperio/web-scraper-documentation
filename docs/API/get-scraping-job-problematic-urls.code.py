generator = client.get_problematic_urls(scraping_job_id)
problematic_urls = generator.get_all_records()

# or iterate through all problematic urls manually
generator = client.get_problematic_urls(scraping_job_id)
for record in generator.fetch_records():
	print(record)
