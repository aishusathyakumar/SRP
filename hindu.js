var request = require('request');
var cheerio = require('cheerio');
var fs = require('fs');

request("http://www.thehindu.com/todays-paper/", function(error, response, body) {
  if(error) {
    console.log("Error: " + error);
  }
  console.log("Status code: " + response.statusCode);


var $ = cheerio.load(body);

  var archive = $('.archive-list');
  var archivetext = archive.text();

  fs.appendFileSync('hindu.txt', archivetext + '\n' );
  
 
});



