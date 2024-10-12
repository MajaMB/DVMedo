<?php 
    include('components/header.php');
    include('components/breadcrumb-area.php');
    include('components/team-member-detail.php');
    echo renderBreadcrumbArea('Naš tim');


    // Define the path to the directory containing the markdown files
    $directoryPath = 'djelatnici';

    // Use glob to find all .md files in the directory
    $markdownFiles = glob($directoryPath . '/*.md');
?>

<section class="bd-teacher-widget-area pb-70 pt-120">
    <?php
        // Loop through each markdown file and render the team member detail
        foreach ($markdownFiles as $file) {
            echo renderTeamDetail($file);
        }
        
        include('components/newsletter-subscribe.php');
        include('components/footer.php'); 
    ?>
</section>