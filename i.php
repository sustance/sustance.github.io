<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <?php 
    // Load header
    $header = file_get_contents('https://raw.githubusercontent.com/sustance/sustance.github.io/refs/heads/main/head-land.html');
    echo $header;
    ?>
    
   <main>
        <h1>Welcome</h1>
        <?php
        $greeting = "Hello, visitor!";
        echo "<p>$greeting</p>";
        ?>
    </main>
    
    <?php
    // Load footer
    $footer = file_get_contents('https://raw.githubusercontent.com/sustance/sustance.github.io/refs/heads/main/tail-land.html');
    echo $footer;
    ?>
</body>
</html>
