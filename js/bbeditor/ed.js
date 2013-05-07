var textarea;
var content;
document.write("<link href=\"js/bbeditor/styles.css\" rel=\"stylesheet\" type=\"text/css\">");

function edToolbar(obj) {
    document.write("<div class=\"toolbar\">");
	document.write("<img class=\"button\" src=\"js/bbeditor/images/link.gif\" name=\"btnLink\" title=\"Infoga länk\" onClick=\"doAddTags('[url]','[/url]','" + obj + "')\">Infoga länk</div>");
	//document.write("<textarea id=\""+ obj +"\" name = \"" + obj + "\" cols=\"" + width + "\" rows=\"" + height + "\"></textarea>");
}

function doAddTags(tag1,tag2,obj)
{
textarea = document.getElementById(obj);
	// Code for IE
		if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				//alert(sel.text);
				sel.text = tag1 + sel.text + tag2;
			}
   else 
    {  // Code for Mozilla Firefox
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
		
		var scrollTop = textarea.scrollTop;
		var scrollLeft = textarea.scrollLeft;

		
        var sel = textarea.value.substring(start, end);
	    //alert(sel);
		var rep = tag1 + sel + tag2;
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;		
	}
}

