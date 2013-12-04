<h2>yakaz.ctp</h2>

<?php

print_r($publish);

$xmlCode = null ;

	for ( $i=0 ; $i < count( $publish ) ; $i++ ){

$xmlCode .= '
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
	<!DOCTYPE yakaz PUBLIC "" "http://www.yakaz.com/yakaz.dtd" >

	<yakaz version="1.0">
	<ad-housing category="' /*. $transaction */. '"> <!-- for each housing rentals ad -->
	<what>
		<title>' . $publish[$i]["Property"]["title"] . '</title>
		<description>' . $publish[$i]["Property"]["description"] . '</description>
		<ad-url>' . $publish[$i]["Property"]["url"] . '</ad-url>
		<picture-url>' . $publish[$i]["Property"]["pick_url"] . '</picture-url>
		<!-- no logo - option -->
		<price unit=' /*. $publish[$i]["Property"]["priceUnit"]*/ . '>' . $publish[$i]["Property"]["price"] . '</price>
		<!-- unit can be "euro", "dollar", "pound", "peso" - 0 if no price -->
		<rooms>' . $publish[$i]["Property"]["rooms"] . '</rooms>
		<!-- rooms number - option -->
		<bedrooms>' . $publish[$i]["Property"]["bedrooms"] . '</bedrooms>
		<!-- bedrooms number - option -->
		<bathrooms>' . $publish[$i]["Property"]["bathrooms"] . '</bathrooms>
		<!-- bathrooms number - option -->
		<surface unit=' . /*$publish[$i]["Property"]["surfaceUnit"] .*/ '>' . $publish[$i]["Property"]["surface"] . '</surface>
		<!-- unit can be "m2" or "sqft" - option -->
	</what>
	<where>
		<street-address display-address=' . /*$publish[$i]["Property"]["displayAddress"] .*/ '>' . $publish[$i]["Property"]["street_address"] . '</street-address>
		<!-- option -->
		<city-name>' . $publish[$i]["Property"]["city_name"] . '</city-name>
		<zip-code>' . /*$publish[$i]["Property"]["zipCode"] .*/ '</zip-code>
		<country>' . /*$publish[$i]["Property"]["country"] .*/ '</country>
		<!-- country codes : FR, ES, UK, DE, US, IT, MX, AR, CL -->
	</where>
</ad-housing>';

	}

	$name = 'yakaz.xml' ;
	$file = fopen( $name, "w+" ) ;
	fwrite( $file, $xmlCode ) ;
	fclose( $file ) ;
?>

<!--
<br><hr><br>
<code>
	<?php echo htmlentities( $xmlCode ) ; ?>
</code>
-->