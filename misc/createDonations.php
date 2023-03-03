<?php

// Define a function to generate a random email address
function random_email() {
  $letters = 'abcdefghijklmnopqrstuvwxyz';
  $username = '';
  for ($i = 0; $i < 10; $i++) {
    $username .= $letters[rand(0, 25)];
  }
  $domain = ['gmail.com', 'yahoo.com', 'hotmail.com'][rand(0, 2)];
  return $username . '@' . $domain;
}

// Get the number of records to create from the URL query string
$num_records = isset($_GET['num_records']) ? intval($_GET['num_records']) : 10;

// Connect to the database
require '../backend/serverDetails.php';
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Loop to create the specified number of records
for ($i = 0; $i < $num_records; $i++) {
  // Generate random values for each column
  $amount = rand(1, 5000) + (rand(0, 99) / 100.0);
  $type = rand(0, 1);
  $date = date('Y-m-d', strtotime('-' . rand(0, 730) . ' days'));
  $env_number = rand(100000, 999999);
  $transfer_email = random_email();
  $sec_question = ['apple', 'banana', 'cherry', 'durian', 'elderberry'][rand(0, 4)];
  $mid = rand(1, 1000);

  // Insert the record into the database
  $sql = "INSERT INTO donations (amount, type, date, env_number, transfer_email, sec_question, mid)
          VALUES ('$amount', '$type', '$date', '$env_number', '$transfer_email', '$sec_question', '$mid')";

  if (mysqli_query($conn, $sql)) {
    echo "Record $i created successfully<br>";
  } else {
    echo "Error creating record: " . mysqli_error($conn) . "<br>";
  }
}

// Close the database connection
mysqli_close($conn);

?>
