// ES6 import
import { Client } from "@webscraperio/api-client-nodejs";

// or CommonJS require
const api = require("@webscraperio/api-client-nodejs");
const Client = api.Client;

const client = new Client({
	token: "your api token",
	useBackoffSleep: false
});
