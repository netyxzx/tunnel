<?php
function createSitemap($judulFile, $sitemapFileName)
{
    if (!file_exists($judulFile)) {
        die("File " . $judulFile . " tidak ditemukan.");
    }

    $fileLines = file($judulFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $jumlahBaris = count($fileLines);

    if ($jumlahBaris == 0) {
        die("File " . $judulFile . " kosong.");
    }

    $sitemapFile = fopen($sitemapFileName, "w");
    if (!$sitemapFile) {
        die("Gagal membuat sitemap.");
    }

    fwrite($sitemapFile, '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL);
    fwrite($sitemapFile, '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL);

    date_default_timezone_set('Asia/Jakarta');
    $currentTime = date('Y-m-dTH:i:sP');

    foreach ($fileLines as $judul) {
        $sitemapLink = $GLOBALS['urlAsli'] . '?hw=' . urlencode($judul);
        fwrite($sitemapFile, "  <url>\n    <loc>$sitemapLink</loc>\n    <lastmod>$currentTime</lastmod>\n    <changefreq>daily</changefreq>\n  </url>\n");
    }

    fwrite($sitemapFile, '</urlset>' . PHP_EOL);
    fclose($sitemapFile);

    echo "SITEMAP DONE CREATE!";
}

// Tentukan base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'example.com';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$baseUrl = "$protocol://$host" . dirname($requestUri);
$urlAsli = rtrim($baseUrl, '/') . '/';

// Buat robots.txt (hanya jika belum ada)
$robotsPath = 'robots.txt';
if (!file_exists($robotsPath)) {
    $robotsTxt = "User-agent: *\nAllow: /\nSitemap: " . $urlAsli . "sitemap.xml\n";
    file_put_contents($robotsPath, $robotsTxt);
}

createSitemap("hajar.txt", "sitemap.xml");
?>
