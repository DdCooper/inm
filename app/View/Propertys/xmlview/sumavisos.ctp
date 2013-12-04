<h2>sumavisos.ctp</h2>

<?php

$xmlCode = null ;

    for ( $i=0 ; $i < count( $publish ) ; $i++ ){

$xmlCode .= '

<?xml version="1.0" encoding="utf-8"?>

<ads>
    <ad>
        <url> http://www.foo.com/realestate/?id=11aa </url>
        <id> 11aa </id>
        <price currency="USD"> 1220000 </price>
        <title> Beautiful apartment, near the sky! </title>
        <content> lorem ipsum tower </content>
        <date> 31/08/2009 </date>
        <region> Buenos Aires </region>
        <city> Ciudad de Buenos Aires </city>
        <city_area> Belgrano </city_area>
        <postcode> 1412 </postcode>
        <features>
            <feature>Pool</feature>
            <feature>Spa</feature>
            <feature>Terrace with trees!</feature>
        </features>
        <affiliate_url>
            http://www.foo.com/track_cdtck?id=11aa
        </affiliate_url>
        <pictures>
            <picture>
                <picture_url>http://www.foo.com/11aa/123.jpg</picture_url>
                <picture_title>View from the pool X</picture_title>
                <picture_thumbnail>http://www.foo.com/11aa/123-ch.jpg</picture_thumbnail>
            </picture>
        </pictures>
        <address> Pepito St 3211 </address>
        <latitude> -34.58828009730246 </latitude>
        <longitude> -58.42357635498047 </longitude>
        <floor_number> 32 </floor_number>
        <property_type> apartment </property_type>
        <type> for sale </type>
        <plot_area> 250 </plot_area>
        <floor_area_open> 40 </floor_area_open>
        <floor_area> 210 </floor_area>
        <patio> no </patio>
        <terrace> yes </terrace>
        <balcony> yes </balcony>
        <blueprint_url> http://foo.com/realestate/11aa/blueprint.png </blueprint_url>
    </ad>
</ads>';

    }

    $name = 'oxl.xml' ;
    $file = fopen( $name, "w+" ) ;
    fwrite( $file, $xmlCode ) ;
    fclose( $file ) ;
?>