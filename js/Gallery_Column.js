/**
   * Creates HTML Code for an image gallery column
   *
   * @param {Object Array} column_array the array of images and discriptions to use.
   * @return {string} The HTML code for the gallery column to display.
   */
function CreateColumn(column_array) {
	var result = "";
	for(i = 0; i < column_array.length; i++) {
		result += "<a href=\"" + column_array[i].file + "\" data-lightbox=\"Fine_Art\" data-title=\"" + column_array[i].disc + "\"><img src=\"" + column_array[i].file + "\"></a>";
	}
	return result;
}