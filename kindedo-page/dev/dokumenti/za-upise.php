<?php
include(__DIR__ . '/../components/header.php');
include(__DIR__ . '/../components/breadcrumb-area.php');
require_once __DIR__ . '/../config.php';
echo renderBreadcrumbArea('Natječaji');
?>

<?php
// Directory containing the documents
$topic = 'za-upise';
$directory = __DIR__ . '/' . $topic;

// Get all files in the directory
$files = array_diff(scandir($directory), array('.', '..'));

// Function to format the date
function formatDate($timestamp)
{
    return date('d.m.Y', $timestamp);
}

?>
<main>
    <section class="bd-routine-area pb-70">
        <div class="container">
            <span></span>
            <div class="row">
                <div class="col">
                    <div class="bd-routine-table mb-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Dokumenti</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($files as $file): ?>
                                <tr>
                                    <td>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <a href="<?php echo genFilePath('/dokumenti/' . $topic . '/' . rawurlencode($file)) ?>"
                                               download style="flex-grow: 1; text-align: left;">
                                                <?php echo htmlspecialchars($file); ?>
                                            </a>
                                            <a href="<?php echo genFilePath('/dokumenti/' . $topic . '/' . rawurlencode($file)); ?>"
                                               download>
                                                <i class="fa-solid fa-download"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include(__DIR__ . '/../components/footer.php'); ?>
