var browserName=navigator.appName;var browserVer=parseInt(navigator.appVersion);var version="";var msie4=(browserName=="Microsoft Internet Explorer"&&browserVer>=4);if((browserName=="Netscape"&&browserVer>=3)||msie4||browserName=="Konqueror"||browserName=="Opera"){version="n3";}else{version="n2";}
function blurLink(theObject){if(msie4){theObject.blur();}}

/** Generierung der Email fuer den Email-Client **/
var mailTo = "";
window.addEvent('domready', function(){
	//kontakformular
	if($chk('sendToButton') && $('sendToButton')!=null){
		mailTo = $('sendToButton').get("href");
	}else mailTo = "";
	//seite empfehlen
	if($chk('empfehlen')){
		$('empfehlen').addEvent('click', function(){
			var subject = "?subject=Seitenempfehlung";
			var message = "&body="+window.location.href;
			$('empfehlen').set("href", "mailto:"+subject+message);
		});
	}

});

function sendForm(formID, ahref){
	var subject = "?subject="+$(formID).elements["mailformbetreff"].value;
	var message = "&body=";
	message += "Name: "+validateValue($(formID).elements["mailformname"].value)+"%0A";
	message += "Email: "+validateValue($(formID).elements["mailformemail"].value)+"%0A";
	message += ($(formID).elements["mailformaddress"].value!="")? "Adresse: "+validateValue($(formID).elements["mailformaddress"].value)+"%0A" : "";
	message += ($(formID).elements["mailformnachricht"].value!="")? "%0ANachricht: "+validateValue($(formID).elements["mailformnachricht"].value)+"%0A" : "";
	if(mailTo != "") ahref.set("href", mailTo+subject+message);
}

function validateValue(val){
	var value0 = val.replace(/ /g, "%20");
	var value1 = value0.replace(/\n/g, "%0A");
	var value2 = value1.replace(/&/g, "%26");
	var value3 = value2.replace(/-/g, "%2D");
	return value3;
}
/** ENDE: Generierung der Email fuer den Email-Client **/

