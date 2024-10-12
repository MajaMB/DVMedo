<?php
    include(__DIR__ . '/components/header.php');
    include(__DIR__ . '/components/breadcrumb-area.php');
    echo renderBreadcrumbArea('Obavijesti');
?>
    <main>
        <!-- blog area start here  -->
        <section class="bd-blog-area pt-120 pb-120">
            <div class="container">
                <div class="bd-blog-menu-wrapper">
                </div>
                <div class="row grid">
                    <?php

                    require 'vendor/autoload.php';

                    use Spatie\YamlFrontMatter\YamlFrontMatter;

                    // use Parsedown;

                    // Directory containing Markdown files
                    $directory = './news';


                    // Array to hold file data
                    $filesData = [];
                    // Iterate over each Markdown file in the directory
                    foreach (glob("$directory/*.md") as $filePath) {
                        // Load the Markdown file
                        $markdownContent = file_get_contents($filePath);

                        // Parse the YAML frontmatter
                        $document = YamlFrontMatter::parse($markdownContent);
                        $yamlData = $document->matter();

                        // Extract metadata
                        $date = $yamlData['date'] ?? 0; // Default to a very old date if not set
                        $author = $yamlData['author'] ?? 'Unknown Author';
                        $title = $yamlData['title'] ?? 'Untitled';
                        $header = $yamlData['header'] ?? 'fallback.jpg';

                        // Add file data to the array
                        $filesData[] = [
                            'date' => $date,
                            'author' => $author,
                            'title' => $title,
                            'path' => pathinfo($filePath, PATHINFO_FILENAME),
                            'header' => $header,
                        ];
                    }

                    // Sort files by date in descending order
                    usort($filesData, function ($a, $b) {
                        return strtotime($b['date']) - strtotime($a['date']);
                    });

                    // Iterate over each Markdown file in the directory
                    foreach ($filesData as $fileData) {
                        $date = gmdate("d F Y", $fileData['date']);;
                        $author = $fileData['author'];
                        $title = $fileData['title'];
                        $path = $fileData['path'];

                        // Generate HTML content
                        $htmlContent = <<<HTML
<div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-3 c-4">
    <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
        <a href="article.php?id={$path}">
            <div class="bd-blog-thumb">
                <img src="news/headers/{$header}" alt="blog image">
            </div>
        </a>
        <div class="bd-blog-content">
            <div class="bd-blog-date">
                <span>{$date}</span>
            </div>
            <div class="bd-blog-meta">
                <span><i class="fas fa-user"></i> by {$author}</span>
            </div>
            <h4 class="bd-blog-title">
                <a href="article.php?id={$path}">
                    {$title}
                </a>
            </h4>
        </div>
    </div>
</div>
HTML;

                        // Output the HTML content
                        echo $htmlContent;
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- blog area end here  -->
    </main>
<?php include(__DIR__ . '/components/footer.php'); ?>