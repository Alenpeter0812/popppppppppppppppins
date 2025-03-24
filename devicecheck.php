<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Detect if the user is on Mac
if (stripos($userAgent, 'Macintosh') !== false) {
    // Redirect or include Mac version
    include 'mac-p/index.html'; // adjust path as needed
} 
// Detect if the user is on Windows
elseif (stripos($userAgent, 'Windows') !== false) {
    // Redirect or include Windows version
    include 'windows-p/index.html'; // adjust path as needed
} 
// Fallback (optional)
else {
    echo "Sorry, your operating system is not supported.";
}
?>
