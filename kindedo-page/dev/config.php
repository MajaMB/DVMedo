<?php

// To handle having multiple environments, place a file named
// 'env.php' in the same folder as this 'config.php' file is.
//
// The contents of that file should look something like this:
// ============================================================================
// <?php
// // env.php
// return [
//     'BASE_URL' => '/dev/dev/',
//     // Add other environment-specific configurations here
// ============================================================================
// ];
function loadConfig(): array
{
    // config.php
    $baseConfig = [
        'BASE_URL' => '/',
        'SHOW_UPISI_HEADER' => true,
        // Add other default configurations here
    ];

    $envFile = __DIR__ . '/env.php';

    if (file_exists($envFile)) {
        $envConfig = include $envFile;
        // Override default config with env config
        return array_merge($baseConfig, $envConfig);
    } else {
        return $baseConfig;
    }
}


function genFilePath($path): string
{
    $cfg = loadConfig();
    if (str_starts_with($cfg["BASE_URL"], "/")) {
        return $cfg["BASE_URL"] . $path;
    }
    return $cfg["BASE_URL"] . '/' . $path;
}

function showUpisi(): string
{
    $cfg = loadConfig();
    if ($cfg["SHOW_UPISI_HEADER"]) {
        return "";
    }
    return "display: none !important;";
}

functzion getMAilObject() : {

    
}