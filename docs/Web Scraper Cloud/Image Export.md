# Image Export

Web Scraper Cloud supports automated image export to `Amazon S3, Google Cloud Storage, and Azure Blob Storage`. This feature is available exclusively for `Scale` plan users.

## Image Export Configuration

The Image Export tab will be visible when the sitemap contains at least one `Image` selector.

![Fig. 1: Image Export Tab in Web Scraper Cloud][image-export-tab-web-scraper-cloud]

## Exported Image Location

Images are exported to the same path as the data export, within an `images` subfolder. For example, if data is exported to `bucket/web-scraper/my-sitemap` in S3, images will be exported to `bucket/web-scraper/my-sitemap/images`.

## Image Columns

Each `Image` selector creates a separate column in the exported data. The column name follows the format `{image_selector_id}_stored_filename`. File names are generated using the SHA-256 hash of the image URL.

![Fig. 2: Image Export Column Name][image-export-column-name]

## Image Column Structure Based on Selector Configuration

Example image selector ID: `product_image`

* **First record only** - `product_image, product_image_stored_filename`
* **Multiple records in multiple columns** - `product_image_1, product_image_1_stored_filename, product_image_2, product_image_2_stored_filename, ...`
* **Multiple records in one column** - `product_image, product_image_stored_filename` (file names separated by newlines)

[image-export-tab-web-scraper-cloud]: ../images/image-export/image-export-tab-web-scraper-cloud.png?raw=true
[image-export-column-name]: ../images/image-export/image-export-column-name.png?raw=true

description: Web Scraper Cloud supports automated image export to Amazon S3, Google Cloud Storage, and Azure Blob Storage
keywords: image export, image download, automated image export, web scraper cloud image export
