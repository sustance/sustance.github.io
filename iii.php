<?php
// 1. Collect all your multi-source content into a single string variable
$content = "";

// Example: Fetch all remote text contents you want to include (simplified)
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

// Fetch each URL content and concatenate
foreach ($urls as $url) {
    $data = @file_get_contents($url);
    if ($data !== false) {
        $content .= $data . "\n";
    }
}

// 2. Split content into lines
$lines = explode("\n", $content);

// 3. Filter lines that start with "]", "!", "[", "("
$filtered = array_filter($lines, function($line) {
    return strlen($line) > 0 && in_array($line[0], [']', '!', '[', '(']);
});

// 4. Output the filtered lines
foreach ($filtered as $line) {
    echo $line . "\n";
}
?>
