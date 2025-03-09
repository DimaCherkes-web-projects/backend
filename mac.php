<?php
// Function to get the MAC address of the server
function getServerMacAddress() {
    // Command to get the MAC address (Linux/Unix based systems)
    $command = "ifconfig | grep ether | awk '{print $2}'";
    
    // Execute the command and store the output
    $macAddress = exec($command);

    // Return the MAC address
    return $macAddress;
}

// Get the MAC address
$macAddress = getServerMacAddress();

// Display the MAC address
echo "Server MAC Address: " . ($macAddress ? $macAddress : "Not Found");
?>