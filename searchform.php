<?php/*
* Programmiert von Sascha Schnetz - http://www.awaits.eu
* Seiten-Template für die Bereiche:
* Ausgabe des Such-Formulars
*/?>

<!-- Beginn searchform -->
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<input type="text" size="put_a_size_here" name="s" id="s" value="Suchbegriff" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
		<input type="submit" id="searchsubmit" value="Suche" class="button" />
	</form>
<!-- Ende searchform -->
