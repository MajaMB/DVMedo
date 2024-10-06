
<?php
function renderTeacherSlide($teacherName, $position, $imageName) {
    // Ensure input is safely echoed
    $safeTeacherName = htmlspecialchars($teacherName, ENT_QUOTES, 'UTF-8');
    $safePosition = htmlspecialchars($position, ENT_QUOTES, 'UTF-8');
    $safeImageName = htmlspecialchars($imageName, ENT_QUOTES, 'UTF-8');

    return <<<HTML
    <div class="swiper-slide">
        <div class="bd-teacher">
            <a href="teacher-details.html">
                <div class="bd-teacher-thumb">
                    <img src="assets/img/teacher/{$safeImageName}" alt="Image not found">
                </div>
            </a>
            <div class="bd-teacher-content-wrapper">
                <div class="bd-teacher-content">
                    <h4 class="bd-teacher-title"><a href="teacher-details.html">{$safeTeacherName}</a></h4>
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
   ?>
