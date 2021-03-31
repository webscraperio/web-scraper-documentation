generator = client.get_sitemaps()
sitemaps = generator.get_all_records()

# or iterate through all sitemaps manually
generator = client.get_sitemaps()
for record in generator.fetch_records():
    print(record)
