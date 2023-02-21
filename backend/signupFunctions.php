<?php
function isValidPostalCode($postalCode) {
  // Remove any whitespace from the input
  $postalCode = preg_replace('/\s+/', '', $postalCode);

  // Check if the postal code matches the pattern A1A 1A1
  if (preg_match('/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/', $postalCode)) {
    // Postal code format is valid, now we need to verify it is a valid postal code
    $url = "https://geocoder.ca/?locate=" . urlencode($postalCode) . "&geoit=XML&auth=1337077566161086704";
    $xml = simplexml_load_file($url);
    if ($xml->xpath('//error')) {
      // An error occurred while querying the geocoding API
      return false;
    } else {
      // The postal code is valid
      return true;
    }
  } else {
    // Postal code format is invalid
    return false;
  }
}

function validateAddress($address, $city, $postalCode, $province) {
    // Encode the address, city, province, and postal code as a single string
    $location = urlencode("$address, $city, $province, $postalCode");
  
    // Query the Google Maps Geocoding API
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$location&key=YOUR_API_KEY";
    $response = file_get_contents($url);
  
    // Parse the response as JSON
    $result = json_decode($response, true);
  
    // Check if the API returned any results
    if ($result['status'] == 'ZERO_RESULTS') {
      return false;
    }
  
    // Check if the first result contains a formatted address, postal code, and province
    $formattedAddress = $result['results'][0]['formatted_address'];
    $postalCodeComponents = $result['results'][0]['address_components'];
    $postalCodeFound = false;
    $provinceFound = false;
  
    foreach ($postalCodeComponents as $component) {
      if (in_array('postal_code', $component['types']) && $component['short_name'] == $postalCode) {
        $postalCodeFound = true;
      }
      if (in_array('administrative_area_level_1', $component['types']) && $component['short_name'] == $province) {
        $provinceFound = true;
      }
    }
  
    if (!$postalCodeFound || !$provinceFound) {
      return false;
    }
  
    // If all checks pass, return true
    return true;
  }
  


?>