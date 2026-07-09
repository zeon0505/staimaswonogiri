<?php
// File ini untuk mendiagnosis error di server
// Upload ke public_html/check.php, akses lewat browser, lalu HAPUS segera

echo "<h2>PHP Info</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'unknown') . "<br><br>";

echo "<h2>Laravel Error Log (50 baris terakhir)</h2>";
$logPath = __DIR__ . '/../staimaswonogiri/storage/logs/laravel.log';
$logPath2 = __DIR__ . '/../storage/logs/laravel.log';

foreach ([$logPath, $logPath2] as $path) {
    if (file_exists($path)) {
        echo "<b>Log found at: $path</b><br>";
        $lines = file($path);
        $last = array_slice($lines, -50);
        echo "<pre style='background:#111;color:#eee;padding:10px;font-size:12px;overflow:auto'>";
        echo htmlspecialchars(implode('', $last));
        echo "</pre>";
        break;
    }
}

echo "<h2>Error di Apache (error_log)</h2>";
$apacheLog = '/var/log/apache2/error.log';
if (file_exists($apacheLog) && is_readable($apacheLog)) {
    $lines = file($apacheLog);
    $last = array_slice($lines, -20);
    echo "<pre>" . htmlspecialchars(implode('', $last)) . "</pre>";
} else {
    echo "Apache log tidak bisa dibaca (normal di shared hosting)<br>";
}

echo "<h2>Cek File Penting</h2>";
$checks = [
    __DIR__ . '/../staimaswonogiri/vendor/autoload.php',
    __DIR__ . '/../staimaswonogiri/.env',
    __DIR__ . '/../staimaswonogiri/bootstrap/cache/config.php',
    __DIR__ . '/index.php',
    __DIR__ . '/.htaccess',
];
foreach ($checks as $f) {
    $exists = file_exists($f) ? '✅ ADA' : '❌ TIDAK ADA';
    echo "$exists — $f<br>";
}
