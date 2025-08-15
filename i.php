 <?php 
    $header = file_get_contents('https://raw.githubusercontent.com/sustance/sustance.github.io/refs/heads/main/head-land.html');
    echo $header
?>


<div class="box"> <p><i>Mob</i> <b>le</b><span class="sml">novo</p>
<p>SIP Address	2233589729@sip2sip.info<br>
Username	2233589729  PASS: ;;6sip<br>
Domain	sip2sip.info<br>
Other SIP servers available To locate SIP device must lookup DNS<br>
<br>
Acct settings, login using credentials http://x.sip2sip.info<br>
FAIL sufbo, k.m@g.c<br>
<br>
Zoiper Test Server<br>
Domain: zoiper.com<br>
Preconfigured test account for Zoiper softphone<br>
<br>
Quick setup for basic SIP testing<br>
Use username: test, password: test1234<br>
Server: sip.zoiper.com (port 5060)</p>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IDNIX</title>
 <link rel="stylesheet" href="https://sustance.github.io/head.css" />
</head>
<body>
<div class="box"> 

<!--
<?php
// Establish an SSH connection using .ssh/config settings
$connection = ssh2_connect('c', 22);
if ($connection) {
    // Attempt public key authentication (configured in .ssh/config)
    if (ssh2_auth_pubkey_file($connection, 'username', 
        '~/.ssh/ctrlc.pub', '~/.ssh/ctrlc')) {
        echo "Authentication successful!\n";
        $remoteFile = '$HOME/public_html/a.txt';
        $localFile = '$HOME/public_html/file-c.txt';
        if (ssh2_scp_recv($connection, $remoteFile, $localFile)) {
            echo "File successfully downloaded to $localFile\n";
        } else {
            echo "Failed to download the file.\n";
        }
    } else {
        echo "Authentication failed!\n";
    }
} else {
    echo "Connection failed!\n";
}
// Close the connection
if ($connection) {
    ssh2_disconnect($connection);
}
?>
-->

    
<?php
    // Load footer
    $footer = file_get_contents('https://raw.githubusercontent.com/sustance/sustance.github.io/refs/heads/main/tail-land.html');
    echo $footer;
?>

</body>
</html>
