<?php
// Mendeteksi base URL secara otomatis
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$base_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
$base_url = rtrim($base_url, '/') . '/';

// Set the sitemap name
$sitemap_name = 'sitemap';

// Load the keywords from the hajar.txt file
$keywords = file('hajar.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (!$keywords) {
    die("File hajar.txt kosong atau tidak ditemukan.");
}

// Set the maximum number of links per sitemap file
$max_links_per_sitemap = 30000;

// Initialize the sitemap index
$sitemap_index = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$sitemap_index .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Initialize the sitemap files
$sitemap_files = array();

// Iterate over the keywords and generate the sitemap files
foreach ($keywords as $i => $keyword) {
    $cleaned_keyword = strip_tags($keyword);
    $encoded_keyword = htmlspecialchars(urlencode($cleaned_keyword), ENT_QUOTES, 'UTF-8');

    $sitemap_file_number = ceil(($i + 1) / $max_links_per_sitemap);

    if (!isset($sitemap_files[$sitemap_file_number])) {
        $sitemap_files[$sitemap_file_number] = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap_files[$sitemap_file_number] .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    }

    $sitemap_files[$sitemap_file_number] .= '  <url>' . "\n";
    $sitemap_files[$sitemap_file_number] .= '    <loc>' . $base_url . '?hw=' . $encoded_keyword . '</loc>' . "\n";
    $sitemap_files[$sitemap_file_number] .= '  </url>' . "\n";
}

foreach ($sitemap_files as $sitemap_file_number => &$sitemap_file) {
    $sitemap_file .= '</urlset>' . "\n";
    file_put_contents("$sitemap_name-$sitemap_file_number.xml", $sitemap_file);
}

foreach ($sitemap_files as $sitemap_file_number => $sitemap_file) {
    $sitemap_index .= '  <sitemap>' . "\n";
    $sitemap_index .= '    <loc>' . $base_url . $sitemap_name . '-' . $sitemap_file_number . '.xml</loc>' . "\n";
    $sitemap_index .= '  </sitemap>' . "\n";
}
$sitemap_index .= '</sitemapindex>' . "\n";

file_put_contents($sitemap_name . '.xml', $sitemap_index);

echo "Sitemap.xml dan file sitemap telah berhasil dibuat!";
?>
