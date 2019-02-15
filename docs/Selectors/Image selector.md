# Image selector
Image selector can extract `src` attribute (URL) of an image. 

Note! When selecting CSS selector for image selector all the images within the
site are moved to the top. If this feature somehow breaks sites layout please
report it as a bug.

## Configuration options
 * selector - [CSS selector] [css-selector] for the image element.
 * multiple - multiple records are being extracted. Usually should not be
 checked for Image selector.
 * download image - Removed. Previously was used to download images. Use image download script instead.

## Use cases
See [Text selector] [text-selector] use cases.

## Image downloader script

Image downloader script finds image urls scraped by Image Selector in a csv file and downloads them. 
Images are renamed to `<web-scraper-oder>-<selector-name>.ext`. 

### Windows usage

1. Download and install python 3.x from here:
[https://www.python.org/downloads/](https://www.python.org/downloads/)
2. Download image downloader script from here:
[https://github.com/webscraperio/image-downloader][image-downloader]
3. Scrape the target site and export data in CSV format
4. Drag and drop the CSV file on top of the `image-downloader.py`
![Fig. 1: windows image download][windows-image-download-script]

### macOS, Linux usage

1. Install python if necessary through your package manager. Most likely you already have it preinstalled.
2. Download image downloader script from here:
[https://github.com/webscraperio/image-downloader][image-downloader]
3. Move `image-downloader.py` to `Downloads` directory
4. Scrape the target site and export data in CSV format
5. Save the CSV file in `Downloads` directory
6. Open `Terminal` application. You should have one preinstalled
7. Change working to `Downloads` directory by typing:
    ```
    cd Downloads
    ```
8. Run image downloader script by typing:
    ```
    python image-downloader scraped_data.csv
    ```
    
![Fig. 2: macOS image download][osx-image-download-script]

 [text-selector]: Text%20selector.md
 [css-selector]: ../CSS%20selector.md
 [windows-image-download-script]: ../images/selectors/image/win-image-downloader.gif?raw=true
 [osx-image-download-script]: ../images/selectors/image/osx-image-downloader.gif?raw=true
 [image-downloader]: https://github.com/webscraperio/image-downloader/releases