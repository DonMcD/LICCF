<?php
function cleanInput($input) {
    // Use the filter_var() function to remove any tags or special characters
    return filter_var($input, FILTER_SANITIZE_STRING);
}
?>