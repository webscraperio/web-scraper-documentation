const sitemap = `
{
	"_id": "webscraper-io-landing",
	"startUrl":[
		"http://webscraper.io/"
	],
	"selectors":[
		{
			"parentSelectors":[
				"_root"
			],
			"type": "SelectorText",
			"multiple": false,
			"id": "title",
			"selector": "h1",
			"regex": ""
		}
	]
}
`;

const response = await client.updateSitemap(500, sitemap);
