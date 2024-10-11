<?php 
    include('../components/header.php'); 
    include('../components/breadcrumb-area.php');
    echo renderBreadcrumbArea('Pedagoška dokumentacija');

    // Directory containing the documents
    $directory = __DIR__ . '/pedagoska-dokumentacija';

    // Get all files in the directory
    $files = array_diff(scandir($directory), array('.', '..'));

    // Function to format the date
    function formatDate($timestamp) {
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
                                                <a href="<?php echo '/dokumenti/pedagoska-dokumentacija/' . rawurlencode($file); ?>" download style="flex-grow: 1; text-align: left;">
                                                    <?php echo htmlspecialchars($file); ?>
                                                </a>
                                                <a href="<?php echo '/dokumenti/pedagoska-dokumentacija/' . rawurlencode($file); ?>" download>
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
<?php include('../components/footer.php'); ?>