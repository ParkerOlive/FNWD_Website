/**
   * Creates a list of the file names in a directory
   *
   * @param {string} the directory to use.
   * @return {string} The HTML code for the gallery column to display.
   */
//function getFiles(path) {
	var fs = require('fs');
	fs.readdir(path, function(err, items) {
    window.alert(items);
 
    for (var i=0; i<items.length; i++) {
        window.alert(items[i]);
    }
});

//}