

// Open External Links as Blank Targets via Unobtrusive JavaScript
// http://perishablepress.com/press/2007/11/20/open-external-links-as-blank-targets-via-unobtrusive-javascript/

function externalLinks() {
	if (!document.getElementsByTagName) return;
	var anchors = document.getElementsByTagName("a");
	for (var i=0; i<anchors.length; i++) {
		var anchor = anchors[i];
		if (
			anchor.getAttribute("href") && ( 
			anchor.getAttribute("rel") == "external" || 
			anchor.getAttribute("rel") == "external nofollow" || 
			anchor.getAttribute("rel") == "nofollow external" )
			)
		anchor.target = "_blank";
	}
}
window.onclick = function() {
	externalLinks();
}