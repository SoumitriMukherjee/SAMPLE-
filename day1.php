<!-- 1. Write a PHP script to get information about the following: 
    PHP version, 
    Root directory under which the current script is executing, 
    The file name of currently executing script relative to the document root, 
    Name of the hosting server, 
    Name and version of the protocol via which the page was requested, 
    Request method used to access the page, 
    IP address from where the user is viewing the current page, 
    Hostname from where the user is viewing the current page, 
    Port on server being used for communication. 
    Upload the script and screenshot of the result (executed in the local machine) to the google classroom. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP details</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
  
    .phpd{
        align-content: center;
        margin-top: auto;
        margin-left: 150px;
        padding: auto;
    }
    </style>


</head>
<body>
<h1>PHP DETAILS</h1>
<div class='phpd'>
<?php
  // PHP version
  $phpVersion = phpversion();
  echo "PHP Version: $phpVersion<br>";

  // Root directory under which the current script is executing
  $rootDir = $_SERVER['DOCUMENT_ROOT'];
  echo "Root Directory: $rootDir<br>";

  // File name of currently executing script relative to the document root
  $scriptName = $_SERVER['SCRIPT_NAME'];
  echo "Script Name: $scriptName<br>";

  // Name of the hosting server
  $hostName = $_SERVER['SERVER_NAME'];
  echo "Host Name: $hostName<br>";

  // Name and version of the protocol via which the page was requested
  $protocol = $_SERVER['SERVER_PROTOCOL'];
  echo "Protocol: $protocol<br>";

  // Request method used to access the page
  $requestMethod = $_SERVER['REQUEST_METHOD'];
  echo "Request Method: $requestMethod<br>";

  // IP address from where the user is viewing the current page
  $ipAddress = $_SERVER['REMOTE_ADDR'];
  echo "IP Address: $ipAddress<br>";

  // Hostname from where the user is viewing the current page
  $remoteHost = gethostbyaddr($ipAddress);
  echo "Remote Host: $remoteHost<br>";

  // Port on server being used for communication
  $serverPort = $_SERVER['SERVER_PORT'];
  echo "Server Port: $serverPort<br>";
?>
</div>

</body>
</html>