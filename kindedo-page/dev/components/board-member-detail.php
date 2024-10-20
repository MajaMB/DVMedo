<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

use Symfony\Component\Yaml\Yaml;
use Spatie\YamlFrontMatter\YamlFrontMatter;


function renderBoardDetail($boardFile) {
    $directory = __DIR__ . '/../djelatnici';

    // Read the contents of the markdown file
    $content = file_get_contents($boardFile);

    // Extract YAML front matter and main content
    preg_match('/---(.*?)---(.*)/s', $content, $matches);
    $yaml = Yaml::parse($matches[1]);
    $description = trim($matches[2]);

    // Extract data from YAML
    $boardName = $yaml['ime'] . ' ' . $yaml['prezime'];
    $position = $yaml['pozicija'];
    $imageName = $yaml['slika'];
    $email = $yaml['mail'];
    $fileName = pathinfo($boardFile, PATHINFO_FILENAME);

    // Ensure input is safely echoed
    $safeBoardName = htmlspecialchars($boardName, ENT_QUOTES, 'UTF-8');
    $safePosition = htmlspecialchars($position, ENT_QUOTES, 'UTF-8');
    $safeImageName = htmlspecialchars($imageName, ENT_QUOTES, 'UTF-8');
    $safeDescription = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safeFileName = htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8');
    $boardImage = genFilePath("upravno-vijece/slike/" . $safeImageName);



    return <<<HTML

    <div class="container" id="{$safeFileName}">
        <div class="row" style=" display: flex; align-items: stretch;">
            <div class="col-lg-6 mb-50">
                <div class="bd-teacher-widget wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="bd-teacher-widget-thumb p-relative">
                        <img src="{$boardImage}" alt="img not found!">
                        <div class="panel wow"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-50">
                <div class="bd-teacher-widget theme-bg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="bd-teacher-widget-content">
                        <h3 class="bd-teacher-widget-title">{$safeBoardName}</h3>
                        <span class="bd-teacher-widget-tag">{$safePosition}</span>
                        <p>{$safeDescription}</p>
                        <p>Email: <a href="mailto:{$safeEmail}">{$safeEmail}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    HTML;
}

// Example usage
// include 'components/board-member-detail.php';
// echo renderBoardDetail('upravno-vijece/dajana.md');
// echo renderBoardDetail('upravno-vijece/ivana.md');
?>

