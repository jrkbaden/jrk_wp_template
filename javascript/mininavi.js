/**
 * mininavi.js V 1.0b
 * developed by goodRanking 2008
 * autor: M.Hoffmann
 * requires mootools.js V1.2
**/

/******************** Konfiguration ***************************/
// Template-URL und DIV-IDs
//var templateURL = "/javascript/mininavi.html";
var naviId  = "miniNavi";
var toolTipId = "toolTip";

// Button-Style fuer Activ und normal
var btn_style_activ = "border-color:#F29400;";
var btn_style_normal = "";
var standardClasses = "";

// Buttons (btn[] = new Array(id, ToolTip))
var btn = new Array();
btn["klein"]  = new Array('btnKlein', 'Text normal');
btn["gross"]  = new Array('btnGross', 'Text gro&szlig;');
btn["kontrast"] = new Array('btnKontrast', 'Kontrast');
/***************** ENDE Konfiguration **************************/

/*********** ONLOAD-Action (miniNavi init. und load) ***********/

window.addEvent('domready', function(){
	var miniNavi = new MiniNavi(naviId);
});

/*********************** ENDE ONLOAD-Action *********************/

/************************ Class MiniNavi ************************/
var kontrast_activ = false; // true || false
var btn_activ = ""; 

function MiniNavi(naviId){
	Cookie.write("bodyClass", $$("body").getProperty("class"));
	standardClasses = $$("body").getProperty("class");

	this.id = naviId;
	this.parentDiv = $(this.id); // miniNavi-DIV
	
	var btn_klein = $(btn["klein"][0]);
	var btn_gross = $(btn["gross"][0]);
	var btn_kontrast = $(btn["kontrast"][0]);
	var toolTip = $(toolTipId);
	
	if($chk(this.parentDiv)){
		// Button Klein - Events
		if($chk(btn_klein)){
			$$("body").setProperty("class", standardClasses + " klein"+((kontrast_activ)? " kontrast" : ""));
			btn_klein.addEvent('click', function(){ 
				$$("body").setProperty("class", standardClasses + " klein"+((kontrast_activ)? " kontrast" : ""));
				this.set("style", btn_style_activ);
				if($chk(btn_gross)){ btn_gross.set("style", btn_style_normal); }
				btn_activ = "klein ";
				setCookie(btn_activ, kontrast_activ);
				return true; 
			});
			btn_klein.addEvent('mouseover', function(){ 
				if($chk(toolTip)){ toolTip.set('html', ((btn["klein"][1]!="")? btn["klein"][1] : "&nbsp;")); }
				return true; 
			});
			btn_klein.addEvent('mouseout', function(){ 
				if($chk(toolTip)){ toolTip.set('html', "&nbsp;"); }
				return true; 
			});
		}
	
		// Button Gross - Events
		if($chk(btn_gross)){
			btn_gross.addEvent('click', function(){
				$$("body").setProperty("class", standardClasses + " gross"+((kontrast_activ)? " kontrast" : ""));
				if ($$("body").getProperty("class").indexOf("klein") > -1){
					$$("body").Property("class").replace("klein", "gross");
				}
				this.set("style", btn_style_activ);
				if($chk(btn_klein)){ btn_klein.set("style", btn_style_normal); }
				btn_activ = "gross ";
				setCookie(btn_activ, kontrast_activ);
				return true; 
			});
			btn_gross.addEvent('mouseover', function(){ 
				if($chk(toolTip)){ toolTip.set('html', ((btn["gross"][1]!="")? btn["gross"][1] : "&nbsp;")); }
				return true; 
			});
			btn_gross.addEvent('mouseout', function(){ 
				if($chk(toolTip)){ toolTip.set('html', "&nbsp;"); }
				return true; 
			});
		}
		
		// Button Kontrast - Events
		if($chk(btn_kontrast)){
			btn_kontrast.addEvent('click', function(){ 
				if(!kontrast_activ){
					$$("body").setProperty("class", standardClasses + " " + btn_activ + "kontrast");
					this.set("style", btn_style_activ);	
					kontrast_activ = true;
					setCookie(btn_activ, kontrast_activ);
				}else{
					$$("body").setProperty("class", standardClasses + " " + btn_activ);
					this.set("style", btn_style_normal);
					kontrast_activ = false;
					setCookie(btn_activ, kontrast_activ);
				}
				return true; 
			});
			btn_kontrast.addEvent('mouseover', function(){ 
				if($chk(toolTip)){ toolTip.set('html', ((btn["kontrast"][1]!="")? btn["kontrast"][1] : "&nbsp;")); }
				return true; 
			});
			btn_kontrast.addEvent('mouseout', function(){ 
				if($chk(toolTip)){ toolTip.set('html', "&nbsp;"); }
				return true; 
			});
		}
	}
	iniCookieValues();
}
/******************** ENDE Class MiniNavi ************************/

/********************* Cookie Funktionen *************************/
function iniCookieValues(){
	//button Schriftgröße ggf. markieren
	
	var btnActiv = "";
	if($chk(Cookie.read("btn_activ"))){
		btnActiv = Cookie.read("btn_activ").replace(" ", "");
		if($chk($(btn[btnActiv][0]))){
			$(btn[btnActiv][0]).set("style", btn_style_activ); 
			btn_activ = btnActiv+" ";
		}
	}
	
	//button Kontrast ggf. markieren
	if($chk(Cookie.read("kontrast_activ")) && $chk($(btn["kontrast"][0])) ){
		if(Cookie.read("kontrast_activ")=="true") {
			$(btn["kontrast"][0]).set("style", btn_style_activ); 
			kontrast_activ = "kontrast";
		}else kontrast_activ = "";
	}
}

function setCookie(btn_activ, kontrast_activ){
	Cookie.write("btn_activ", btn_activ);
	Cookie.write("kontrast_activ", kontrast_activ);
}
/******************** ENDE Cookie Funktionen *********************/
