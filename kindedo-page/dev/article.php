<?php include(__DIR__ . '/components/header.php'); ?>
    <main>
        <!-- breadcrumb area start here -->
        <section class="bd-breadcrumb-area p-relative fix theme-bg">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="<?php echo genFilePath('assets/img/bg/breadcrumb-bg.jpg')?>"></div>
            <div class="bd-breadcrumb-wrapper mb-60 p-relative">
                <div class="container">
                    <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                        <div class="bd-breadcrumb-shape-1">
                            <img src="<?php echo genFilePath('assets/img/shape/curved-line-2.png');?>" alt="img not found!">
                        </div>
                        <div class="bd-breadcrumb-shape-2">
                            <img src="<?php echo genFilePath('assets/img/shape/curved-line-2.png');?>" alt="img not found!">
                        </div>
                    </div>
                    <?php

                    require 'vendor/autoload.php';

                    use Spatie\YamlFrontMatter\YamlFrontMatter;

                    // Directory containing Markdown files
                    $directory = 'news';

                    // Get the filename from the URL parameter
                    $filename = $_GET['id'] ?? null;

                    if ($filename) {
                        // Construct the full file path
                        $filePath = $directory . '/' . basename($filename) . '.md';
                        // Check if the file exists
                        if (file_exists($filePath)) {
                            // Load the Markdown file
                            $markdownContent = file_get_contents($filePath);

                            // Parse the YAML frontmatter
                            $document = YamlFrontMatter::parse($markdownContent);
                            $yamlData = $document->matter();
                            $parsedown = new Parsedown();

                            $adjustedMarkdown = preg_replace_callback(
                                '/^(#{1,6})\s/m',
                                function ($matches) {
                                    $newLevel = min(strlen($matches[1]) + 2, 6); // Cap at h6
                                    return str_repeat('#', $newLevel) . ' ';
                                },
                                $document->body()
                            );


                            $bodyHtml = $parsedown->text($adjustedMarkdown);

                            // Extract metadata
                            $date = gmdate("d F Y", $yamlData['date']) ?? 'Unknown Date';
                            $author = $yamlData['author'] ?? 'Unknown Author';
                            $title = $yamlData['title'] ?? 'Untitled';
                            $header = $yamlData['header'] ?? 'fallback.jpg';

                            // Generate HTML content
                            $htmlContent = <<<HTML
<div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">{$title}</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="/index.php"><i class="flaticon-hut"></i>Vrtic Medo</a></span>
                              <span>{$title}</span>
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

      <!-- blog details area start here  -->
      <section class="bd-blog-details-area pt-120 pb-60">
         <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
               <div class="col-lg-8">
                  <div class="bd-blog-details-wrapper mb-60">
                     <div class="row">
                        <div class="col-12">


<div class="bd-blog-details mb-50">
      <div class="bd-blog-details-thumb">
         <img src="news/headers/{$header}" alt="blog image">
      </div>
      <div class="bd-blog-details-meta">
         <span><i class="fas fa-user"></i>by {$author}</span>
         <span><i class="fas fa-calendar-days"></i> {$date}</span>
      </div>
      {$bodyHtml}
   </div>
</div>


HTML;

                            // Output the HTML content
                            echo $htmlContent;
                        } else {
                            echo "File not found.";
                        }
                    } else {
                        echo "No file specified.";
                    }
                    ?>
                </div>
        </section>
        <!-- blog details area end here  -->
    </main>

<?php include(__DIR__ . '/components/footer.php'); ?>