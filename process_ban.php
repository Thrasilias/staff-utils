<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $reason = $_POST["reason"];
    $additional_info = $_POST["additional_info"];
    $staff_name = $_POST["staff_name"];

    // Process the ban report, e.g., log it, store it in a database, etc.
    // You may also want to integrate with the Discord API to perform the ban.

    // Example: Log the ban report to a file
    $log_entry = "User ID: $user_id\nReason: $reason\nAdditional Information: $additional_info\nStaff Name: $staff_name\n";
    file_put_contents('ban_reports.log', $log_entry, FILE_APPEND);

    // You can also perform additional actions here, such as banning the user on Discord.

    echo "Ban report submitted successfully!";
} else {
    // Handle invalid requests
    echo "Invalid request";
}

?>
