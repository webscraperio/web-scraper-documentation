import os

scraping_job_id = 500
output_file = f'/tmp/scrapingjob-data{scraping_job_id}.csv'

client.download_scraping_job_csv(scraping_job_id, output_file)

# Use a library that supports RFC 4180 standard to parse the csv file.
# That said we recommend downloading data and using JSON format data.
# CSV format readers and writers have been incorrectly implemented in multiple applications and programming languages.

# remove temporary file
os.remove(output_file)
