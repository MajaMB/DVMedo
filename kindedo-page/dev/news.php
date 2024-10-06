<?php include('components/header.php'); ?>
<main>
   <!-- breadcrumb area start here -->
   <section class="bd-breadcrumb-area p-relative fix theme-bg">
      <!-- breadcrumb background image -->
      <div class="bd-breadcrumb-bg" data-background="/assets/img/bg/breadcrumb-bg.jpg"></div>
      <div class="bd-breadcrumb-wrapper mb-60 p-relative">
         <div class="container">
            <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
               <div class="bd-breadcrumb-shape-1">
                  <img src="/assets/img/shape/curved-line-2.png" alt="img not found!">
               </div>
               <div class="bd-breadcrumb-shape-2">
                  <img src="/assets/img/shape/white-curved-line.png" alt="img not found!">
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-xl-10">
                  <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                     <div class="bd-breadcrumb-content text-center">
                        <h1 class="bd-breadcrumb-title">Obavjesti</h1>
                        <div class="bd-breadcrumb-list">
                           <span><a href="/index.php"><i class="flaticon-hut"></i>Vrtic Medo</a></span>
                           <span>Obavjesti</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bd-wave-wrapper bd-wave-wrapper-3">
         <div class="bd-wave bd-wave-3"></div>
         <div class="bd-wave bd-wave-3"></div>
      </div>
   </section>
   <!-- breadcrumb area end here  -->

   <!-- blog area start here  -->
   <section class="bd-blog-area pt-120 pb-120">
      <div class="container">
         <div class="bd-blog-menu-wrapper">
         </div>
         <div class="row grid">

<?php

require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
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
    if ($a['date'] == $b['date']) {
        return 0;
    }
    return ($a['date'] > $b['date']) ? -1 : 1;
});

// Iterate over each Markdown file in the directory
foreach ($filesData as $fileData) {
    $date = gmdate("d F Y", $fileData['date']);
    $author = $fileData['author'];
    $title = $fileData['title'];
    $path = $fileData['path'];

    // Generate HTML content
    $htmlContent = <<<HTML
<div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-3 c-4">
    <div class="bd-blog mb-40">
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
<?php include('components/footer.php'); ?>