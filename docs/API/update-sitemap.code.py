sitemap = {
	"_id": "webscraper-io-landing",
	"startUrl": [
		"http://webscraper.io/"
	],
	"selectors": [
		{
			"parentSelectors": [
				"_root"
			],
			"type": "SelectorText",
			"multiple": False,
			"id": "title",
			"selector": "h1",
			"regex": ""
		}
	]
}

response = client.update_sitemap(500, sitemap)
