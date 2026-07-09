<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<h2>PHP Version: ' . PHP_VERSION . '</h2>';

echo '<h3>Test Autoload:</h3>';
try {
    require '/home/staimasw/staimaswonogiri/vendor/autoload.php';
    echo '✅ Autoload OK<br>';
} catch (Throwable $e) {
    echo '❌ Autoload ERROR: ' . $e->getMessage() . '<br>';
}

echo '<h3>Test Bootstrap:</h3>';
try {
    $app = require '/home/staimasw/staimaswonogiri/bootstrap/app.php';
    echo '✅ Bootstrap OK<br>';
} catch (Throwable $e) {
    echo '❌ Bootstrap ERROR: ' . $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}

echo '<h3>ENV File:</h3>';
$env = '/home/staimasw/staimaswonogiri/.env';
echo file_exists($env) ? '✅ .env ADA<br>' : '❌ .env TIDAK ADA<br>';

echo '<h3>Bootstrap Cache:</h3>';
$cache = '/home/staimasw/staimaswonogiri/bootstrap/cache/config.php';
echo file_exists($cache) ? '✅ config.php cache ADA<br>' : '⚠️ config.php cache TIDAK ADA (normal)<br>';

echo '<h3>Storage Writable:</h3>';
$storage = '/home/staimasw/staimaswonogiri/storage/logs';
echo is_writable($storage) ? '✅ Storage writable<br>' : '❌ Storage NOT writable<br>';
