<?php
function taskLoading(){
    // Set the total number of iterations
    $totalIterations = 100;

    // Start the loop
    for ($i = 1; $i <= $totalIterations; $i++) {
        // Do some work here...

        // Calculate the percentage of completion
        $percentage = intval($i / $totalIterations * 100);

        // Output the progress bar
        echo "[" . str_repeat("#", $percentage) . str_repeat(".", 100 - $percentage) . "] " . $percentage . "%\r";

        // Flush the output to the browser
        flush();
        ob_flush();

        // Sleep for a short while to simulate doing work
        usleep(10000);
    }

    // Output a newline character to clear the progress bar
    echo "\n";
}
?>