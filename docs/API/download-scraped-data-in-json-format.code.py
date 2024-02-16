import os

scraping_job_id = 500
output_file = f'/tmp/scrapingjob-data{scraping_job_id}.json'

client.download_scraping_job_json(scraping_job_id, output_file)

# read data from file with built in JSON reader
reader = JsonReader(output_file)

for record in reader.fetch_rows():
    print(f"ROW: {record} \n")

# remove temporary file
os.remove(output_file)
