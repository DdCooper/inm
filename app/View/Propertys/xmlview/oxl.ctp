<h2>oxl.ctp</h2>

<?php

$xmlCode = null ;

	for ( $i=0 ; $i < count( $publish ) ; $i++ ){

$xmlCode .= '
<?xml version="1.0" encoding="UTF-8"?>
	 <ADS>
	  <AD>
	    <ID><![CDATA[ ' . $publish[$i]["Property"]["id"] . ' ]]></ID>
	    <TITLE><![CDATA['. $publish[$i]["Property"]["title"] . ' ]]></TITLE>
	    <DESCRIPTION><![CDATA[' . $publish[$i]["Property"]["description"] . ']]></DESCRIPTION>

	    <EMAIL><![CDATA[ ' /*. $publish[$i]["Property"]["email"] */. ' ]]></EMAIL>
	    <PHONE><![CDATA[ ' /*. $publish[$i]["Property"]["phone"]*/ . ' ]]></PHONE>

	    <ADDRESS><![CDATA[ ' . $publish[$i]["Property"]["street_address"] . ' ]]></ADDRESS>
	    <ZIP_CODE><![CDATA[ '/*. $publish[$i]["Property"]["zipCode"]*/ . ' ]]></ZIP_CODE>
	    <LOCATION_COUNTRY><![CDATA[ '. /*$publish[$i]["Property"]["country"] .*/ ' ]]></LOCATION_COUNTRY>
	    <LOCATION_STATE><![CDATA[ MA ]]></LOCATION_STATE>
	    <LOCATION_CITY><![CDATA[ '. $publish[$i]["Property"]["city_name"] . ' ]]></LOCATION_CITY>
	    <CATEGORY><![CDATA[ '. /*$publish[$i]["Property"]["category"] .*/ ' ]]></CATEGORY>
	    <!--
	    <YEAR>2009</YEAR>
	    <MAKE>Ford</MAKE>
	    <MODEL>Focus</MODEL>
	    <MILEAGE>150000</MILEAGE>
	    <CONDITION>new</CONDITION>
	    -->
	    <IMAGE_URL><![CDATA[ '. $publish[$i]["Property"]["pick_url"] . ' ]]></IMAGE_URL>
	    <!--
	    <IMAGE_URL><![CDATA[ http://www.yourdomain.com/image-2.png ]]></IMAGE_URL>
	    <IMAGE_URL><![CDATA[ http://www.yourdomain.com/image-3.png ]]></IMAGE_URL>    
	    <IMAGE_URL><![CDATA[ http://www.yourdomain.com/image-n.png ]]></IMAGE_URL>
	    -->
	    <PRICE>'. $publish[$i]["Property"]["price"] . '</PRICE>
	    <CURRENCY>'/*. $publish[$i]["Property"]["priceUnit"]*/ . '</CURRENCY>
	  </AD>
	 </ADS>';

	}

	$name = 'oxl.xml' ;
	$file = fopen( $name, "w+" ) ;
	fwrite( $file, $xmlCode ) ;
	fclose( $file ) ;
?>