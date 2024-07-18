# Sitemap sync

Sitemap sync allows conveniently update sitemap versions between [Web Scraper
Cloud][cloud] and Web Scraper extension. Sitemap sync can be enabled by
connecting the Cloud account to the extension. A single Cloud account can be 
synced with multiple extensions at a time.

## Connecting Cloud to extension

Cloud account can be connected to extension by opening the extension in devtools
and clicking on `Sign in to Cloud` in the top right corner.

![Sign in to Cloud][sign-in]

This will open the Cloud's authentication page or extension authentication page 
if already authenticated. Click on `Connect cloud with extension`. After
the success message has prompted, refresh the sitemap list in the extension. If
the extension has been previously connected to Cloud but disconnected via
extension, the `Re-connect cloud with extension` button will show instead.

## Disconnecting Cloud from extension

The extension can be disconnected from Cloud by opening the extension in 
devtools and clicking on `Logout` in the top right corner.

![Logout from Cloud][logout]

After disconnecting the extension from Cloud, all Cloud sitemaps that were not
downloaded in extension will be discarded from the sitemap list.

## Synchronization states

| Icon                                            | State                                      | Description                                                                                                                                       |
|-------------------------------------------------|--------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------|
| ![Sitemap is not synced][not-synced]            | Latest sitemap version can't be determined | Sitemap names match between Cloud and extension, but the latest sitemap version can't be determined by looking at both sitemap editing histories. |
| ![Sitemap is not synced][not-synced]            | Latest sitemap is in Cloud                 | Last update was made to sitemap in Cloud.                                                                                                         |
| ![Sitemap is not synced][not-synced]            | Latest sitemap is in extension             | Last update was made to sitemap in extension.                                                                                                     |
| ![Sitemap is synced][synced]                    | Sitemaps are synchronized                  | Cloud and extension have the same sitemap.                                                                                                        |
| ![Sitemap is only in Cloud][sync-cloud]         | Sitemap is only in Cloud                   | Sitemap is only in Cloud but can be downloaded in the extension for editing. Sitemap will download automatically if opened.                       |
| ![Sitemap is only in extension][sync-extension] | Sitemap is only in extension               | Sitemap is only in the extension but can be uploaded to Cloud.                                                                                    |


[cloud]: ../Web%20Scraper%20Cloud.md
[not-synced]: ../images/cloud/sitemap-sync/not-synced.svg
[synced]: ../images/cloud/sitemap-sync/synced.svg
[sync-cloud]: ../images/cloud/sitemap-sync/sync-cloud.svg
[sync-extension]: ../images/cloud/sitemap-sync/sync-extension.svg
[sign-in]: ../images/cloud/sitemap-sync/sign-in-to-cloud.png
[logout]: ../images/cloud/sitemap-sync/logout-from-cloud.png

## Sync limitations

User has a limit of 50 sitemap sync actions per 15 minutes.
