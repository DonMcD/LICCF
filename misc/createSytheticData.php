<?php
//HOW TO USE:
//Go to your browser and type ipaddress/createSytheticData.php?number={number of records to create}


require '../backend/serverDetails.php';

// Connect to the database
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// The number of records to be added
$number = $_GET["number"];

// Get the first names from an online dictionary
$first_names = file_get_contents("https://raw.githubusercontent.com/dominictarr/random-name/master/first-names.txt");
$first_names = explode("\n", $first_names);

function makePhoneNumber(){
    $first_part = mt_rand(100, 999);
    $second_part = mt_rand(100, 999);
    $third_part = mt_rand(1000, 9999);

    $number = $first_part."-".$second_part."-".$third_part;
    return $number;
}

// Function to generate a random letter
function random_letter() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return $letters[rand(0, 25)];
}

// Function to generate a random digit
function random_digit() {
    return rand(0, 9);
}

// Loop through the number of records to be added
for ($i = 0; $i < $number; $i++) {
    // Randomly select a first name
    $f_name = $first_names[array_rand($first_names)];
    
    // Randomly select a last name
    $l_name = $first_names[array_rand($first_names)];
    
    // Generate a random date of birth in the past
    $dob = date("Y-m-d", rand(strtotime("1930-01-01"), strtotime("2002-12-31")));
    
    // Randomly select a type (0, 1, or 2)
    $type = rand(0, 2);

    //Random Confirmation
    $confirmation = rand(0, 1);
    // Generate a random date in the last 3 years if $confirmation is equal to 1
    if ($confirmation == 1) {
        $start_date = strtotime("-3 years");
        $end_date = strtotime("now");
        $timestamp = mt_rand($start_date, $end_date);
        $confirmation_date = date("Y-m-d", $timestamp);
    } else {
        $confirmation_date = date("Y-m-d", 00000000);
    }

    //Generate Phone Numbers
    $c_number = makePhoneNumber();
    $w_number = makePhoneNumber();
    $h_number = makePhoneNumber();

    //Generate random gender
    $genders = array("Male", "Female", "Other");
    // randomly select one of the elements from the $genders array
    $gender = $genders[array_rand($genders)];

    //Generate a random email
    $email = strtolower($f_name.".".$l_name.rand(0,100) ."@example.com");

    //Generate a random start date in the last 3 years
    $start_date = date("Y-m-d", strtotime("-" . rand(1, 3) . " year"));

    // Generate random number for street number
    $street_number = rand(1, 999);

    // Get street names
    $street_names = ['Main', 'Maple', 'Oak', 'Pine', 'Cedar', 'Elm', 'Lincoln', 'Washington'];

    // Select a random street name
    $street_name = $street_names[array_rand($street_names)];

    // Generate random number for apartment/suite number
    $apt_suite = rand(1, 999);

    // Generate address string
    $address = "$street_number $street_name St Apt/Suite $apt_suite";

    //Generate random family 
    $fid = rand(1, 5);

    //Generate random baptized
    $baptized = rand(0, 1);

    // List of cities in Alberta
    $cities = ['Calgary', 'Edmonton', 'Red Deer', 'Lethbridge', 'Grande Prairie', 'Fort McMurray', 'Nobleford', 'Picture Butte', 'Coaldale'];
    // Select a random city from the list
    $city = $cities[array_rand($cities)];

    // Generate the first part of the postal code (L1L)
    $postal_code = random_letter() . random_digit() . random_letter() . ' ';

    // Generate the second part of the postal code (1L1)
    $postal_code .= random_digit() . random_letter() . random_digit();

    //Province
    $province = 'Alberta';

    //Generate a random profession
    $professions = array("Doctor", "Lawyer", "Teacher", "Engineer", "Nurse", "Programmer", "Artist", "Musician", "Athlete", "Writer");
    $random_index = array_rand($professions);
    $profession = $professions[$random_index];
    
    // Insert the record into the database
    //$sql = "INSERT INTO members (f_name, l_name, dob, type) VALUES ('$f_name', '$l_name', '$dob', '$type')";

    $sql = "INSERT INTO members (f_name, l_name, dob, fid, type, baptized, gender, confirmation, confirmation_date, start_date, c_number, w_number, h_number, email, address, city, postal_code, province, profession)
    VALUES ('$f_name', '$l_name', '$dob', '$fid', '$type', '$baptized', '$gender', '$confirmation', '$confirmation_date', '$start_date', '$c_number', '$w_number', '$h_number', '$email', '$address', '$city', '$postal_code', '$province', '$profession')";

    mysqli_query($conn, $sql);
}

// Close the connection
mysqli_close($conn);
echo $number . " records created.";
?>
