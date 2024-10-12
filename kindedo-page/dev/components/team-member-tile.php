
<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Spatie\YamlFrontMatter\YamlFrontMatter;

function renderTeacherSlide($filePath) { 
    $content = file_get_contents($filePath);

    // Extract YAML front matter and main content
    preg_match('/---(.*?)---(.*)/s', $content, $matches);
    $yaml = Yaml::parse($matches[1]);

    // Extract data from YAML
    $teacherName = $yaml['ime'] . ' ' . $yaml['prezime'][0] . '.';
    $position = $yaml['pozicija'];
    $imageName = $yaml['slika'];

    $safeTeacherName = htmlspecialchars($teacherName, ENT_QUOTES, 'UTF-8');
    $safePosition = htmlspecialchars($position, ENT_QUOTES, 'UTF-8');
    $safeImageName = htmlspecialchars($imageName, ENT_QUOTES, 'UTF-8');

    return <<<HTML
    <div class="swiper-slide">
        <div class="bd-teacher">
            <a href="djelatnici.php">
                <div class="bd-teacher-thumb">
                    <img src="djelatnici/slike/{$safeImageName}" alt="Image not found">
                </div>
            </a>
            <div class="bd-teacher-content-wrapper">
                <div class="bd-teacher-content">
                    <h4 class="bd-teacher-title"><a href="djelatnici.php">{$safeTeacherName}</a></h4>
                    <span class="bd-teacher-des">{$safePosition}</span>
                </div>
                <div class="bd-teacher-social"><ul></ul></div>
            </div>
        </div>
    </div>
    HTML;
    }

    // Example usage
    // include 'components/team-member-tile.php';
    // echo renderTeacherSlide('Dajana B.', 'Ravnateljica', '5.jpg');
    // echo renderTeacherSlide('John Doe', 'Math Teacher', 'john.jpg');
?>
