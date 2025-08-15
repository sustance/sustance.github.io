<h3> Server features</h3>
<pre>
<?php
// URLs as before
$urls = [
    'https://bsd.tilde.team/~identity2/a.txt',
    'https://ctrl-c.club/~identity2/a.txt',
    'https://dimension.sh/~identity2/a.txt',
    'https://envs.net/~identity2/a.txt',
    'https://freeshell.de/~identity/a.txt',
    'https://tilde.guru/~edi/a.txt',
    'https://thunix.net/~id/a.txt',
    'https://id2.tilde.institute/a.txt',
    'https://identity2.p.projectsegfau.lt/a.txt',
    'https://id.p.projectsegfau.lt/a.txt',
    'https://tilde.pink/~id2/a.txt',
    'https://tilde.team/~identity2/a.txt',
    'https://thunix.net/~id/a-v.txt',
    'https://thunix.net/~id/a-x.txt',
    'https://identity2.com/~identity2/a.txt',
    'https://thunix.net/~id/a-7.txt',
];

// Collect all content
$content = '';
foreach ($urls as $url) {
    $data = @file_get_contents($url);
    if ($data !== false) {
        $content .= $data . "\n";
    }
}

// Split into lines
$lines = explode("\n", $content);

// Filter lines starting with specified characters
$filtered = array_filter($lines, function($line) {
    return strlen($line) > 0 && in_array($line[0], [']', '!', '[', '(']);
});

// Define the order you want by prefix
$order = ['!', '[', '(', ']'];

// Group lines by their prefix character
$grouped = [];
foreach ($filtered as $line) {
    $prefix = $line;
    if (!isset($grouped[$prefix])) {
        $grouped[$prefix] = [];
    }
    $grouped[$prefix][] = $line;
}

// Output lines grouped and sorted by prefix order
foreach ($order as $prefix) {
    if (isset($grouped[$prefix])) {
        foreach ($grouped[$prefix] as $line) {
            echo $line . "\n";
        }
    }
}
?>
</pre>
