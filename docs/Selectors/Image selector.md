# Image selector
Image selector can extract `src` attribute (URL) of an image. 

**Note!** When selecting CSS selector for image selector all the images within the
site are moved to the top. If this feature somehow breaks sites layout please
report it as a bug.

## Configuration options
 * selector - [CSS selector] [css-selector] for the image element.
 * multiple type - The way multiple extracted images should be handled.
 * column count - the number of columns returned when multiple type is set to
  `Multiple Records in Multiple Columns`

## Use cases
See [Text selector] [text-selector] use cases.

## Image downloader script

Image downloader script finds image urls scraped by Image Selector in a csv file and downloads them. 
It will try to download images from all URLs that are stored in columns that 
names end with `-src`. `web-scraper-order` and `web-scraper-start-url` columns are 
required in order for script to work. Images are renamed to 
`<web-scraper-order>-<selector-name>.ext`. 

### Windows usage

1. Download and install python 3.x from here:
[https://www.python.org/downloads/](https://www.python.org/downloads/)
2. Download image downloader script from here:
[https://github.com/webscraperio/image-downloader/tags][image-downloader]
3. Scrape the target site and export data in CSV format
4. Drag and drop the CSV file on top of the `image-downloader.py`
![Fig. 1: windows image download][windows-image-download-script]

### macOS, Linux usage

1. Install python if necessary through your package manager. Most likely you already have it pre-installed.
2. Download image downloader script from here:
[https://github.com/webscraperio/image-downloader/tags][image-downloader]
3. Move `image-downloader.py` to `Downloads` directory
4. Scrape the target site and export data in CSV format
5. Save the CSV file in `Downloads` directory
6. Open `Terminal` application. You should have one pre-installed
7. Change working to `Downloads` directory by typing:
    ```sh
    cd Downloads
    ```
8. Run image downloader script by typing:
    ```sh
    python image-downloader.py scraped_data.csv
    ```
    
![Fig. 2: macOS image download][osx-image-download-script]

### Multiple Type

A specific selector can find multiple items on a single site. To handle this a `Multiple Type`
is available when creating the selector. The selected type affects
how data is returned

* `First Record Only` - returns only the first record extracted. Use when only one image expected
* `Multiple Records in Multiple Columns` - returns multiple records split into up to `Column Count` columns.
  Enables and Requires filling `Column count` (defaults to 5)
* `Multiple Records in One Column` - returns all extracted records in a single column joined by newline

 [text-selector]: Text%20selector.md
 [css-selector]: ../CSS%20selector.md
 [windows-image-download-script]: ../images/selectors/image/win-image-downloader.gif?raw=true
 [osx-image-download-script]: ../images/selectors/image/osx-image-downloader.gif?raw=true
 [image-downloader]: https://github.com/webscraperio/image-downloader/tags

description: Extract image URLs and download images from websites using Web Scraper's Image selector with multiple handling options
keywords: image selector, web scraper, image download, src attribute, CSS selector, image extraction, python script, bulk download
