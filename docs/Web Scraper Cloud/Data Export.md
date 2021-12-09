# Data export

Web Scraper browser extension supports data export in CSV and XLSX formats while Web
Scraper Cloud supports data export in CSV, XLSX and JSON formats. A JSON
format will be added to the Web Scraper extension in a future release.

## Data export from Web Scraper Extension

Download scraped data via `Export data as CSV` menu selection under
the `Sitemap` menu. Data can be also downloaded while the scraper is running.

![Fig. 1: CSV Data export from Web Scraper extension] [web-scraper-data-export-from-browser-extension]

## Download data from Web Scraper Cloud

Download scraped data via website from `Jobs` or `Sitemaps` sections. Data can
be also downloaded while the scraper is running.

![Fig. 2: CSV Data export from Web Scraper extension] [web-scraper-cloud-data-download]

### Automated data export

Set up automated data export to `Dropbox`, `Google Sheets` or `S3`
via the `Data Export` section. Currently exported data will be in CSV format. Data
will be exported to `Apps/Web Scraper` in your `Dropbox`
, `Google Drive/Web Scraper` in `Google Sheets` and `bucket/web-scraper` in
`S3`.

### Data export via API

Additionally, you can download data via Web Scraper Cloud API in CSV or JSON
formats.

## Data format file structure and limitations

### XLSX

Data in separate cells is limited to 32767 characters. Additional characters
will be cut off. Use other export formats if large text contents are expected in
a single cell. The row count is limited to 1 million rows. In case the data set contains
more than 1 million rows, the data will be split into multiple sub sheets.

![Fig. 4: JSON Data format] [web-scraper-export-format-xlsx-excel]

### JSON

JSON file format contains one JSON record per line. Newline characters found in
data will be escaped as `"\n"` so `\n` character can be safely used as a record
separator.

**Note!** Parsing the entire file as a JSON string will not work since all
records are not wrapped in a JSON array. This was a design decision to make it
easier to parse large files.

![Fig. 4: JSON Data format] [web-scraper-export-format-json]

### CSV

`Comma Separated Values` files format is formatted as described in RFC 4180
standard. Values are quoted in double-quotes `"` and in a case when a double-quote
character is in the text it is escaped with another double-quote character. Lines
are separated with `CR+LF` `\r\n` characters. Additionally CSV files include
byte order mark (BOM) `U+FEFF` characters at the beginning of the file to hint
that the file will be in UTF-8 format. Newline characters are not escaped which
means using `\r\n` as a record separator can result in errors. We recommend
using a CSV reader library when reading CSV files programmatically.

![Fig. 4: CSV Data format] [web-scraper-export-format-csv]

## Opening CSV file with a spreadsheet program

We recommend using [Libre Office Calc] [libre-office-calc] when opening CSV
files. Microsoft office often is incorrectly interpreting CSV files formatted in
RFC 4180 standard. Mostly this is related to text including newline characters.

In case when a CSV file is incorrectly opened by Microsoft Excel try using data
import feature:

1. Start with an empty file
2. Go to the Data tab
3. Choose From Text/CSV

   ![Fig. 6: Excel Choose from Text/CSV] [excel-load-data-from-text-csv]
4. Open CSV file
5. Set up import settings - UTF-8 encoding, Comma delimiter, Do not detect data
   types

   ![Fig. 7: Excel Import CSV Data] [excel-import-csv-data]
6. Load data

[web-scraper-data-export-from-browser-extension]: ../images/data-export/web-scraper-data-export-from-browser-extension.png?raw=true

[web-scraper-cloud-data-download]: ../images/data-export/web-scraper-cloud-data-download.png?raw=true

[web-scraper-export-format-csv]: ../images/data-export/web-scraper-export-format-csv.png?raw=true

[web-scraper-export-format-xlsx-excel]: ../images/data-export/web-scraper-export-format-xlsx-excel.png?raw=true

[web-scraper-export-format-json]: ../images/data-export/web-scraper-export-format-json.png?raw=true

[excel-import-csv-data]: ../images/data-export/excel-import-csv-data.png?raw=true

[excel-load-data-from-text-csv]: ../images/data-export/excel-load-data-from-text-csv.png?raw=true

[libre-office-calc]: https://www.libreoffice.org/discover/calc/
