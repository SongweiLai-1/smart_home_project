<?php

// PHP code to obtain country, city,
// continent, etc using IP Address

// Use JSON encoded string and converts
// it into a PHP variable

function get_location(){
    $ipdat = @json_decode(file_get_contents(
        "http://www.geoplugin.net/json.gp?ip=".$ip));

    $_SESSION['country_name'] = $ipdat->geoplugin_countryName;
    $_SESSION['city_name'] = $ipdat->geoplugin_city;
    $_SESSION['Continent_Name'] = $ipdat->geoplugin_continentName;
    $_SESSION['Latitude'] = $ipdat->geoplugin_latitude;
    $_SESSION['Longitude'] = $ipdat->geoplugin_longitude;
    $_SESSION['Timezone'] = $ipdat->geoplugin_timezone;

    echo 'Ip address: ' .$ip ."\n";
    echo 'Country Name: ' .$_SESSION['country_name'] . "\n";
    echo 'City Name: ' . $_SESSION['city_name'] . "\n";
    echo 'Continent Name: ' . $_SESSION['Continent_Name'] . "\n";
    echo 'Latitude: ' . $_SESSION['Latitude'] . "\n";
    echo 'Longitude: ' .$_SESSION['Longitude'] . "\n";
    echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n";
    echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n";
    echo 'Timezone: ' . $_SESSION['Timezone'];

}
