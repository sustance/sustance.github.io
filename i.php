<?php 
    $header = file_get_contents('https://raw.githubusercontent.com/sustance/sustance.github.io/refs/heads/main/head-land.html');
    echo $header
?>

    
    
<div class="bsd">
<p>
<i>DE.</i> <b>b</b>sd.tilde.team <span class="sml">157.90.196.52</span> 
<a href="https://bsd.tilde.team/">b.t.t</a> 
<a href="https://bsd.tilde.team/~identity2">b.t.t/~i52</a> 

<?php
    $bbb = file_get_contents('https://bsd.tilde.team/~identity2/a.txt');
    echo $bbb;
?>
</p>
</div>


    
<div class="box">
<i>US.</i> <b>c</b>trl-c.club <span class="tin">165.227.127.54</span> <i>NewsB</i> 
<a href="https://ctrl-c.club/">c.c</a>
<a href="https://ctrl-c.club/~i52">c.c/~i72</a>
<a href="https://ctrl-c.club/~identity2/lineage/">c.c/~i72/lineage</a> &nbsp; 

<?php
$ccc = file_get_contents('https://ctrl-c.club/~identity2/a.txt');
echo $ccc;
?>

</div>






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


    
<?php
    // Load footer
    $footer = file_get_contents('https://raw.githubusercontent.com/sustance/sustance.github.io/refs/heads/main/tail-land.html');
    echo $footer;
?>

</body>
</html>
